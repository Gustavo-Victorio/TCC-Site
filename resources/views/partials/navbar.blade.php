{{-- arquivo navbar.blade.php localizado na pasta: resources/partials --}}
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Início</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
        <li class="nav-item">
            <a class="nav-link " href="sobre">Sobre </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="artistas">Artistas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="estilos">Estilos de Arte</a>
          </li>
          <li class="nav-item dropdown">   
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
      </div>
    </div>
  </nav>
