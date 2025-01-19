<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('custom.bootstrap5')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style >
        p{
            
        }
        *{
            
        }

        body {
        background-image: url('/images/seaextend.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<body>
    @include ('layout.header')

    @yield('content')

    @include ('layout.footer')
</body>
</html>
