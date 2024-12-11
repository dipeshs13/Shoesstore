<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;


class OrderManager extends Controller
{
    //
    function order_page(){
        return view('Order');
    }

    public function submit_order(Request $request)
    {
        // Validate the form data
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'shoes' => 'required',
            'shoessize' => 'required',
            'phone_number' => 'required',
            'payment_method' => 'required|in:cod,esewa',
            'user_id' => 'required|exists:users,id',
        ]);
        // dd('Validation passed', $request->all());

        $data['name'] = $request->name;
        $data['address'] = $request->address;
        $data['shoes'] = $request->shoes;
        $data['shoe_size'] = $request->shoessize;
        $data['phone_number'] = $request->phone_number;
        $data['payment_method'] = $request->payment_method;
        $data['user_id'] = $request->user_id;
        $user = Order::create($data);

        if(!$user){
            return redirect(route("Order"))->with("error", "Order failed");
        }
        return redirect(route("Order"))->with("success", "Order Success");

        // Order::create([
        //     'name' => $request->name,
        //     'address' => $request->address,
        //     'shoes' => $request->shoes,
        //     'shoe_size' => $request->shoessize,
        //     'phone_number' => $request->phone_number,
        //     'payment_method' => $request->payment_method,
        // ]);

        // // Redirect with a success message
        // return redirect()->route('Order')->with('success', 'Order placed successfully!');

    }
    public function order_history()
    {
        // Fetch all orders for the logged-in user
        // return $orders = Order::all();
        $orders = Order::where('user_id', auth()->id())->get();
        return view('History', compact('orders'));
    }
}
