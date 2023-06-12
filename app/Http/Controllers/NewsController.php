<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
        ]);

        $password = 'admin11'; // Пароль

        if ($request->password !== $password) {
            return redirect()->back()->with('error', 'Неверный пароль');
        }

        $imageName = null;
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        News::create([
            'name' => $request->input('name'),
            'text' => $request->input('text'),
            'img' => $imageName,
            'date' => $request->input('date'),
            'password' => $request->input('password'),
        ]);

        return redirect()->route('news.index')->with('success', 'Новость успешно добавлена');
    }

    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }
}
