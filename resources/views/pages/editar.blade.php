@extends('plantilla')


@section('contenid')
<div class="row justify-content-center mt-2">


</div>

<div class="row justify-content-center mt-2">
    <label for="text" style="font-size: 50px;"> </label>
    <div class="col-5 mt-2">
        <div class="card bg-black bg-opacity-50 border-info rounded-3" style="width: 42rem; height: 47rem;">

            <form method="post"  action="{{route('actualizar',$pelicula->id)}}" class="col">
            @method('put')
            @csrf
                <div class="card-body text-center" style="color:tomato">
                    <p class="card-text" style="font-size: 40px;"> Editar pelicula pelicula </p>

                    <label class="fw-bold" for="nombre" style="font-family: monospace; color:white;font-size: 20px;">
                        Nombre de pelicula</label>
                    <input name="titulo" id="nombre" class="form-control mb-3" type="text" placeholder="Nombre" value="{{$pelicula->titulo}}">
                    @error('titulo')
                            <label  style="font-family: monospace;  color:brown;font-size: 18px;">*Falta el titulo </label>
                    @enderror 
                    <br>


                    <label class="fw-bold" for="descripcion" style="font-family: monospace; color:white;font-size: 20px;">
                        Descripcion de pelicula</label>
                    <input name="descripcion" id="descripcion" class="form-control mb-3" type="text" placeholder="" value="{{$pelicula->descripcion}}">
                    @error('descripcion')
                            <label  style="font-family: monospace;  color:brown;font-size: 18px;">*Falta la descripcion </label>
                    @enderror 
                    <br>


                    <label class="fw-bold" for="genero" style="font-family: monospace; color:white;font-size: 20px;">
                        Genero de pelicula</label>
                    <input name="genero" id="genero" class="form-control mb-3" type="text" placeholder="Terror, Accion" value="{{$pelicula->genero}}">
                    @error('genero')
                            <label  style="font-family: monospace;  color:brown;font-size: 18px;">*Falta el genero </label>
                    @enderror 
                    <br>


                    <label class="fw-bold" for="director" style="font-family: monospace; color:white;font-size: 20px;">
                        Director de pelicula</label>
                    <input name="director" id="director" class="form-control mb-3" type="text" placeholder="" value="{{$pelicula->director}}" >
                    @error('director')
                            <label  style="font-family: monospace;  color:brown;font-size: 18px;">*Falta el director </label>
                    @enderror 
                    <br>


                    <label class="fw-bold" for="fecha_estreno" style="font-family: monospace; color:white;font-size: 20px;">
                        Fecha de estreno de pelicula</label>
                    <input name="fecha_estreno" id="fecha_estreno" class="form-control mb-3" type="date" placeholder="2026-04-15" value="{{$pelicula->fecha_estreno}}">
                    
                    @error('fecha_estreno')
                    <p style="font-family: monospace;  color:brown;font-size: 18px;">{{ $message }}</p>
                    @enderror
                    <br>


                    <p></p>

                    <button type="submit" class="btn btn-outline-info mt-2" style="font-family: fantasy	;font-size: 15px;" >Actualizar</button>
                    <p></p>

                </div>
            </form>

        </div>
    </div>


</div>

<div class="row justify-content-center mt-2">

</div>



@endsection