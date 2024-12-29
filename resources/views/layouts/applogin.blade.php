<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvyn Wira</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="bg-primary p-2 ">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>
</html>