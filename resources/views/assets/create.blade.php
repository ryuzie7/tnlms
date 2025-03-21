@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-4">Add New Asset</h2>
<form action="{{ route('assets.store') }}" method="POST" class="bg-white p-6 rounded shadow">
    @csrf
    <label class="block">Serial Number:</label>
    <input type="text" name="serial_number" class="border px-4 py-2 w-full mb-2" required>

    <label class="block">Model:</label>
    <input type="text" name="model" class="border px-4 py-2 w-full mb-2" required>

    <label class="block">Location:</label>
    <input type="text" name="location" class="border px-4 py-2 w-full mb-2" required>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save Asset</button>
</form>
@endsection
