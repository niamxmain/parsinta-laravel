<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('css/bootstrap.css')}}">
    {{$styles}}
    <title>{{$title}} | niX</title>
</head>

<body>
    <x-navbar></x-navbar>
    {{$slot}}

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>