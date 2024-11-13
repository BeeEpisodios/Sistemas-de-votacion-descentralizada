<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto Exitoso</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">

    <div class="container mt-5">

        <div class="alert alert-success text-center" role="alert">
            <h4 class="alert-heading">¡Voto exitoso!</h4>
            <img src="images/pngwing.com.png" alt="Imagen Representativa" class="img-fluid"
                style="max-width: 150px; height: auto;">
            <hr>
            <p>Su voto ha sido registrado correctamente. Gracias por participar en el proceso electoral.</p>
            <hr>
            <p class="mb-0">Para más detalles, puede revisar su historial de votación en su cuenta.</p>
            <p class="mt-3">ID de Transacción:
                <a href="http://localhost:4444/infochain/transaction/{{ $txid }}" target="_blank"
                    class="font-weight-bold">
                    {{ $txid }}
                </a>
            </p>
        </div>
        <div class="text-center">
            <a href="/" class="btn btn-primary mt-3">Regresar a la página principal</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
