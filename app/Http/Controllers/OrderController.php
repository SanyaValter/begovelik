<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order() {
        return view('order');
    }
    public function store(Request $request) {

        $data = [
            'childName' => $request->childName,
            'surnameСhild' => $request->surnameСhild,
            'nameOfParents' => $request->nameOfParents,
            'phone' => $request->phone,
            'email' => $request->email,
            'year' => $request->year,
            'date' => $request->date,
        ];

        Order::create($data);

        return redirect()->back();
    }
}

