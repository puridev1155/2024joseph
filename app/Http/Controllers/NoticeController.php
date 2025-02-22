<?php

namespace App\Http\Controllers;
use App\Models\Single;
use App\Models\Ask;
use App\Models\Post;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $path = $request->path();
        $dotPath = str_replace('-', '.', $path);

        if($dotPath == "notice") {
            $single = Post::orderBy('created_at', 'desc')->get();
            $dotPath = "notice.index";
        } else if ($dotPath == "notice.ask") {
            $single = Ask::orderBy('created_at', 'desc')->get();
        } else if ($dotPath == "notice.faq") {
            $single = Single::where('id', 5)->first();
        }

        
        return view($dotPath, compact('single'));
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
       $single = Post::where('id', $id)->first();
       return view('notice.show', compact('single'));

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
