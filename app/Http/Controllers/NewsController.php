<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }
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
        ]);

        return redirect()->route('news.index')->with('success', 'Новость успешно добавлена');
    }
    public function delete($id)
    {
        $news = News::findOrFail($id)->delete();
        return back();
    }
}
