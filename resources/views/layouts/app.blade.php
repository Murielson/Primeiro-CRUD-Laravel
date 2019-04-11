<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mercado - Murils</title>
    {{-- Style própio --}}
    <style>
        body{padding: 20px;}
        .navbar{margin-bottom: 20px;}
    </style>
</head>
<body>
    <div class="container">
            @component('components.cmp_navbar', ['current'=>$current])
                
            @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>