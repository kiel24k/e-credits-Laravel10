<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\models\client;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function adminProduct()
    {
        $product = DB::table('product')
            ->simplePaginate(5);
        return view('admin.components.product', compact('product'));
    }
    public function adminAddProduct()
    {
        return view('admin.components.add_product');
    }
    public function adminAddView()
    {
        return view('admin.components.add_admin');
    }
    public function adminUpdateView($id)
    {
        $product = product::findOrFail($id);
        return view('admin.components.update_product', compact('product'));
    }
    public function adminUpdate(Request $req)
    {

        $req->validate([
            'product_name' => 'required',
            'product_type' => 'required',
            'product_description' => 'string|max:255|nullable',
            'product_price' => 'required',
            'product_image' => 'required|image|mimes:png,jpg,svg,jpeg,gif',
            'category' => 'required',
        ]);
        $product = product::find($req->id);
        if ($req->hasFile('product_image')) {
            $destination = 'images/' . $product->product_Image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $req->file('product_image');
            $extension = $file->hashName();
            $filename = $extension;
            $file->move('images/', $filename);
            $product->product_image = $filename;
        }
        product::find($req->id)->update([
            'product_name' => $req->product_name,
            'product_type' => $req->product_type,
            'product_description' => $req->product_description,
            'product_price' => $req->product_price,
            'category' => $req->category,
        ]);

        $product->update();
        return redirect()->route('admin.product');
    }


    public function adminAdd(Request $request)
    {
        $request->validate([
            'admin_email' => 'required|email|unique:admins,admin_email',
            'admin_password' => 'required|string|max:12'
        ]);
        client::create([
            'username' => 'admin',
            'email' => $request->admin_email,
            'password' => bcrypt($request->admin_password),
            'user_type' => 'admin'
        ]);
        Admin::create([
            'admin_email' => $request->admin_email,
            'admin_password' => bcrypt($request->admin_password),
        ]);
        return redirect()->route('admin.product');
    }
    public function adminAddProducts(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => '|max:255',
            'price' => 'required',
            'image' => 'required|image|mimes:png,jpg,svg,jpeg,gif',
            'category' => 'required',
        ]);
        $product = new product;
        $product->product_name = $request->name;
        $product->product_type = $request->type;
        $product->product_description = $request->description;
        $product->product_price = $request->price;
        $product->category = $request->category;
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = $image->hashName();
            $image->move($destinationPath, $profileImage);
            $product['product_image'] = $profileImage;
            $product->save();
            return redirect()->route('admin.product');
        }
    }
    public function adminLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.login');
    }
    public function delete($id)
    {
        product::findOrFail($id)->delete();
        return redirect()->route('admin.product');
    }
    public function income()
    {
        $income = DB::table('product_auths')
            ->sum('product_price');
        $owner = DB::table('product_auths')
            ->count('owner');

        return view(
            'admin.components.income',
            ['income' => $income],
            ['owner' => $owner]
        );
    }
}
