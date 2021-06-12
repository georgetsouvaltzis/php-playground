<?php


namespace App\Http\Controllers;


class ProductController
{
    public function purchaseProduct(Request $request) {
        if(Auth::check()) {

            $currentProduct = Products::findOrFail($request->id);

            if($request->stock > $currentProduct->stock)
                return "Requested stock is more than available stock " + $currentProduct->stock;

            $currentUser = $request->user();
            if($currentUser->balance < $currentProduct->price)
                return "Current product's price is higher than available balance";

            $order = Order::create();
            $order->user_id = $currentUser->id;
            $order->paid_amount = $currentProduct->price;
            $currentProduct->stock = $currentProduct->stock - $request->stock;
            $order->update();
            $order->save();
            $currentProduct->update();
            $currentProduct->save();
        }
        return "You should be logged in";
    }
}
