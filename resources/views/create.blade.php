<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('Crud.store')}}" method="post"> 
        <input type="text" value="Nome" name="name">
        <button type="submit">Anotar</button>
    </form>
</body>

</html>