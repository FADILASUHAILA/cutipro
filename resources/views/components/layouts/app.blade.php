<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500&family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: lightgray;
            font-family: 'Quicksand', sans-serif
        }

    </style>
</head>
<body>

    @include('partials.navbar')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                @include('partials.sidebar')
            </div>

            <div class="col-lg-10 pt-5 px-5">
                <div class="d-flex">
                    {{ $slot }}
                </div>

                <div class="py-4">
                    @yield('content')
                </div>
    </div>
        </div>
    </div>


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>