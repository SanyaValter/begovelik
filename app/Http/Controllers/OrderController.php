<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\Order;
use App\Mail\OrderMail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order() {
        return view('order');
    }
    public function store(Request $request) {

        $data = [
            'childName' => $request->childName,
            'nameOfParents' => $request->nameOfParents,
            'email' => $request->email,
            'phone' => $request->phone,
            'email' => $request->email,
            'year' => $request->year,
            'date' => $request->date,
        ];

        Order::create($data);
        $email = $data['email'];

        Mail::to($email)->send (new OrderMail($data));
        return redirect()->back();
    }
}

