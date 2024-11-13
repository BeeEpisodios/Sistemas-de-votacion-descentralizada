<!DOCTYPE html>
<html>

<head>
    <title>Elecciones Centro Federado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            /* Espaciado entre líneas */
            margin: 20px;
        }

        p {
            margin-bottom: 20px;
            /* Espacio entre párrafos */
        }
    </style>
</head>

<body>
    <p>Hola, querido estudiante,</p>

    <p>Tu token para votar es: <strong>{{ $token }}</strong></p>
    <p>Tu clave pública es: <strong>{{ $publicKey }}</strong></p>

    <h3>Realiza tu voto <a href="https://link_aqui"><strong>aquí</strong></a>.</h3>
    <p>Puedes confirmar tu voto en la <a href="https://link_aqui"><strong>cadena de bloques</strong></a> ingresando tu
        clave pública en el
        buscador.</p>

    <p>Gracias por participar en las elecciones.</p>
</body>

</html>
