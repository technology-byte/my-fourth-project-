<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="{{asset('asset/style.css')}}">
</head>
<body>
        <h3>this is about page {{$name  }} , {{ $age}}</h3>
        <p> -@yield('cont')-end</p>
        


</body>
</html>