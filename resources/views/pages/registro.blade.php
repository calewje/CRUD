@extends('plantilla2')


@section('contenid')
<div class="row justify-content-center mt-2">


</div>

<div class="row justify-content-center mt-2">
    <label for="text" style="font-size: 50px;"> </label>
    <div class="col-5 mt-2 text-center">
        <div class="card bg-black bg-opacity-50 border-info rounded-3" style="width: 38rem; height: 47rem;">
            <form method="post" action="{{route('registro_usuario')}}" class="col">
                @csrf

                <div class="card-body text-center" style="color:darkkhaki">
                    <p class="card-text" style="font-size: 40px;"> Registro</p>

                    <div class="col-8-content-center">
                        <label class="fw-bold" for="nombre"
                            style="font-family: monospace; color:white;font-size: 20px;">
                            Nombre </label>
                        <input name="nombre" id="nombre" class="form-control mb-1" type="text" placeholder="Nombre" value="{{ old('nombre') }}">
                        @error('nombre')
                            <label  style="font-family: monospace; color:brown;font-size: 18px;">*Falta nombre </label>
                        @enderror 

                        <br>
                        <label class="fw-bold" for="usuario"
                            style="font-family: monospace; color:white;font-size: 20px;">
                            Nombre de usuario</label>
                        <input name="usuario" id="usuario" class="form-control mb-1" type="text" placeholder="usuario" value="{{ old('usuario') }}">
                        @error('usuario')
                            <label  style="font-family: monospace; color:brown;font-size: 18px;">*Falta usuario </label>
                        @enderror 

                        <br>
                        <label class="fw-bold" for="email" style="font-family: monospace; color:white;font-size: 20px;">
                            EMAIL</label>
                        <input name="email" id="email" class="form-control mb-1" type="text" placeholder="email" value="{{ old('email') }}">
                        @error('email')
                            <label style="font-family: monospace; color:brown;font-size: 18px;">*Falta email </label>
                        @enderror 
                        
                        <br>
                        <label class="fw-bold" for="password"
                            style="font-family: monospace; color:white;font-size: 20px;">
                            Password</label>
                        <input name="password" id="password" class="form-control mb-1" type="password"
                            placeholder="Hkookj45@" value="{{ old('password') }}">
                        @error('password')
                            <label  style="font-family: monospace;  color:brown;font-size: 18px;">*No cumple las condiciones password</label>
                            <label  style="font-family: monospace;  color:brown;font-size: 14px;">*Minimo 8 caracteres 1 Mayuscula  1 minuscula 1 numero  1 caracter </label>
                        @enderror    
                        <br>
                        <label class="fw-bold" for="password_confir"
                            style="font-family: monospace; color:white;font-size: 20px;">
                            Confirmar Password </label>
                        <input name="password_confir" id="password_confir" class="form-control mb-1" type="password"
                            placeholder="confirma password" value="{{ old('password_confir') }}">
                        @error('password_confir')
                            <label  style="font-family: monospace;  color:brown;font-size: 18px;">*No coincide password</label>
                        @enderror 


                    </div>



                    <!-- <label class="fw-bold" for="conf_password"
                        style="font-family: monospace; color:white;font-size: 20px;">
                        Confirma password</label>
                    <input name="conf_password" id="conf_password" class="form-control mb-3" type="password"
                        placeholder="confirma password">
                    <p></p> -->

                    <button type="submit" id="btn_sesion" class="btn btn-outline-info mt-2"
                        style="font-family: fantasy	;font-size: 15px;">Registrar</button>
                    <p></p>
                    <a href="{{ route('sesion') }}" type="btn"> Login</a>
                    <p></p>

                </div>

            </form>

        </div>
    </div>


</div>

<div class="row justify-content-center mt-2">

</div>



@endsection