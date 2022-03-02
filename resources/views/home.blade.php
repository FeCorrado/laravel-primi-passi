<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Hello World!
    <td><button onclick="location.href='{{ url('cliccami') }}'">
        Cliccami!</button></td>

        <div>
            <h3>TITOLO: {{ $titolo }}</h3>
            <h4>AUTORE: {{ $autore }}</h4>
            <h5>PAGINE: {{ $pagine }}</h5>
        </div>
</body>
</html>