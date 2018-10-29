<?php

include 'config.php';

if($offline){
  header("Location: maintainance.php");  // <== redirects all to maintainance.php
  exit;
}
 ?>

<!DOCTYPE html>
<html lang="esp">
<head>
  <link rel="shortcut icon" href="favicon-32x32.png">
  <title>Red Reciclajes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" rel="home" href="#" title="Red Reciclajes">
        <img style="max-height:80px; margin-top: -30px;"
             src="Images/logo-2.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#us">NOSOTROS</a></li>
        <li><a href="#aboutus">QUÉ HACEMOS</a></li>
        <li><a href="#social">IMPACTO SOCIAL</a></li>
        <li><a href="#envirioment">MEDIOAMBIENTE</a></li>
        <li><a href="#contact">CONTACTO</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <!-- <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li> -->


    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Images/img1-2.jpg">
        <div class="carousel-caption">
          <h3>Conectamos, Reciclamos y Ayudamos</h3>
          <p> </p>
        </div>
      </div>

      <div class="item">
        <img src="Images/img2-2.jpg" alt="Landscape" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Una Tierra</h3>
          <p></p>
        </div>
      </div>



      <div class="item">
        <img src="Images/img3-2.jpg">
        <div class="carousel-caption">
          <h3>Sé parte de la solución</h3>
          <p> </p>
        </div>
      </div>


    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
</div>
<div id="us" class="container text-center">
  <h3 class="line">NOSOTROS</h3>
  <h2>Misión</h2>
    <p style="margin-bottom: 5em;font-size: 19px;">Conectar diversos desechos con un ciclo útil que ayude al país. Disminuir la masa de basura que generamos y convertirla en materia prima reutilizable. Ayudar a fundaciones con el beneficio de este reciclaje.</p>

  <h2 >Visión</h2>
    <p style="margin-bottom: 5em;font-size: 19px;"> Nuestra visión es ser una de las principales empresas responsables de la disminución de basura en el mundo. Además, buscamos ayudar socialmente al país fomentando la actividad de fundaciones, así como nuevos proyectos sociales.
    </p>
</div>


<div id="aboutus" class="container text-center">
  <h3 class="line">QUÉ HACEMOS</h3>
  <p>En Red Reciclajes nos encargamos de recibir todo tipo de desechos de plásticos, papeles y cartones, asegurando su procesamiento y reutilización nuevamente.</p>

    <p>Les aseguramos a nuestros clientes que el 100% de lo recolectado va a ser reciclado, respaldado por un Informe de Reciclaje basado en las exigencias de la Ley REP.
      Además, entregamos un Informe Social donde cuantificamos la ayuda a fundaciones y al medio ambiente, gracias al reciclaje de los desechos de cierto cliente.</p>

    <p style="margin-bottom: 5em;">En caso que el cliente no esté inscrito en el registro público de Productores de Productos Prioritarios, nosotros podemos ayudarlos a realizar ese trámite.
    La gestión de los residuos de Productos Prioritarios la hacemos como gestores autorizados, respetando la certificación de transporte y tratamiento de residuos del SEREMI.
    Como Red Reciclajes, queremos demostrar que el reciclar ayuda no solo al medio ambiente y la naturaleza, sino también a las personas a través de proyectos y fundaciones.
    </p>
    <div>
      <img src="Images/Untitled Diagram.png" alt="Lights" class="w3-image">
      </div>
</div>
<!-- En esta division (124 a 165) estan las fundaciones  -->
<div id="social" class="container text-center">
  <h3 class="line">IMPACTO SOCIAL</h3>
  <p>Hasta ahora, estas son las fundaciones que se ven beneficiadas gracias a nuestro reciclaje</p>
  <div class="row">
    <!-- En esta division está la informacion de una fundacion, para cambiar foto solo reemplazar
    en la carpeta Images el archivo "fundacionX.jpg" por la foto a mostrar, notar que la nueva imagen
    debe tener el mismo nombre ("fundacionX.jpg") que la antigua, para editar el texto solo
    basta con cambiar lo que va dentro de la clausula <p>, este procedimiento es analogo en todas las fundaciones -->
    <div class="col-sm-4">
      <p class="text-center"><strong>Fundacion 1</strong></p>
      <a href="#demo" data-toggle="collapse">
        <img src="Images/fundacion1.jpg" class="img-circle person" alt="Random Name" width="355" height="355">
      </a>
      <div id="demo" >
         <!-- class="collapse" -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida efficitur lobortis. Mauris suscipit nunc sit amet diam pharetra rutrum. </p>
      </div>
    </div>

    <div class="col-sm-4">
      <p class="text-center"><strong>Fundacion 2</strong></p>
      <a href="#demo2" data-toggle="collapse">
        <img src="Images/fundacion2.jpg" class="img-circle person" alt="Random Name" width="355" height="355">
      </a>
      <div id="demo2">
         <!-- class="collapse" -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida efficitur lobortis. Mauris suscipit nunc sit amet diam pharetra rutrum.</p>
      </div>
    </div>

    <div class="col-sm-4">
      <p class="text-center"><strong>Fundacion 3</strong></p>
      <a href="#demo3" data-toggle="collapse">
        <img src="Images/fundacion3.jpg" class="img-circle person" alt="Random Name" width="355" height="355">
      </a>
      <div id="demo3">
         <!-- class="collapse" -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida efficitur lobortis. Mauris suscipit nunc sit amet diam pharetra rutrum.</p>
      </div>
    </div>
  </div>
