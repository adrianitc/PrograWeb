<?php
session_start();
include ('../layouts/header.php');
?>
      <?php
            if(isset($_SESSION['id_usuario'])):
      ?>
            <h1 class="reg">Bienvenido al sistema de eventos. <?php echo $_SESSION['email'];?></h1>
      <?php
            endif;
      ?>
<h1 class="reg">Pagina de Inicio</h1>
<div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="../bootstrap/img/sitec1.jpg" alt="">
        </div>
        <div class="item">
          <img src="../bootstrap/img/sitec2.jpg" alt="">
        </div>
        <div class="item">
          <img src="../bootstrap/img/sitec3.jpg" alt="">
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
    </div>
   </div>


<?php

include ('../layouts/footer.php');
?>
