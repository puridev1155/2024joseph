<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Ask;
use Illuminate\Support\Facades\Auth;

class AskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   

        return view('notice.ask-post', compact([]));
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
  
        // Check if user is authenticated
        if (Auth::check()) {
            // Log the title for debugging purposes
            Log::info($request->title);

            // Validate the request data
            $validated = $request->validate([
                'opening' => 'nullable',
                'title' => 'required|string|max:255',
                'content' => 'required|string',
            ]);

            // Add the authenticated user's ID
            $validated['user_id'] = Auth::user()->id;

            // Insert the validated data into the 'asks' table
            Ask::create($validated);

            // Redirect back with success message
            return redirect()->route('notice.ask')->with('success', '질문이 성공적으로 등록되었습니다.');
        }

        // If not authenticated, redirect back with an error message
        return redirect()->route('notice.ask')->with('error', '로그인이 필요합니다.');
    
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
