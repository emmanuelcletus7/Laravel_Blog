<?php

namespace App\Http\Controllers;

use App\Models\Nigeria;
use Illuminate\Http\Request;

class NigeriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('nigeria');
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
    public function show(Nigeria $nigeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nigeria $nigeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nigeria $nigeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nigeria $nigeria)
    {
        //
    }
}
