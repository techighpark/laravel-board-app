<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel - Board</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

    </head>

    <body>
       <div class="m-10">
        <div class="flex justify-center">
           <div class="font-extrabold text-3xl">Laravel Board</div>
           </div>
        <a href="{{ url('/')}}" class="p-1 text-sm w-20 flex justify-center font-bold border-2 rounded-2xl text-orange-500 border-orange-500 hover:bg-orange-500 hover:text-white"><span>Go Home</span></a>
        <div class="flex flex-col">
        @yield('content')
        </div>
        </div>
    </body>
</html>