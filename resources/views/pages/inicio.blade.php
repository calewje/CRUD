@extends('plantilla')


@section('contenid')

<?php

    $sesionUsuario = session('sesionUsuario');
?>

<!-- <div class="row justify-content-center">
    <div class="col-5 text-center mt-3">
        <div class="card p-3 bg-black  border-info rounded-3 mb-4"
            style="background-color: black; color: darkviolet; font-family: cursive; font-size: 30px;">
            <label>Bienvenido °w°</label>
            <p></p>
        </div>

    </div>
</div> -->
<div class="row justify-content-center mt-2">
    <!--  <div class="col text-center">
        <label style="font-size: 90px;"> ¿Que es el Anime?</label>
    </div>
    <div class="col">
        <div class="card p-3 bg-black bg-opacity-50 border-info rounded-3 mb-4"
            style="background-color: black; color: darksalmon; font-family: cursive; font-size: 20px;">
            <label>El anime es un estilo de animación originado en Japón, caracterizado por su variedad de géneros,
                historias profundas y estilos artísticos distintivos. Se presenta en formato de series, películas y OVAs
                (Original Video Animations), y puede estar basado en mangas, novelas ligeras, videojuegos o ser
                contenido original.</label>
            <p></p>
        </div>

    </div> -->

</div>



<div class="row justify-content-center mt-2">

    <label for="bienvenido">Bienvenido <?php echo $sesionUsuario ?></label>

    <hr class="my-4 border-primary" style="width: 100%; height: 4px; background-color: darkorchid;">

    <div class="col text-center">
        <label style="font-size: 40px;"> Algunos tipos de Peliculas</label>
        <p></p>
        <div class="card p-3 bg-black bg-opacity-50 border-info rounded-2 mb-4"
            style="background-color: black; color: darksalmon; font-family: cursive; font-size: 20px;">
            <img src="../img/1.jpeg" class="object-fit-fill border border-info rounded mx-auto d-block" alt="..."
                style="width: 650px; height: 400px;object-fit: cover;">
        </div>
    </div>
    <div class="col mt-2 text-center">
        <div class="card p-3 bg-black bg-opacity-10 border-info rounded-3 mb-4"
            style="background-color: black; color: darksalmon; font-family: monospace; font-size: 25px;">
            <label>
                🔹 Accion <br>
            </label>
        </div>

        <div class="card p-3 bg-black bg-opacity-50 border-info rounded-3 mb-4"
            style="background-color: black; color: darksalmon; font-family: monospace; font-size: 25px;">
            <label>
                🔹 Terror <br>
            </label>
        </div>

        <div class="card p-3 bg-black bg-opacity-50 border-info rounded-3 mb-4"
            style="background-color: black; color: darksalmon; font-family: monospace; font-size: 25px;">
            <label>
                🔹 Animadas <br>
            </label>
        </div>

        <div class="card p-3 bg-black bg-opacity-50 border-info rounded-3 mb-4"
            style="background-color: black; color: darksalmon; font-family: monospace; font-size: 25px;">
            <label>
                🔹 Comedia<br>
            </label>

        </div>
        <div class="card p-3 bg-black bg-opacity-50 border-info rounded-3 mb-4"
            style="background-color: black; color: darksalmon; font-family: monospace; font-size: 25px;">
            <label>
                🔹 Romance <br>
            </label>

        </div>

        <div class="card p-3 bg-black bg-opacity-50 border-info rounded-3 mb-4"
            style="background-color: black; color: darksalmon; font-family: monospace; font-size: 25px;">
            <label>
                🔹 Cine de Oro <br>
            </label>

        </div>


    </div>
</div>


@endsection