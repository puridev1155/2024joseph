<?php

namespace App\Http\Controllers;

use App\Models\Single;
use App\Models\Graduate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $path = $request->path();
        $dotPath = str_replace('-', '.', $path);
        $id = Graduate::max('group_id');

        if($dotPath == "leader") {
            $dotPath = "leader.index";
            $single = Single::where('id', 4)->first();
        } else if ($dotPath == "leader.graduate") {
            if($request->group_id) {
                $graduates = Graduate::where('group_id', $request->group_id)->get();
            } else {
                $graduates = Graduate::where('group_id', $id)->get();
            }
            return view ($dotPath, compact('graduates', 'id'));
        } else if ($dotPath == "leader.community") {
            $single = NULL;
        } else if ($dotPath == "leader.unity") {
            $single = Single::where('id', 6)->first();
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
