<?php
include_once "includes/head.php";
include_once "includes/header.php";
?>
<div class="row">
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/instrumentos.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="imagens/instrumentos2.jpg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="imagens/instrumentos3.jpg" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>

<br>
<br>
</div>
<div class="container">
      
<div class="row">
        <div class="col">
          <div class="card shadow-sm">
           <img src="imagens/guitarra.jpg" class="card-img" width="100%" height="225">
            <div class="card-body">
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instrumento</font></font></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                </div>
                <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$899,99</font></font></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="imagens/guitarra2.jpg" class="card-img" width="100%" height="225">

            <div class="card-body">
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instrumento</font></font></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                </div>
                <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$689,99</font></font></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="imagens/baixo.jpg" class="card-img" width="100%" height="225">

            <div class="card-body">
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instrumento</font></font></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                </div>
                <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$459,99</font></font></small>
              </div>
            </div>
          </div>
        </div>

      
<?php

include_once "includes/footer.php";

?>

