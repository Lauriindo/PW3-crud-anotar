<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotações</title>
</head>

<body>
    <form action="/Crud.store" method="post">
        @csrf
        <label>Nome:</label>
        <input type="text" value="Nome" name="name">
        <label>Idade:</label>
        <input type="int" value="Idade" name="age">
        <button type="submit">Anotar</button>
    </form>
</body>

</html>