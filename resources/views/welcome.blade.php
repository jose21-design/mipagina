@extends('app')

@section('content')

<!-- Main -->
<main id="main">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/t.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/x.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/s.jpg" class="d-block w-100" alt="...">
          </div>

          <div class="overlay">
              <div class="container">
                  <div class="row align-items-center">

                     <div class="col-md-6 offset-md-3 text-md-rigth text-center">
                        <br><h1>AxiaStyle</h1>
                        <p class="d-none d-md-block">La tienda de snakers y ropa en línea, descubre todos los estilos de ropa y modelos de calzado que tenemos para ti.
                          Luce el estilo urbano de nuestro calzado, obtén el calzado que siempre quisiste de tu súper estrella favorita y juega como él
                          Ropa adecuada a tu disciplina deportiva, cómoda, de la mejor marca y calidad.
                        </p>
                        <a href="" class="btn btn-light">Quiero colaborar</a>
                        <button class="btn btn-tecnoeduca">Más información</button>
                    </div>

                  </div>
              </div>
          </div>

        </div>
      </div>
</main>
<!-- EndMain -->

<!-- Estilos -->
<section id="estilos">
  <div class="row">
    <div class="col text-center text-uppercase">
        <small>Conoce nuestra gran variedad de</small><h2>Estilos</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-lg-3 col-med-12">
      <div class="card" style="width: 18rem;">
        <img src="images/si.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-subtitle mb-2 text-muted">Adidas Entrap</h5>
          <p class="card-text">Este modelo es de gran calidad y es reciente</p>
          <a href="#" class="card-link">Más...</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-3 col-med-12">
      <div class="card" style="width: 18rem;">
        <img src="images/leb.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-subtitle mb-2 text-muted">LeBron XV</h5>
          <p class="card-text">La línea deportiva del rey LeBron</p>
          <a href="#" class="card-link">Más...</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-3 col-med-12">
      <div class="card" style="width: 18rem;">
        <img src="images/ret.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-subtitle mb-2 text-muted">Puma Breaker</h5>
          <p class="card-text">Ideales para estilo casual y moderno</p>
          <a href="#" class="card-link">Más...</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-3 col-med-12">
      <div class="card" style="width: 18rem;">
        <img src="images/er.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-subtitle mb-2 text-muted">Nike Legacy</h5>
          <p class="card-text">Muy pocos tienen el honor de poseer este par</p>
          <a href="#" class="card-link">Más...</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col text-center text-uppercase">
        <h6>Descuento de 10% a partir de $2000</h6>
    </div>
 </div>
</section>
<!-- End/estilos -->

<!-- Modelo -->
<section id="modelo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 pt-4 pb-4">
        <h2>Selección de modelos Noviembre 2021</h2>
        <p>
          Sí te apasiona el modelaje y tienes algo de experiencia, anímate a participar en el proceso de selección.
          Previamente es necesario llenar el formulario con los datos que se te piden y adjuntar algunas fotografías donde poses.
        </p>

        <a href="#" class="btn btn-success">Registrarme</a>
      </div>
      <div class="col-lg-4 col-12 pl-0 pr-0">
        <img src="images/d.jpg" alt="">
      </div>
      <div class="col-lg-4 col-12 pl-0 pr-0">
        <img src="images/a.jpg" alt="">
      </div>

    </div>
  </div>
</section>
<!-- Modelo -->

 <!-- Sugerencias -->
 <section id="sugerencias" class="pt-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <small class="text-uppercase"> Estás buscando trabajo </small>
        <h2>ÚNETE A NOSOTROS</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 pt-2">

        <form>
          <div class="form-row">
            <div class="col-12 col-md-6 form-group">
              <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-12 col-md-6 form-group">
              <input type="text" class="form-control" placeholder="Apellidos">
            </div>
          </div>

          <div class="form-row">
            <div class="col form-group">
              <textarea name="description" class="form-control"></textarea>
              <small>Incluye la descripción de tu situación </small>
            </div>
          </div>

          <div class="form-row">
            <div class="col form-group">
              <button type="button" class="btn btn-tecnoeduca btn-block">Enviar</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</section>
<!-- /Sé maestro -->
    
@endsection