<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informática</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const voteBlank = document.getElementById("btnradio4");
            const otherOptions = document.querySelectorAll('input[name="opcion"]:not(#btnradio4)');

            voteBlank.addEventListener("change", () => {
                if (voteBlank.checked) {
                    otherOptions.forEach(option => option.checked = false);
                }
            });

            otherOptions.forEach(option => {
                option.addEventListener("change", () => {
                    if (option.checked) {
                        voteBlank.checked = false;
                    }
                });
            });
        });
    </script>
</head>

<body>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="container text-center border border-dark mt-4 shadow-lg p-4 my-4"
        style="padding: 5vh; border-radius: 15px; width: 100%; max-width: 1100px;">
        <form action="{{ route('guardarVoto') }}" method="POST">
            @csrf
            <div class="text-center">
                <h1><strong>Escuela Profesional de Informática y de sistemas</strong></h1>
                <h2>Elecciones 2024 - II : Centro Federado</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRU2Hr3x_LzuW15gEaCgDVfcjDoeG7DD3oPjg&s"
                    alt="Imagen Representativa" class="img-fluid" style="max-width: 150px; height: auto;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRXy0_6lBUHKUXeFuM21lNNFJ9ZvtvaMk9LQ&s"
                    alt="Imagen Representativa" class="img-fluid" style="max-width: 200px; height: auto;">
            </div>

            <div class="container-md text-center border border-dark mt-4 p-4"
                style="max-width: 75%; border-radius: 10px;">
                <h3>LISTAS</h3>
                <div class="row mb-3 text-center">
                    <div class="col-md-4 themed-grid-col">
                        <input type="radio" class="btn-check" name="opcion" id="btnradio1" value="1"
                            autocomplete="off">
                        <label class="btn btn-outline-primary mt-2" for="btnradio1">
                            <img src="images/file.jpg" alt="Opción 1" style="max-width: 100%; height: auto;">
                            <h5>Nexus</h5>
                        </label>
                    </div>

                    <div class="col-md-4 themed-grid-col">
                        <input type="radio" class="btn-check" name="opcion" id="btnradio2" value="2"
                            autocomplete="off">
                        <label class="btn btn-outline-primary mt-2" for="btnradio2">
                            <img src="images/file.jpg" alt="Opción 2" style="max-width: 100%; height: auto;">
                            <h5>Info Unity</h5>
                        </label>
                    </div>

                    <div class="col-md-4 themed-grid-col">
                        <input type="radio" class="btn-check" name="opcion" id="btnradio3" value="3"
                            autocomplete="off">
                        <label class="btn btn-outline-primary mt-2" for="btnradio3">
                            <img src="images/file.jpg" alt="Opción 3" style="max-width: 100%; height: auto;">
                            <h5>Unidad Central</h5>
                        </label>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md-12 themed-grid-col">
                        <input type="radio" class="btn-check" name="opcion" id="btnradio4" value="4"
                            autocomplete="off">
                        <label class="btn btn-outline-danger mt-2" for="btnradio4">
                            <h5>Voto en Blanco</h5>
                        </label>
                    </div>
                </div>
            </div>

            <div class="container mt-4 align-items-center" style="max-width: 250px;">
                <div class="input-group mb-3">
                    <span class="input-group-text text-center">Codigo</span>
                    <div class="form-floating">
                        <input type="text" class="form-control text-center" id="floatingInputGroup1" name="codigo"
                            placeholder="Código">
                        <label for="floatingInputGroup1"></label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text text-center">Token</span>
                    <div class="form-floating">
                        <input type="text" class="form-control text-center" id="floatingInputGroup2" name="token"
                            placeholder="Token">
                        <label for="floatingInputGroup2"></label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Votar</button>
            </div>
        </form>
    </div>
</body>

</html>
