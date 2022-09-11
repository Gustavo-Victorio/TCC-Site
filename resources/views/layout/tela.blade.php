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
    @section('conteudo2')
        <h1>Hello, world!</h1>
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
    <!-- Footer -->
<footer style="background-color:#171717" class="text-center text-lg-start text-muted">
  <!-- Section: Social media -->
  <section style="background-color:#0d0d0d"class="d-flex justify-content-center justify-content-lg-between p-4">

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6  style="color:#23ab1a" class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Nome do Artista ou Grupo
          </h6>
          <p style="color:white;text-align:center">
            Texto de exemplo falando um pouco mais do artista e o que ele pode oferecer.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 style="color:#23ab1a" class="text-uppercase fw-bold mb-4">
            Links Úteis
          </h6>
          <p style="color:white">
            <a href="#!" class="text-reset">Facebook</a>
          </p>
          <p style="color:white">
            <a href="#!" class="text-reset">Instagram</a>
          </p>
          <p style="color:white">
            <a href="#!" class="text-reset">Linkedin</a>
          </p>
        </div>

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 style="color:#23ab1a" class="text-uppercase fw-bold mb-4">Contatos</h6>

          <p style="color:white">
          <a href="#!" class="text-reset"></i> New York, NY 10012, US
        </p>

          <p style="color:white">
            <a href="#!" class="text-reset"></i>
            <img src="img/icons/email.png" style="border-radius:0;width:65px;height:65px;margin-right:5px">e-mail@e-mail.com
          </p>

          <p style="color:white">
          <i class="fas fa-phone me-3">
          <img src="img/icons/telefone-velho.png" style="border-radius:0;width:50px;height:50px;margin-right:5px">
          </i> +55 (67)99999-9999
        </p>

          <p style="color:white">
          <i class="fas fa-print me-3">
          <img src="img/icons/telefone-velho.png" style="border-radius:0;width:50px;height:50px;margin-right:5px">
          </i> +55 (67)99999-9999
        </p>

</div>
</div>
</div>
</section>
</footer>
<!-- Footer -->