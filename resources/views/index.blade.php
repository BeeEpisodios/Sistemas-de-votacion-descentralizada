<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- ============================== bootstrap styles  ============================== --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- ============================== google fonts  ============================== --}}
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    {{-- Recursos propios --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <title>Informática</title>
</head>

<body>
    <div class="container text-center border border-dark mt-4 shadow-lg p-4 my-4"
        style="padding: 5vh; border-radius: 15px; width: 100%">
        <div class="text-center">
            <h1><strong>Escuela Profesional de Informática y de sistemas</strong></h1>
            <h2>Elecciones 2024 - II : Centro Federado</h2>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRU2Hr3x_LzuW15gEaCgDVfcjDoeG7DD3oPjg&s"
                alt="Imagen Representativa" class="img-fluid" style="max-width: 150px; height: auto;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRXy0_6lBUHKUXeFuM21lNNFJ9ZvtvaMk9LQ&s"
                alt="Imagen Representativa" class="img-fluid" style="max-width: 200px; height: auto;">
        </div>

        <div class="container mt-4">
        </div>
        <div class="container-md text-center border border-dark"
            style="max-width: 75%; width: 100%;border-radius: 10px">
            <h3>LISTAS</h3>
            <div class="row mb-3 text-center">
                <div class="col-md-4 themed-grid-col border">
                    <h5>OPCIÓN 1</h5>
                    <img src="images/file.jpg" alt="unidad central" style="max-width: 60%; height: auto;">
                    <h5>Nexus</h5>
                </div>
                <div class="col-md-4 themed-grid-col border">
                    <h5>OPCIÓN 2</h5>
                    <img src="images/file.jpg" alt="unidad central" style="max-width: 60%; height: auto;">
                    <h5>Info Unity</h5>
                </div>
                <div class="col-md-4 themed-grid-col border">
                    <h5>OPCIÓN 3</h5>
                    <img src="images/file.jpg" alt="unidad central" style="max-width: 60%; height: auto;">
                    <h5>Unidad Central</h5>
                </div>
            </div>
        </div>
        <div class="btn-group mt-4" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio1">OPCIÓN 1</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">OPCIÓN 2</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">OPCIÓN 3</label>
        </div>
        <div class="container mt-4" style="width: 250px">
            <div class="input-group mb-3">
                <span class="input-group-text">Codigo</span>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                    <label for="floatingInputGroup1"></label>
                </div>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Tokenn</span>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                    <label for="floatingInputGroup1"></label>
                </div>
            </div>
            <button type="button" class="btn btn-primary">Votar</button>

        </div>
    </div>

</body>

</html>
