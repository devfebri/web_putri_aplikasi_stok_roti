<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    {{-- {{ auth()->user()->name }} --}}
    <a href="{{ route('logout') }}" class="btn btn-primary btn-sm" rel="noopener noreferrer">Logout</a>
</body>
</html>
