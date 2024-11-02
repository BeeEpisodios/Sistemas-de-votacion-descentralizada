<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informática</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container text-center border border-dark mt-4 shadow-lg p-4 my-4"
        style="padding: 5vh; border-radius: 15px; width: 100%; max-width: 1100px;">
        <div class="text-center">
            <h1><strong>Escuela Profesional de Informática y de sistemas</strong></h1>
            <h2>Elecciones 2024 - II : Centro Federado</h2>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRU2Hr3x_LzuW15gEaCgDVfcjDoeG7DD3oPjg&s"
                alt="Imagen Representativa" class="img-fluid" style="max-width: 150px; height: auto;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRXy0_6lBUHKUXeFuM21lNNFJ9ZvtvaMk9LQ&s"
                alt="Imagen Representativa" class="img-fluid" style="max-width: 200px; height: auto;">
        </div>

        <div class="container-md text-center border border-dark mt-4 p-4" style="max-width: 75%; border-radius: 10px;">
            <h3>LISTAS</h3>
            <div class="row mb-3 text-center">
                <!-- Opción 1 -->
                <div class="col-md-4 themed-grid-col">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" value="Nexus"
                        autocomplete="off">
                    <label class="btn btn-outline-primary mt-2" for="btnradio1"><img src="images/file.jpg"
                            alt="Opción 1" style="max-width: 100%; height: auto;">
                        <h5>Nexus</h5>
                    </label>
                </div>

                <!-- Opción 2 -->
                <div class="col-md-4 themed-grid-col">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" value="Info Unity"
                        autocomplete="off">
                    <label class="btn btn-outline-primary mt-2" for="btnradio2"><img src="images/file.jpg"
                            alt="Opción 2" style="max-width: 100%; height: auto;">
                        <h5>Info Unity</h5>
                    </label>
                </div>

                <!-- Opción 3 -->
                <div class="col-md-4 themed-grid-col">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" value="Unidad Central"
                        autocomplete="off">
                    <label class="btn btn-outline-primary mt-2" for="btnradio3"><img src="images/file.jpg"
                            alt="Opción 3" style="max-width: 100%; height: auto;">
                        <h5>Unidad Central</h5>
                    </label>
                </div>
            </div>
        </div>

        <div class="container mt-4 align-items-center" style="max-width: 250px;">
            <div class="input-group mb-3">
                <span class="input-group-text text-center">Codigo</span>
                <div class="form-floating">
                    <input type="text" class="form-control text-center" id="floatingInputGroup1"
                        placeholder="Código">
                    <label for="floatingInputGroup1"></label>
                </div>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text text-center">Tokenn</span>
                <div class="form-floating">
                    <input type="text" class="form-control text-center" id="floatingInputGroup2" placeholder="Token">
                    <label for="floatingInputGroup2"></label>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="submitVote()">Votar</button>
        </div>
    </div>

    <script>
        function submitVote() {
            // Obtener la opción seleccionada
            const selectedOption = document.querySelector('input[name="btnradio"]:checked');
            const codigo = document.getElementById('floatingInputGroup1').value;
            const token = document.getElementById('floatingInputGroup2').value;

            if (!selectedOption) {
                alert("Por favor, selecciona una opción de voto.");
                return;
            }
            if (!codigo || !token) {
                alert("Por favor, completa el Código y el Token.");
                return;
            }

            // Crear el objeto con los datos a enviar
            const voteData = {
                opcion: selectedOption.value,
                codigo: codigo,
                token: token
            };

            console.log("Datos de Votación:", voteData);

            // Ejemplo de cómo enviar datos al servidor (simulación)
            // fetch('ruta_al_servidor', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json'
            //     },
            //     body: JSON.stringify(voteData)
            // })
            // .then(response => response.json())
            // .then(data => {
            //     console.log('Respuesta del servidor:', data);
            //     alert("Voto enviado correctamente.");
            // })
            // .catch(error => console.error('Error:', error));
        }
    </script>
</body>

</html>
