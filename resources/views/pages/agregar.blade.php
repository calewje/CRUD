@extends('plantilla')


@section('contenid')
<div class="row justify-content-center mt-2">


</div>

<div class="row justify-content-center mt-2">
    <label for="text" style="font-size: 50px;"> </label>
    <div class="col-5 mt-2">
        <div class="card bg-black bg-opacity-50 border-info rounded-3" style="width: 35rem; height: 40rem;">
            <form method="post" action="{{route('insertar')}}" class="col">
                @csrf

                <div class="card-body text-center" style="color:darkseagreen">
                    <p class="card-text" style="font-size: 40px;"> Agregar pelicula </p>

                    <label class="fw-bold" for="titulo" style="font-family: monospace; color:white;font-size: 20px;">
                        Nombre de pelicula</label>
                    <input name="titulo" id="titulo" class="form-control mb-3" type="text" placeholder="Nombre">

                    <label class="fw-bold" for="descripcion"
                        style="font-family: monospace; color:white;font-size: 20px;">
                        Descripcion</label>
                    <input name="descripcion" id="descripcion" class="form-control mb-3" type="text"
                        placeholder="descripcion">

                    <label class="fw-bold" for="director" style="font-family: monospace; color:white;font-size: 20px;">
                        Director de pelicula</label>
                    <input name="director" id="director" class="form-control mb-3" type="text" placeholder="Director">

                    <label class="fw-bold" for="genero" style="font-family: monospace; color:white;font-size: 20px;">
                        Genero de pelicula</label>
                    <input name="genero" id="genero" class="form-control mb-3" type="text" placeholder="Terror, Accion">

                    <label class="fw-bold" for="fecha_estreno"
                        style="font-family: monospace; color:white;font-size: 20px;">
                        Fecha de estreno de pelicula</label>
                    <input name="fecha_estreno" id="fecha_estreno" class="form-control mb-3" type="text"
                        placeholder="2026-02-21">
                    <p></p>

                    <button type="submit"  id="btn_agregar" class="btn btn-outline-info mt-2"
                        style="font-family: fantasy	;font-size: 15px;">Agregar</button>
                    <p></p>

                </div>

            </form>

        </div>
    </div>


</div>

<div class="row justify-content-center mt-2">

</div>



@endsection