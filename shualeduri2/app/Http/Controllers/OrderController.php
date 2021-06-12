<?php


namespace App\Http\Controllers;


use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function myOrders(Request $request) {
        $currentUser = $request->user();
        return Orders::where('user_id', '=', $currentUser->id)->get();
    }
}
