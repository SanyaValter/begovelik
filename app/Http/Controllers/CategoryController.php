<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $password = 'admin11'; // Пароль

        if ($request->password !== $password) {
            return redirect()->back()->with('error', 'Неверный пароль');
        }
        $category = new Category();
        $category->name = $request->input('name');
        $category->password = $request->input('password');
        $category->slug = Str::slug($request->input('name'));
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Успешно!');
    }
    public function index()
{
    $categories = Category::all();

    return view('categories.index', compact('categories'));
}
}
