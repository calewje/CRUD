@extends('plantilla')


@section('contenid')

<div class="row justify-content-center">
    <div class="col-5 text-center mt-3">
        <div class="card p-3 bg-black  border-info rounded-3 mb-4"
            style="background-color: black; color: darkviolet; font-family: monospace; font-size: 40px;">
            <label>Listas de peliculas</label>
            <p></p>
        </div>

    </div>
</div>
<div class="row justify-content-center mt-2">

</div>



<div class="row justify-content-center mt-2">
    <hr class="my-4 border-primary" style="width: 100%; height: 4px; background-color: hotpink;">
    <div class="col text-center">
        <label style="font-size: 60px;"> Peliculas</label>
        <p></p>
        <!--  <div class="card p-3 bg-black bg-opacity-50 border-info rounded-3 mb-4"
            style="background-color: black; color: darksalmon; font-family: cursive; font-size: 20px;">
        <img src="https://thafd.bing.com/th/id/OIP.63eQ4GI4K0_FNOK_D_NkOwHaFk?cb=iwc1&rs=1&pid=ImgDetMain" class="object-fit-fill border border-info rounded mx-auto d-block" alt="..." style="width: 550px; height: 400px;object-fit: cover;">
        </div> -->
    </div>

    <div class="row justify-content-center mt-2">
        <div class="col-9">
            <div class="card bg-black bg-opacity-50 border-info rounded-3" style="width: 60rem;">
            <div class="content">
                        <table class="table table-hover p-3 rounded-3">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">Director</th>
                                    <th scope="col">Fecha de Estreno</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datos as $pelicula):
                                <tr>
                                    <th scope="row">{{$pelicula->id}}</th>
                                    <td scope="row">{{$pelicula->titulo}}</td>
                                    <td>{{$pelicula->descripcion}}</td>
                                    <td>{{$pelicula->genero}}</td>
                                    <td>{{$pelicula->director}}</td>
                                    <td>{{$pelicula->fecha_estreno}}</td>
                                    <td>
                                        <a type="submit" class="btn btn-warning" href="{{route('editar',$pelicula->id)}}">
                                        Editar
                                        </a>
                                        <a type="submit" class="btn btn-danger" href="{{route('eliminar',$pelicula->id)}}">
                                        Eliminar
                                        </a>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

            </div>

        </div>
    </div>


</div>



</div>
</div>


@endsection