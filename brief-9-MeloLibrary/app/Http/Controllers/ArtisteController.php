<?php

namespace App\Http\Controllers;

use index;
use App\Models\artiste;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class ArtisteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(artiste $artiste): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(artiste $artiste): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, artiste $artiste): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artiste $artiste): RedirectResponse
    {
        //
    }
}
