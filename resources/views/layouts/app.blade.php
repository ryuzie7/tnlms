<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold">Teaching & Learning Inventory Management</h1>
        <nav class="mt-4">
            <a href="{{ route('assets.index') }}" class="text-blue-600">Assets</a> |
            <a href="{{ route('custodians.index') }}" class="text-blue-600">Custodians</a> |
            <a href="{{ route('admins.index') }}" class="text-blue-600">Admins</a>
        </nav>
        <div class="mt-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
