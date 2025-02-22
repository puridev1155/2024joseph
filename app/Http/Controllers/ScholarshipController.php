<?php

namespace App\Http\Controllers;

use App\Models\Single;
use App\Models\Register;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $path = $request->path();
        $dotPath = str_replace('-', '.', $path);

        if($dotPath == "scholarship") {
            $dotPath = "scholarship.index";
            $single = Single::where('id', 3)->first();
        } else if ($dotPath == "scholarship.register") {
            $single = Register::where('id', $request->id ?? 1)->first();
        }

        return view($dotPath, compact('single'));
    }

    public function apply(Request $request) {
        return view('scholarship.apply');
    }

    public function submitForm(Request $request) {
        // Validate input
        $validatedData = $request->validate([
            'register_date' => 'required|string|max:255',
            'register_target' => 'required|string|max:255',
            'register_price' => 'required|string|max:255',
            'register_qualification' => 'required|string',
            'register_process' => 'required|string',
            'register_document' => 'required|string',
            'register_contact' => 'required|string',
            'register_agree' => 'required|boolean',
        ]);

        // Save to the database
        $register = new Register($validatedData);
        $register->save();

        return redirect()->route('register.apply')->with('success', 'Form submitted successfully!');
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
