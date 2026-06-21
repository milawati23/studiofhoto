<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }


    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {
        Category::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/categories');
    }


    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/categories');
    }


    public function destroy($id)
    {
        Category::find($id)->delete();

        return redirect('/categories');
    }

}