<?php

namespace App\Http\Controllers;

use App\Models\Custodian;
use Illuminate\Http\Request;

class CustodianController extends Controller
{
    public function index()
    {
        return view('custodians.index', ['custodians' => Custodian::all()]);
    }

    public function create()
    {
        return view('custodians.create');
    }

    public function store(Request $request)
    {
        Custodian::create($request->validate([
            'name' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email|unique:custodians',
            'created_by' => 'required|exists:admins,id',
        ]));

        return redirect()->route('custodians.index')->with('success', 'Custodian added!');
    }

    public function show(Custodian $custodian)
    {
        return view('custodians.show', compact('custodian'));
    }

    public function edit(Custodian $custodian)
    {
        return view('custodians.edit', compact('custodian'));
    }

    public function update(Request $request, Custodian $custodian)
    {
        $custodian->update($request->validate([
            'name' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email|unique:custodians,email,' . $custodian->id,
        ]));

        return redirect()->route('custodians.index')->with('success', 'Custodian updated!');
    }

    public function destroy(Custodian $custodian)
    {
        $custodian->delete();
        return redirect()->route('custodians.index')->with('success', 'Custodian deleted!');
    }
}
