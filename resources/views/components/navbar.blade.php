<nav class="navbar navbar-expand-lg bg-dark   bg-opacity-50 border-info" >
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('inicio')}}" style="color:  rgb(107, 76, 187); font-family: fantasy;">Peliculas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('lista')}}" style="color: mediumturquoise;">Listas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('agregar')}}" style="color: mediumturquoise;">Agregar</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Peliculas" aria-label="Search">
        <button class="btn btn-outline-info" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>