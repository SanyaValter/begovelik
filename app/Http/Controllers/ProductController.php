<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $password = 'admin11'; // Пароль

        if ($request->password !== $password) {
            return redirect()->back()->with('error', 'Неверный пароль');
        }
        $product = new Product();
        $product->name = $request->input('name');
        $product->text = $request->input('text');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->password = $request->input('password');

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->img = $imageName;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Успешно!');
    }

}
