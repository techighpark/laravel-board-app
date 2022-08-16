<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel - Board</title>

    </head>

    <body>
        <div class="container">
           <h1>Laravel Board</h1>
           <a href="{{ url('/')}}">Go Home</a>

        </div>

        @yield('content')
    </body>
</html>