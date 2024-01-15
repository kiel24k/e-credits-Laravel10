<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\ProductAuth;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function userPurchase($id)
    {
        $purchase = product::findOrFail($id);
        return view('user.components.purchase', compact('purchase'));
    }
    public function purchaseProduct(Request $req)
    {

        $req->validate([
            'product_quantity' => 'required|number',
        ]);
        $user = ProductAuth::create([
            'owner' => $req->owner,
            'product_name' => $req->product_name,
            'product_type' => $req->product_type,
            'product_quantity' => $req->product_quantity,
            'product_price' => $req->product_price
        ]);

        $user->product_price = $user->product_quantity * $user->product_price;
        $user->save();

        if ($user) {
            request()->session()->flash('message', 'Item Added Succesfully');
        } else {
            request()->session()->flash('error', 'Item not Succesfull');
        }

        return redirect()->route('user.section');
    }


}
