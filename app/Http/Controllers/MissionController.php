<?php

namespace App\Http\Controllers;

use App\Models\Single;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $path = $request->path();
        $dotPath = str_replace('-', '.', $path);

        if($dotPath == "mission") {
            $dotPath = "mission.index";
            $single = Single::where('id', 1)->first();
        } else if ($dotPath == "mission.logo") {
            $single = Single::where('id', 2)->first();
        } else if ($dotPath == "mission.organization") {
            $single = NULL;
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