</div>

<div id="envirioment" class="text-center">

<h3 class="line">MEDIOAMBIENTE</h3>
<img src='Images/FotoTutu.jpg' style="width: 100%"></img>
</div>

<div class="container text">
  <div class="row">
    <div class="column">
      <p class="text-center"><strong>BENEFICIOS ECOLÓGICOS</strong></p>
      <div style="float: left; width: 100%;">
      <ul2>
      <li>Disminuye el volumen de basura a nivel mundial</li>
      <li>Disminuyen las probabilidades de contaminar la naturaleza</li>
      <li>Se fomenta la creación de parques y zonas verdes</li>
      <li>Se protege la vida y el ecosistema del planeta</li>
      <li>Se generan materias primas reutilizables y libres de tóxicos</li>
      <li>Se mantiene el equilibrio natural de nuestra Tierra</li>
    </ul2>
      </div>
    </div>
    <div class="column">
      <p class="text-center"><strong>RECICLAJE MUNDIAL EN CIFRAS</strong></p>
      <div style="float: right; width: 100%;">
      <ul2>
      <li>Los desechos producidos a nivel global se estiman en un billón de toneladas anuales</li>
      <li>Chile aporta con cerca de 17 millones de toneladas cada año</li>
      <li>En Latinoamérica no se recicla más del 15% de los desechos generados, y en Chile hasta hace unos años se alcanzaba cerca del 10%</li>
      <li>Países como Suiza y Alemania reciclan más de la mitad de los desechos que generan</li>
      <li>La mayoría de los desechos que producimos se apilan en vertederos, muchos de los cuales son ilegales además de focos contaminantes y de enfermedades. En la RM se han contado más de 60 vertederos ilegales</li>
      <li>Los plásticos son, en general, de una degradación natural lenta. Además, se estima que cerca del 70% de la basura que termina en el mar está hecha de plásticos</li>
      <li>Más del 70% de la basura a nivel global termina en ambientes naturales (incluyendo vertederos, océanos y bosques entre otros), el resto se incinera o se recicla</li>
    </ul2>
      </div>
    </div>
  </div>
</div>




<!-- Container (Contact Section) -->
<div id="contact" class="container-class text-center" style="background-image: url('Images/img5-2.jpg')";>
  <h3 class="text-center">Escríbenos</h3>
  <p style="color:#111;" class="text-center"><em>Te esperamos!</em></p>

  <form action="contact_controller.php" method="post">
    <div class="row">
      <div class="col-md-4">
        <p style="color:#111;" ><span class="glyphicon glyphicon-map-marker"></span>  Los Militares 4328, Santiago, CHL</p>
        <!-- Descomentar estas dos lineas para activar telefono y correo -->
        <!-- <p style="color:#111;" ><span class="glyphicon glyphicon-phone"></span>  Cel: +56 9 9953 5061</p>
        <p style="color:#111;" ><span class="glyphicon glyphicon-envelope"></span>  bgimenez@redreciclajes.cl </p> -->
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="message" name="message" placeholder="Mensaje" rows="5" type="message" required></textarea>
        <br>
        <div class="row">
          <div class="col-sm-4 form-group">
            <button class="btn pull-left" type="submit">Enviar</button>
          </div>
          <div class="col-sm-4 g-recaptcha" data-sitekey="6LfyRXcUAAAAAHCCkVFkpBDUshJNgYL0-YIie3MM">     </div>
        </div>
        <div class"row"> &nbsp;

        </div>
      </div>
    </div>
  </form>

</div>

  <br>

<!-- Add Google Maps -->
<div id="googleMap"  ></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(-33.413822, -70.586046);
var mapProp = {center:myCenter, zoom:16, scrollwheel:true, draggable:true, mapTypeId:google.maps.MapTypeId.MAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzd1ok8KlpTKjIP4A0oBQsfJvBRn6LpFs&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<footer class="footer">

    <div class="footer-copyright text-center py-3">© 2018 by Domíngo Ramírez Calvo


  </div>
</footer>
</body>
</html>
