<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
        <form action = "/post/ferst" method = "post">
            {{ csrf_field() }}
               <input type="text" size="40"  name = "f1">
               <input type="submit" value="TO:DO"></p>

        </form>
        <form action = "/post/two" method = "post">
            {{ csrf_field() }}
               <input type="text" size="40"  name = "f2">
               <input type="submit" value="TO:DO"></p>

        </form>

        @if(@isset($f1))
        <div>{{$f1}}</div>

        @endif
        @if(@isset($f2))
        <div>{{$f2}}</div>

        @endif

    </body>
</html>
