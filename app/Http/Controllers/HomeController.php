<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Book;
use App\Models\Post;
use App\Models\Graduate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::where('category_id', 2)->get();
        $posts = Post::selectRaw('id, title, thumbnail, created_at')->orderBy('created_at', 'desc')->take(3)->get();
        $graduates = Graduate::where('location', 1)->get();
        $books = Book::latest()->get();

        return view('index',compact('posts', 'graduates', 'books', 'slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
