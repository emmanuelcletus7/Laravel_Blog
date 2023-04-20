<?php

namespace App\Http\Controllers;

use App\Models\Politics;
use Illuminate\Http\Request;

class PoliticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('politics');
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
    public function show(Politics $politics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Politics $politics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Politics $politics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Politics $politics)
    {
        //
    }
}
