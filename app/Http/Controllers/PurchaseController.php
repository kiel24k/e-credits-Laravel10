<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function userPurchase($id){
       $purchase = product::findOrFail($id);
        return view('user.components.purchase',compact('purchase'));
    }
}
