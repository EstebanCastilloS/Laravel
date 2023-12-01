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
        $ministry = new Ministry();
        $ministry->name = $request->name;
        $ministry->description = $request->description;
        $ministry->status = $request->status;
        $ministry->date_admission = $request->date_admission;
        //dd($ministry);
        $ministry->save();
        return redirect()->route('ministerios.index')->with('mensaje', 'El ministerio se registró con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ministry = Ministry::findOrFail($id);
        return view('ministerios.show', compact('ministry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ministry = Ministry::findOrFail($id);
        return view('ministerios.edit', compact('ministry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMinistryRequest $request, $id)
    {
        $ministry = Ministry::findOrFail($id);
        $ministry->name = $request->name;
        $ministry->description = $request->description;
        $ministry->status = $request->status;
        $ministry->date_admission = $request->date_admission;
        //dd($ministry);
        $ministry->update();
        return redirect()->route('ministerios.index')->with('mensaje', 'El ministerio se actualizó con éxito');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ministry = Ministry::find($id);
        $ministry->delete($id);
        return redirect()->route('ministerios.index')->with('mensaje', 'El ministerio se eliminó con éxito');
    }
}
