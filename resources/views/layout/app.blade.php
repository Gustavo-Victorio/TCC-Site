<!doctype html>
<html lang="en">
  <head>
  <div  style="background-color:#2e2e2e">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}} | {{$tituloPagina ?? ''}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    @include('partials.navbar')
    @section('conteudo')
        <h1>Hello, world!</h1>
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  


<!-- RODAPE -->
  <section class="">
  <!-- Footer -->
  <footer style="background-color:#1a1a1a" >
    <!-- Grid container -->
    <div  style="background-color:#1a1a1a" class="container p-4">
      <!--Grid row-->
      <div  style="background-color:#1a1a1a" class="row">
        <!--Grid column-->
        <div  style="background-color:#1a1a1a" class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 style="color:#23ab1a">Catálogo Digital Artístico de Jardim MS</h5>
          <p style="color:#ffffff">
          O site busca incentivar e dar visibilidade aos artistas da região de Jardim,
          expondo suas obras para que todos possam a apreciar e quem sabe até levar para casa!
          Aproveite o site  
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div  style="background-color:#1a1a1a" class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0" style="color:#23ab1a">Links</h5>

          <ul class="list-unstyled">
          <li>
              <a href="/" class="text-white">Início</a>
            </li>
            <li>
              <a href="sobre" class="text-white">Sobre</a>
            </li>
            <li>
              <a href="artistas" class="text-white">Artistas</a>
            </li>
            <li>
              <a href="estilos" class="text-white">Estilos de Arte</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3"  style="background-color:#0f0f0f"></div>
  </footer>
  <!-- Footer -->
</section>
</div>
</div>
</body>
</html>