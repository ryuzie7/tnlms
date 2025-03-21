<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        return view('assets.index', ['assets' => Asset::with('custodian', 'admin')->get()]);
    }

    public function create()
    {
        return view('assets.create');
    }

    public function store(Request $request)
    {
        Asset::create($request->validate([
            'serial_number' => 'required|unique:assets',
            'model' => 'required',
            'location' => 'required',
            'status' => 'required',
            'custodian_id' => 'nullable|exists:custodians,id',
            'created_by' => 'required|exists:admins,id',
        ]));

        return redirect()->route('assets.index')->with('success', 'Asset added successfully!');
    }

    public function show(Asset $asset)
    {
        return view('assets.show', compact('asset'));
    }

    public function edit(Asset $asset)
    {
        return view('assets.edit', compact('asset'));
    }

    public function update(Request $request, Asset $asset)
    {
        $asset->update($request->validate([
            'serial_number' => 'required',
            'model' => 'required',
            'location' => 'required',
            'status' => 'required',
            'custodian_id' => 'nullable|exists:custodians,id',
        ]));

        return redirect()->route('assets.index')->with('success', 'Asset updated successfully!');
    }

    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect()->route('assets.index')->with('success', 'Asset deleted!');
    }
}
