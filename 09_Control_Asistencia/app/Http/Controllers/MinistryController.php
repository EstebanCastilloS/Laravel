<?php

namespace App\Http\Controllers;

use App\Models\Ministry;
use App\Http\Requests\StoreMinistryRequest;
use App\Http\Requests\UpdateMinistryRequest;

class MinistryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ministries = Ministry::all();
        return view('ministerios.index', compact('ministries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ministerios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMinistryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ministry $ministry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ministry $ministry)
    {
        return view('ministries.edit', [
            'ministry' => $ministry,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMinistryRequest $request, Ministry $ministry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ministry $ministry)
    {
        //
    }
}
