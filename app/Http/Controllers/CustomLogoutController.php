<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
class CustomLogoutController extends Controller
{
    public function logout () {
        foreach(Cart::content() as $item){
            Cart::remove($item->rowId);
        };
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/')->with('logout_message', "You logged out successfully.");
    }
}
