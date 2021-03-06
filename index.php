<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="static/img/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
    <title>Epet 20</title>
  </head>
  <body>
  <?php include('menu.php') ?>
    <!-- container -->
    <section id="container" class="pt-3 pb-3">
      <div class="row">
        <div class="container">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="static/img/carousel_uno.jpg" class="img-fluid" alt="carousel_uno">
              </div>
              <div class="carousel-item">
                <img src="static/img/carousel_dos.jpg" class="img-fluid" alt="carousel_dos">
              </div>
              <div class="carousel-item">
                <img src="static/img/carousel_tres.jpg" class="img-fluid" alt="carousel_tres">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section id="novedades">
      <div class="container">
        <div class="row pt-2">
          <div class="col-12 col-md">
            <h6 class="text-center mt-1 alert alert-primary">Novedad 1</h6>
            <img src="static/img/novedad_1.jpg" class="img-fluid mb-1" alt="novedad_1">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a href="novedad" class="btn btn-dark mb-3">Leer mas</a>
          </div>
          <div class="col-12 col-md">
            <h6 class="text-center mt-1 alert alert-primary">Novedad 2</h6>
            <img src="static/img/novedad_2.jpg" class="img-fluid mb-1" alt="novedad_2">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a href="novedad" class="btn btn-dark mb-3">Leer mas</a>
          </div>
          <div class="col-12 col-md">
            <h6 class="text-center mt-1 alert alert-primary">Novedad 3</h6>
            <img src="static/img/novedad_3.jpg" class="img-fluid mb-1" alt="novedad_3">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a href="novedad" class="btn btn-dark mb-3">Leer mas</a>
          </div>
        </div>
    </div>
    </section>
    <!-- /container -->
    <?php include('footer.php') ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>