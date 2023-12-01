<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $members = Member::orderBy('id', 'desc')->get();

        //dump($members);

        return view('miembros.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('miembros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $member = new Member();
        $member->full_name = $request->full_name;
        $member->address = $request->address;
        $member->phone = $request->phone;
        $member->birthdate = $request->birthdate;
        $member->gender = $request->gender;
        $member->email = $request->email;
        $member->status = $request->status;
        $member->ministry = $request->ministry;

        if ($request->hasFile('photo')) {
            $member->photo = $request->file('photo')->store('photosMembers', 'public');
        }else{
            $member->photo = $request->photo;
        }

        $member->date_admission = $request->date_admission;
        //dd($member);

        //mensaje de sweet alert



        $member->save();

        //Member::create($request->all());

        return redirect()->route('miembros.index')->with('mensaje', 'Miembro creado con éxito!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $member = Member::findOrFail($id);
        //dd($member);
        return view('miembros.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $member = Member::find($id);
        return view('miembros.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, $id)
    {
        $member = Member::find($id);

        // $this->updateMember($member, $request);
        // $member->save();
        // return redirect()->route('miembros.index')->with('mensaje', 'Miembro actualizado con éxito!');

        $member->full_name = $request->full_name;
        $member->address = $request->address;
        $member->phone = $request->phone;
        $member->birthdate = $request->birthdate;
        $member->gender = $request->gender;
        $member->email = $request->email;
        $member->status = $request->status;
        $member->ministry = $request->ministry;

        if ($request->hasFile('photo')) {
            //eliminar imagen anterior cuando se actualiza
            Storage::delete('public/' . $member->photo);
            $member->photo = $request->file('photo')->store('photosMembers', 'public');
        }
        $member->date_admission = $request->date_admission;
        $member->update();

        return redirect()->route('miembros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        Storage::delete('public/' . $member->photo);
        $member->delete($id);


        return redirect()->route('miembros.index')->with('mensaje', 'Miembro eliminado con éxito!');
    }

}
