<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant App</title>
    @include('partials.styles')
</head>
<body>
    
    <main class="container mt-5" >
        @yield('content')
    </main>

    @include('partials.scripts')
</body>
</html>