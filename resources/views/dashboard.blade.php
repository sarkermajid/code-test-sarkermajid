<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MZT test assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container">
        <h1 class="p-40 text-4xl font-bold text-center">Welcome to the hiring platform</h1>
        <div class="flex items-center justify-center">
            <a href="{{ route('candidate.list') }}" class="btn btn-info">
                Go to candidates list
            </a>
            &nbsp; &nbsp;
            <a href="{{ route('company.profile',['id'=>Auth::id()]) }}" class="btn btn-primary">
                Proile
            </a>
            &nbsp; &nbsp;
            <a href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" class="btn btn-danger">Logout</a>
            <form action="{{ route('logout') }}" method="post" id="logoutForm">
                @csrf
            </form>
        </div>
    </div>
</div>

<script src="{{ mix('/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>