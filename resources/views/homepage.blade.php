<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $hello }}</h1>
    <ul>
       @foreach($nomi as $nome)
        <li><p>{{ $nome }}</p></li>
       @endforeach
    </ul>
</body>
</html>