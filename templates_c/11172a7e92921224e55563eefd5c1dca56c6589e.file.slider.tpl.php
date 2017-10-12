<?php /* Smarty version Smarty-3.1.14, created on 2017-10-12 16:05:28
         compiled from ".\templates\components\slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1918259df5a9f09e986-44109667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11172a7e92921224e55563eefd5c1dca56c6589e' => 
    array (
      0 => '.\\templates\\components\\slider.tpl',
      1 => 1507816780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1918259df5a9f09e986-44109667',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59df5a9f0a2804_27426063',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59df5a9f0a2804_27426063')) {function content_59df5a9f0a2804_27426063($_smarty_tpl) {?>
<div id="carouselContainer">


  <h2>Fotos del último mes</h2>
  <div id="home-page" class="col-md-12">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="col-md-4" src="images/slider/foto1.jpg" alt="TrilogiaHG">
          <div class="carousel-caption">
            <h3>TRILOGIA: Juegos del Hambre</h3>
            <p class="col-md-offset-4">La trilogía se compone de Los juegos del hambre, En llamas y Sinsajo. Los dos primeros libros fueron cada uno best-sellers de The New York Times, y el tercer libro, Sinsajo, encabezó todas las listas de libros más vendidos de Estados Unidos en su lanzamiento</p>
          </div>
        </div>
        <div class="item">
          <img class="col-md-4" src="images/slider/foto2.jpg" alt="FindeLaEternidad">
          <div class="carousel-caption ">
            <h3 class="capImg">El Fin de la Eternidad</h3>
            <p class="col-md-offset-4" >Andrew Harlan ha cometido un crimen, pero su acto no es un simple delito. La ley que ha quebrantado es la más importante de todas para un Ejecutor: la ley que impide que miles de años de historia sean borrados y reescritos de forma irreversible por la guerra, la muerte y la decadencia. Ni siquiera la Eternidad, la organización a la que pertenece, puede detenerle.</p>
          </div>
        </div>
        <div class="item">
          <img class="col-md-4" src="images/slider/foto3.jpg" alt="GOT">
          <div class="carousel-caption">
            <h3>Canción de hielo y Fuego: Juego de Tronos</h3>
            <p class="col-md-offset-4">Tras el largo verano, el invierno se acerca a los Siete Reinos. Lord Eddard Stark, señor de Invernalia, deja sus dominios para unirse a la corte del rey Robert Baratheon el Usurpador, hombre díscolo y otrora guerrero audaz cuyas mayores aficiones son comer, beber y engendrar bastardos. Eddard Stark desempeñará el cargo de Mano del Rey e intentará desentrañar una maraña de intrigas que pondrá en peligro su vida... y la de los suyos. En un mundo cuyas estaciones duran décadas y en el que retazos de una magia inmemorial y olvidada surgen en los rincones más sombrios y maravillosos, la traición y la lealtad, la compasión y la sed de venganza, el amor y el poder hacen del juego de tronos una poderosa trampa que atrapa en sus fauces a los personajes... y al lector.</p>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<?php }} ?>