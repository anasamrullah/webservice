<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blog = Blog::all();
        // dd('blog.index');
        return view('blog.index', compact('blog'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'body' => 'required',
            'keyword' => 'required',
        ]);

        Blog::create($request->all());
        return redirect(route('blog.index'));
    }

    
    public function delete(Blog $id)
    {
        $id->delete();
        return redirect('blog');
    }
    
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'body' => 'required',
            'keyword' => 'required',
        ]);
        $blog->update($request->all());
        return redirect(route('blog.index'));
    }
}