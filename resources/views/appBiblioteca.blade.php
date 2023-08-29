<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <title>@yield('title')</title>

    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}" /> --}}
    {{-- <script src="{{ asset('js/js.js') }}"></script> --}}

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}



</head>
<body class="bg-gray-200">


    @include('nav')
  
    <div class='container-add'>
        @yield('content')
    </div>



</body>
</html>
