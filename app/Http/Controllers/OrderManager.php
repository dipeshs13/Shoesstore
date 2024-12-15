<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use Str;


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
            'name' => 'required|min:5',
            'address' => 'required|min:5',
            'shoes' => 'required|min:5',
            'shoessize' => 'required|integer|between:32,43',
            'phone_number' => 'required|integer|digits:10',
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
        if($data['payment_method']=='esewa'){
            $uuid = Str::uuid()->toString();
            // total_amount=100,transaction_uuid=11-201-13,product_code=EPAYTEStT
            $m = "total_amount=5010,transaction_uuid=$uuid,product_code=EPAYTEST";
            $s = $s = hash_hmac('sha256',$m, '8gBm/:&EnhH.1/q', true);

            $esewaData =[
                "amt"=>5000,
                "uuid"=> $uuid,
                "signature"=> base64_encode($s),
            ];

            return view('redirect_to_esewa', compact('esewaData'));

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
