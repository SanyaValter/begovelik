<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\news;
class MainController extends Controller
{
    public function main() {
        return view('main');
    }
    public function Contacts() {
        return view('Contacts');
    }
    public function aboutus() {
        return view('aboutus');
    }

    public function Photos() {
        return view('Photos');
    }
    public function Treatment() {
        return view('Treatment');
    }
    public function admin() {
        return view('admin');
    }
    public function search(Request $request) {
        $data = $request->validate([
            'search' => ['required', 'string', 'min:3']
        ]);
        $search = $request->search;
        $products = Product::where('name','like',"%" . $search . "%")->orderBy('name')->paginate(10);
        return view('catalog', compact('products'));
    }
}
