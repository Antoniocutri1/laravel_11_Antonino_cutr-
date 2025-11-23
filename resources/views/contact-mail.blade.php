<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Ciao {{$request['name']}}</h1>

    <h3> grazie di averci contattato</h3>

    <p>i tuoi dati:</p>
    <ul>
        <li>{{$request['name']}}</li>
        <li>{{$request['e-mail']}}</li>
        <li>{{$request['description']}}</li>
    </ul>
    
</body>
</html>