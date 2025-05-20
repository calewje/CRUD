@extends('plantilla2')


@section('contenid')
<div class="row justify-content-center mt-2">


</div>

<div class="row justify-content-center mt-2">
    <label for="text" style="font-size: 50px;"> </label>
    <div class="col-5 mt-5">
        <div class="card bg-black bg-opacity-50 border-info rounded-3" style="width: 35rem; height: 30rem;">
            <form method="post" action="{{route('iniciar_sesion')}}" class="col">
                @csrf

                <div class="card-body text-center" style="color:darkkhaki">
                    <p class="card-text" style="font-size: 40px;"> Login </p>

                    <label class="fw-bold" for="usuario" style="font-family: monospace; color:white;font-size: 20px;">
                        Nombre de usuario</label>
                    <input name="usuario" id="usuario" class="form-control mb-3" type="text" placeholder="Usuario" value="{{ old('usuario') }}">

                    @error('usuario')
                    <p style="font-family: monospace; color:brown;font-size: 18px;">{{ $message }}</p>
                    @enderror
                    
                    <label class="fw-bold" for="password"
                        style="font-family: monospace; color:white;font-size: 20px;">
                        Password</label>
                    <input name="password" id="password" class="form-control mb-3" type="password"
                        placeholder="password" value="{{ old('password') }}">
        
                    @error('password')
                    <p style="font-family: monospace; color:brown;font-size: 18px;">{{ $message }}</p>
                    @enderror
                    

                    <button type="submit"  id="btn_sesion" class="btn btn-outline-info mt-3"
                        style="font-family: fantasy	;font-size: 15px;">Iniciar</button>
                    <p></p>
                    <a href="{{ route('registro') }}" type="btn"> Registro</a>
                    <p></p>

                    

                </div>

            </form>

        </div>
    </div>


</div>

<div class="row justify-content-center mt-2">

</div>



@endsection