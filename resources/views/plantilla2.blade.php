<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titulo}}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/b5/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font_awesome/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery/jquery.js') }}"></script>
    <script src="{{ asset('js/font_awesome/all.js') }}"></script>
    <script src="{{ asset('js/b5/popper.js') }}"></script>
    <script src="{{ asset('js/b5/bootstrap.js') }}"></script>
</head>
<body style="background-image: url('../img/2.jpg');;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;  background-position:center; 
            margin: 0;">
    <section class=""v-100>
        <div class="container mt-2" style="color:aqua;">
            @yield('contenid')
        </div>
        <p></p>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

