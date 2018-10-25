<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operadores Aritméticos</title>
    </head>
    <body>
        <h3>Introduce tu nombre.</h3>
        <form action="{{ URL::to('/calculadora') }}" method="POST">
            @csrf
            Ingresa tu nombre:<br />
            <input type="text" name="nombre"><br />
            <input type="reset" value="Borrar">
            <input type="submit" value="Enviar">
        </form>

    </body>
</html>