@extends('plantilla')


@section('contenid')
<div class="row justify-content-center mt-2">


</div>

<div class="row justify-content-center mt-2">
    <label for="text" style="font-size: 50px;"> </label>
    <div class="col-5 mt-2">
        <div class="card bg-black bg-opacity-50 border-info rounded-3" style="width: 35rem; height: 47rem;">
            <form method="post" action="{{route('insertar')}}" class="col">
                @csrf

                <div class="card-body text-center" style="color:darkseagreen">
                    <p class="card-text" style="font-size: 40px;"> Agregar pelicula </p>

                    <label class="fw-bold" for="titulo" style="font-family: monospace; color:white;font-size: 20px;">
                        Nombre de pelicula</label>
                    <input name="titulo" id="titulo" class="form-control mb-3" type="text" placeholder="Nombre"  value="{{ old('titulo') }}">
                    @error('titulo')
                            <label  style="font-family: monospace;  color:brown;font-size: 18px;">*Falta titulo</label>
                    @enderror 
                    <br>


                    <label class="fw-bold" for="descripcion"
                        style="font-family: monospace; color:white;font-size: 20px;">
                        Descripcion</label>
                    <input name="descripcion" id="descripcion" class="form-control mb-3" type="text"
                        placeholder="descripcion" value="{{ old('descripcion') }}">
                    @error('descripcion')
                            <label  style="font-family: monospace;  color:brown;font-size: 18px;">*Falta descripcion</label>
                    @enderror 
                    <br>


                    <label class="fw-bold" for="director" style="font-family: monospace; color:white;font-size: 20px;">
                        Director de pelicula</label>
                    <input name="director" id="director" class="form-control mb-3" type="text" placeholder="Director" value="{{ old('director') }}">
                    @error('director')
                            <label  style="font-family: monospace;  color:brown;font-size: 18px;">*Falta director</label>
                    @enderror 
                    <br>


                    <label class="fw-bold" for="genero" style="font-family: monospace; color:white;font-size: 20px;">
                        Genero de pelicula</label>
                    <input name="genero" id="genero" class="form-control mb-3" type="text" placeholder="Terror, Accion"  value="{{ old('genero') }}">
                    @error('genero')
                            <label  style="font-family: monospace;  color:brown;font-size: 18px;">*Falta genero</label>
                    @enderror 
                    <br>


                    <label class="fw-bold" for="fecha_estreno"
                        style="font-family: monospace; color:white;font-size: 20px;">
                        Fecha de estreno de pelicula</label>
                    <input name="fecha_estreno" id="fecha_estreno" class="form-control mb-3" type="date"
                        placeholder="2026-02-21"  value="{{ old('fecha_estreno') }}">   
                    @error('fecha_estreno')
                    <p style="font-family: monospace;  color:brown;font-size: 18px;">{{ $message }}</p>
                    @enderror
                    

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