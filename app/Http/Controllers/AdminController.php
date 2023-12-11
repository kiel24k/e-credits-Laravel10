<?php

namespace App\Http\Controllers;

use App\models\client;
use App\Models\Admin;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminProduct()
    {
        $product = DB::table('product')
            ->select('*')
            ->get();
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

        $products = new product;
        $product = product::find($req->id);
        $product->product_name = $req->product_name;
        $product->product_type = $req->product_type;
        $product->product_description = $req->product_description;
        $product->product_quantity = $req->product_quantity;
        $product->product_price = $req->product_price;
        if ($image = $req->file('product_image')) {
            $destinationPath = 'images/';
            $profileImage = $image->extension();
            $image->move($destinationPath, $profileImage);
            $product['product_image'] = $profileImage;
            $product->update();
        }

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
            'description' => 'string|max:255',
            'quantity' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:png,jpg,svg,jpeg,gif'
        ]);
        $product = new product;
        $product->product_name = $request->name;
        $product->product_type = $request->type;
        $product->product_description = $request->description;
        $product->product_quantity = $request->quantity;
        $product->product_price = $request->price;
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = $image->extension();
            $image->move($destinationPath, $profileImage);
            $product['product_image'] = $profileImage;
            $product->save();
            // product::create([
            //     'product_name' => $request->name,
            //     'product_type' => $request->type,
            //     'product_description' => $request->description,
            //     'product_quantity' => $request->quantity,
            //     'product_price' => $request->price,
            // ]);
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
}
