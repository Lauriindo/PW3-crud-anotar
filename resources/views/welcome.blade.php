<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($users as $u)
        <h1>{{$u}}</h1>
    @endforeach
    <a href="{{route('Crud.create')}}">Botão</a>
</body>
</html>