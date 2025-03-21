@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-4">Asset List</h2>
<a href="{{ route('assets.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Asset</a>
<table class="min-w-full bg-white border mt-4">
    <thead>
        <tr>
            <th class="border px-4 py-2">Serial Number</th>
            <th class="border px-4 py-2">Model</th>
            <th class="border px-4 py-2">Location</th>
            <th class="border px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($assets as $asset)
        <tr>
            <td class="border px-4 py-2">{{ $asset->serial_number }}</td>
            <td class="border px-4 py-2">{{ $asset->model }}</td>
            <td class="border px-4 py-2">{{ $asset->location }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('assets.edit', $asset->id) }}" class="text-blue-600">Edit</a> |
                <form action="{{ route('assets.destroy', $asset->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
