<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bravo, hai cliccato!</h1>
    <h2>vai in fondo alla pagina per capire quanto sei bravo!</h2>
    @for ($i = 0; $i < 2000; $i++ )
        <span>BRAVO!</span>
    @endfor
    
    <div><h1>Bravo {{ $i }} volte! </h1></div>
    


</body>
</html>