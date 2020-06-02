<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <title> Census Data Washington 2010 </title>
</head>
<body>
<div class="contatiner">
    <h1>Census Data Washington 2010</h1>
    @if(session()->get('success'))
        <div class="toast toast-success">
            {{session()->get(('success'))}}
        </div>
    @endif
    @yield('content')
    </div>
</body>
</html>