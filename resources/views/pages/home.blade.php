@extends('plantilla2')


@section('contenid')

<div class="row justify-content-center mt-2">


</div>

<div class="row justify-content-center mt-5">
    <label for="text" style="font-size: 50px;"> </label>
    <div class="col-5 mt-2 text-center">
        <div class="card bg-black bg-opacity-50 border-info rounded-3 " style="width: 30rem; height: 30rem;">
            


            <form method="get" class="col">
                @csrf

                <div class="card-body text-center mt-3" style="color:darkkhaki">
                    <p class="card-text" style="font-size: 40px;"> Bienvenido</p>

                    <br>

                    <button type="submit" id="btn_sesion" class="btn btn-outline-info mt-2"
                        style="font-family: fantasy	;font-size: 15px;">login</button>
                    <button type="submit" id="btn_registrar" class="btn btn-outline-info mt-2"
                        style="font-family: fantasy	;font-size: 15px;" href="{{route('registro')}}">Registro</button>
                    <p></p>

                </div>

            </form>

        </div>
    </div>

</div>

<div class="row justify-content-center mt-2"></div>


</div>


@endsection