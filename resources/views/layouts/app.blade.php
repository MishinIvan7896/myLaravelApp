<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/myApp/public/css/app.css">
</head>

<body>
    @include('inc.header')
    @if(Request::is('/'))
    @include('inc.hero')
    @endif

    <div class="container mt-5">
        @include('inc.messages')
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-2">
                @include('inc.aside')
            </div>
            <div class="col-10">
                @yield('content')
            </div>
        </div>
    </div>
    @include('inc.footer')
</body>

</html>