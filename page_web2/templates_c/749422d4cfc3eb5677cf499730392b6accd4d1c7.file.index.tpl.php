<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 19:58:33
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4626546e2b3a3e4ff1-50479415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1417028310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4626546e2b3a3e4ff1-50479415',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546e2b3a6a4297_65270626',
  'variables' => 
  array (
    'usuario' => 0,
    'jugadores' => 0,
    'indice' => 0,
    'jugador' => 0,
    'i' => 0,
    'mes' => 0,
    'foo' => 0,
    'nac' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e2b3a6a4297_65270626')) {function content_546e2b3a6a4297_65270626($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Tandil es tenis de mesa </a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
            
                    <li>
                        <a class="page-scroll" href="#inicio">Inicio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#history">Historia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#reglamento">Reglamento</a>
                    </li>
            
                    <li class="dropdown">
                      <a id="btn-jugadores" data-toggle="dropdown" class="dropdown-toggle">Jugadores <b class="caret"></b></a>
                        <ul class="dropdown-menu"data-no-collapse="true">

                            <li><a class="page-scroll" href="#portfolio">Mundiales</a></li>
                            <li><a class="page-scroll" href="#portfolio2">Nacionales</a></li>
                        </ul>
                    </li>
                   <!-- <li>
                        <a class="page-scroll" href="#portfolio">Mundiales</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio2">Nacionales</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#materiales">Materiales</a>
                    </li>
                    <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?> 
                       <li>
                        <a class="page-scroll" href="#calendario">Calendario</a>
                       </li>
                    <li class="dropdown">
                      <a id="btn-jugadores" data-toggle="dropdown" class="dropdown-toggle"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
 <b class="caret"></b></a>
                        <ul class="dropdown-menu"data-no-collapse="true">

                          <li><a href="index.php?action=logout">Salir</a></li>
                        
                            
                        </ul>
                    </li>
                    <?php }?> 
                    <?php if (!isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
                    <li>
                        <!-- <a class="page-scroll" href="#login">Ingresar</a> -->
                        <a class="page-scroll" href="#contact">Ingresar</a>
                    </li>

                    <?php }?>
                    
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Header -->
    <header>
        <div class="container">
           <!--  <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.png" alt="">
                            </div> -->
            <div class="intro-text">
                <!-- <div class="intro-lead-in">Welcome To Our Studio!</div> -->
                <!-- <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div> -->
                <div class="intro-heading">the best</div>

                <a href="#inicio" class="page-scroll btn btn-xl">Inicio</a>

            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="inicio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Inicio</h2>
                    <h3 class="section-subheading text-muted">TANDIL ES TENIS DE MESA</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i> -->
                        <!-- <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                        <i class="fa fa-fast-forward text-primary"></i>
                    </span>
                    <h4 class="service-heading">Perseverancia </h4>
                    <p class="text-muted">La Gloria no Consiste en no caer nunca sino en levantarte cada vez que te caes.
                    El dolor es temporal, el orgullo es para siempre.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i> -->
                        <i class="fa fa-hand-o-up text-primary"></i>
                    </span>
                    <h4 class="service-heading">Gratitud</h4>
                    <p class="text-muted">
                        <!-- <p></p>La Gloria no Consiste en no caer nunca sino en levantarte cada vez que te caes.
                        El dolor es temporal, el orgullo es para siempre.</p> -->
                         Una carrera sin obst&aacuteculos es como una victoria sin gloria.
                         Quien teme perder...ya est&aacute vencido!
                         FELICITACIONES A TODOS LOS JUGADORES DE TETM !!
                          <!-- <p>Hoy est&aacute en el puesto 24&deg, esto es producto del esfuerzo y la constancia de jugadores, entrenadores y colaboradores que d&iacutea a d&iacutea tratan que TETM y Tandil sean <br>reconocidos a nivel Provincial y Nacional.</p>
                        <p>Gracias a todos y vamos por m&aacutes!!</p> -->

                    </p>
                  
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                       <!--  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i> -->
                       <i class="fa fa-paper-plane text-primary"></i>
                    </span>
                    <h4 class="service-heading">Crecimiento</h4>
                    <p class="text-muted">Hoy est&aacute en el puesto 24&deg, esto es producto del esfuerzo y la constancia de jugadores, entrenadores y colaboradores que d&iacutea a d&iacutea tratan que TETM y Tandil sean reconocidos a nivel Provincial y Nacional.
                   <!--  Gracias a todos y vamos por m&aacutes!! --></p>
                </div>
            <!-- </div> -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-subheading text-muted"> Gracias a todos y vamos por m&aacutes!!</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- History Section -->
    <section id="history" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">historia</h2>
                    <h3 class="section-subheading text-muted">Inicios remotos</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Comienzos</h4>
                        <p class="text-muted">Los principios del tenis de mesa son oscuros y no se sabe con certeza cuando se practic&oacute por primera vez. Podemos decir que fue en la d&eacutecada de 1870 cuando este deporte surgi&oacute en Inglaterra como una derivaci&oacuten del tenis. Es posible que jugadores de tenis ante la adversa climatolog&iacutea inventaran una especie de tenis en miniatura utilizando una mesa de billar o de comedor, en un Club de Tenis, y dividi&eacutendola en dos campos con libros o simult&aacuteneamente con una cuerda.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>John Jaques</h4>
                        <p class="text-muted">En 1884 la firma Federacion History Ayres Ltd. ya comercializaba un juego de tenis de sal&oacuten en miniatura. En julio de 1890, el industrial de Yorkshire David Forster, patent&oacute un juego de mesa para sala, el cual consist&iacutea &uacutenicamente en una mesa rodeada con una especie de valla para mantener la pelota dentro de unos l&iacutemites. No existen evidencias de su comercializaci&oacuten. 
                        En 1891, John Jaques , fabricante de art&iacuteculos deportivos, patent&oacute un juego llamado Gossima, el cual no tuvo aceptaci&oacuten.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>James Gibb</h4>
                        <p class="text-muted">En el a&ntildeo 1891  James Gibb,improvis&oacute un material que consist&iacutea en una red fija a dos postes y sobre una superficie de madera elevada del suelo, inventando un juego de 21 puntos y con pelotas de goma. Gibb encontr&oacute en Am&eacuterica peque&ntildeas pelotas de celuloide, introduci&eacutendolas en el juego con un &eacutexito inmediato. James Gibb sugiri&oacute el nombre de Ping Pong a la firma John Jaques Ltd., la cual registr&oacute el nombre. El nombre viene por el sonido de Ping que hac&iacutea la pelota de celuloide al impactar con las raquetas recubiertas en pergamino y el sonido Pong al contacto de la pelota con la mesa.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Esta historia
                        continuar&aacute...</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section id="reglamento">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Reglamento</h2>
                    <h3 class="section-subheading text-muted"><!-- Lorem ipsum dolor sit amet consectetur. --></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>LA MESA</h4>
                                    <!-- <h4 class="subheading">Our Humble Beginnings</h4> -->
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        <p>La superficie superior de la mesa, conocida como superficie de juego, ser&aacute rectangular, con una longitud de 2,74 m y una anchura de 1,525 m, y estar&aacute situada en un plano horizontal a 76 cm del suelo. </p>
                                        <p> La superficie de juego no incluye los laterales de la parte superior de la mesa. </p>
                                        <p>La superficie de juego puede ser de cualquier material y proporcionar&aacute un bote uniforme de, aproximadamente, 23 cm al dejar caer sobre ella una pelota reglamentaria desde una altura de 30 cm. </p>
                                        <p> La superficie de juego ser&aacute de color oscuro, uniforme y mate, con una l&iacutenea lateral blanca de 2 cm de anchura a lo largo de cada borde de 2,74 m, y una l&iacutenea de fondo blanca de 2 cm de anchura a lo largo de cada borde de 1,525 m. </p>
                                    
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>EL CONJUNTO DE LA RED</h4>
                                    <!-- <h4 class="subheading">An Agency is Born</h4> -->
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        <p>El conjunto de la red consistir&aacute en la red, su suspensi&oacuten y los soportes, incluyendo las fijaciones que los sujetan a la mesa. </p>
                                        <p>La red estar&aacute suspendida de una cuerda sujeta en cada uno de sus extremos a un soporte vertical de 15,25 cm de altura; el l&iacutemite exterior de los soportes estar&aacute a 15,25 cm por fuera de las l&iacuteneas laterales. </p>
                                        <p>La parte superior de la red estar&aacute, en toda su longitud, a 15,25 cm sobre la superficie de juego. </p>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>LA PELOTA</h4>
                                    <!-- <h4 class="subheading">Transition to Full Service</h4> -->
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                       <p> La pelota ser&aacute esf&eacuterica, con un di&aacutemetro de 40 mm. </p>    
                                       <p>La pelota pesar&aacute 2,7 g. </p>
                                       <p>La pelota ser&aacute de celuloide o de un material pl&aacutestico similar, blanca o naranja.</p>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>LA PALETA</h4>
                                    <!-- <h4 class="subheading">Phase Two Expansion</h4> -->
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        <p>La paleta puede ser de cualquier tama&ntildeo, forma o peso, pero la hoja deber&aacute ser plana y r&iacutegida.</p>
                                        <p>Como m&iacutenimo, el 85% del grosor de la hoja ser&aacute de madera natural; la hoja puede estar reforzada en su interior con una capa adhesiva de un material fibroso tal como fibra de carbono, fibra de vidrio o papel prensado, pero sin sobrepasar el 7,5% del grosor total &oacute 0,35 mm, siempre la dimensi&oacuten inferior. </p>
                                        <p> El lado de la hoja usado para golpear la pelota estar&aacute cubierto, bien con goma de picos normal con los picos hacia fuera y un grosor total no superior a 2 mm incluido el adhesivo, o bien con goma s&aacutendwich con los picos hacia dentro o hacia fuera y un grosor total no superior a 4 mm incluido el adhesivo. </p>
                                        <p>Al comienzo de un partido, y siempre que cambie de raqueta durante el mismo, un jugador mostrar&aacute a su contrincante y al &aacuterbitro la raqueta que va a usar, y permitir&aacute que la examinen. </p>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Equipate 
                                    <br>y
                                    <br>empez&aacute!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Jugadores -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Jugadores</h2>
                    <h3 class="section-subheading text-muted">Mundiales</h3>
                </div>
            </div>
            <!-- comienzo jugador -->
            <div class="row">
            <?php  $_smarty_tpl->tpl_vars['jugador'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jugador']->_loop = false;
 $_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['jugadores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->key => $_smarty_tpl->tpl_vars['jugador']->value){
$_smarty_tpl->tpl_vars['jugador']->_loop = true;
 $_smarty_tpl->tpl_vars['indice']->value = $_smarty_tpl->tpl_vars['jugador']->key;
?>
                <?php if (($_smarty_tpl->tpl_vars['jugadores']->value[$_smarty_tpl->tpl_vars['indice']->value]['tipo_jugador'])=='Mundial'){?>
          
                <div class="col-md-4 col-sm-6 portfolio-item">
                   <a href="#modal_jugador" class="portfolio-link" data-toggle="modal" onClick="get_portfolio_jugador(<?php echo $_smarty_tpl->tpl_vars['jugador']->value['id_jugador'];?>
);" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['jugador']->value['ruta'];?>
" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo utf8_encode($_smarty_tpl->tpl_vars['jugador']->value['nombre']);?>
</h4>
                        <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['jugador']->value['nacionalidad'];?>
</p>
                    </div>
                </div>
                <?php }?>
            <?php } ?>

    </section>

    <section id="portfolio2" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Jugadores</h2>
                    <h3 class="section-subheading text-muted">Nacionales</h3>
                </div>
            </div>
            <!-- comienzo jugador -->
            <div class="row">
            <?php  $_smarty_tpl->tpl_vars['jugador'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jugador']->_loop = false;
 $_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['jugadores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->key => $_smarty_tpl->tpl_vars['jugador']->value){
$_smarty_tpl->tpl_vars['jugador']->_loop = true;
 $_smarty_tpl->tpl_vars['indice']->value = $_smarty_tpl->tpl_vars['jugador']->key;
?>
                <?php if (($_smarty_tpl->tpl_vars['jugadores']->value[$_smarty_tpl->tpl_vars['indice']->value]['tipo_jugador'])=='Nacional'){?>
            
                <div class="col-md-4 col-sm-6 portfolio-item">
                   <a href="#modal_jugador" class="portfolio-link" data-toggle="modal" onClick="get_portfolio_jugador(<?php echo $_smarty_tpl->tpl_vars['jugador']->value['id_jugador'];?>
);" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['jugador']->value['ruta'];?>
" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo utf8_encode($_smarty_tpl->tpl_vars['jugador']->value['nombre']);?>
</h4>
                        <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['jugador']->value['nacionalidad'];?>
</p>
                    </div>
                </div>
                <?php }?>
            <?php } ?>
            <!-- <a href="index.php?action=mostrarJugador&id=<?php echo $_smarty_tpl->tpl_vars['jugador']->value['id_jugador'];?>
" class="portfolio-link" data-toggle="modal"> -->

    </section>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="modal_jugador" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="portfolio_modal"class="modal-body">
                            <!-- nuevo div -->
                            <!-- <div id="portfolio_modal"></div> -->
                            <!-- Project Details Go Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="materiales" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Materiales</h2>
                    <h3 class="section-subheading text-muted">Gomas/Maderas</h3>
                </div>
            </div>
            <!-- comienzo materiales -->
            <div class="row">
            <!-- Gomas -->
                <div class=" col-md-6  portfolio-item">
                    <a href="#modal_material" class="portfolio-link" data-toggle="modal" onClick="get_detalle_material(0);" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/gomas.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Gomas</h4>
                        <!-- <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['jugador']->value['nacionalidad'];?>
</p> -->
                    </div>
                </div>
            <!-- Maderas -->
                <div class=" col-md-6  portfolio-item">
                     <a href="#modal_material" class="portfolio-link" data-toggle="modal" onClick="get_detalle_material(1);" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/maderas.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Maderas</h4>
                        <!-- <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['jugador']->value['nacionalidad'];?>
</p> -->
                    </div>
                </div>

    </section>

    <!-- Portfolio Modal Materiales -->
    <div class="portfolio-modal modal fade" id="modal_material" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="material_modal"class="modal-body">
                            <!-- nuevo div -->
                            <!-- <div id="portfolio_modal"></div> -->
                            <!-- Project Details Go Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/stiga.gif" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/TableTennisZone.gif" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/teenchallenge.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="col-lg-6 text-left-center">
                        <h3>Login</h3>
                    </div>
                    <form name="loginForm" id="loginForm" method="post" action="index.php?action=login" >
                        <div class="row">
                            <div class="formu">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="user" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="pass" class="form-control" placeholder="Your Pass *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                    
                                    <button type="submit">loguearse</button>
                                </div>
                        </div>
                    </form>
                    <script src="./js/check_login.js"></script>
                </div>
                <div class="col-lg-6">
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <div class="team-member">
                                        <img src="img/team/logo.png" class="img-responsive img-circle" alt="">
                                     </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl"<a href="#registro" class="portfolio-link" data-toggle="modal"></a>registrarse</button>
                                </div>
                </div>
        </div>
    </section> -->

    <?php if (!isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Ingresar</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="col-lg-6 text-left-center">
                        <h3>Login</h3>
                    </div>
                   <!--  <form name="sentMessage" id="contactForm" novalidate method="post" > -->
                    <form name="sentMessage2" id="contactForm2" method="post" action="index.php?action=login" >
                        <div class="row">
                            <div class="formu">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="user" class="form-control" placeholder="Su email *" id="name" required data-validation-required-message="Por favor ingrese su nombre.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" class="form-control" placeholder="Su contraseña *" id="name" required data-validation-required-message="Please enter your pass.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <!-- <button type="submit" class="btn btn-xl"   
                                    <a href="#calendario" class="portfolio-link" data-toggle="modal"></a>loguearse</button> -->
                                    <button type="submit" class="btn btn-xl" >  
                                    loguearse</button>
                                </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <div class="team-member">
                                        <img src="img/team/logo.png" class="img-responsive img-circle" alt="">
                                     </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl"<a href="#registro" class="portfolio-link" data-toggle="modal"></a>registrarse</button>
                                </div>
                </div>
                    <!-- </form>
                </div>
                
                <!-- calendario -->
                <!-- <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.png" alt="">
                            </div> -->
            <!-- </div> -->
            <!-- <div class="row">
                <img class="img-responsive" src="images/estilo/calendario.png" alt="">
            </div> -->
        </div>
       
    </section>
    <?php }?>

    <!-- calendario!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
    <section id="calendario">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Calendario</h2>
                    <!-- <h3 class="section-subheading text-muted">Ingresar o registrarse</h3> -->
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-lg-6"> -->
                    <!-- <div class="col-lg-6 text-left-center">
                        
                    </div> -->
                  
         
                    <!-- </form> -->
                    
                <!-- </div> -->
                
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

</head>

    <body>

        
        <style type="text/css">

            .calendario{
                width: 70%;
                height: 610px;
                margin-left: 16%;
                margin-top: 2%;
                background-color: #fed136;
                color: grey;

            }
            .diaCalender{
                width: 14.2%;
                height: 120px;
                float: left;
                background-color:#fed136;
                opacity: 0.5;
                border: left 0.5% white;
                border: right 0.5% white;
                border-style: solid;
            }
        

        </style>
    <!-- <div class="row"> -->
    <!-- <div class="btn-group">
        <button class="btn-group btn-group-justified"class="btn btn-info btn-block regular-link">Noviembre</button>
        <button class="btn-group btn-group-justified"class="btn btn-info btn-block regular-link">Noviembre</button>
    </div> -->
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">Noviembre</button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">Diciembre</button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">Enero</button>
          </div>
    </div>
        <div class = "calendario">
           <!-- <div class = "diaCalender" id = "1" onclick = "dia"><?php echo $_smarty_tpl->tpl_vars['i']->value['dni_persona'];?>
<button>reservar</button></div> -->
            
                <!-- <div class = "diaCalender" id = "1" onclick = "dia">1</div> -->
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <div class = "diaCalender" id = "<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" onclick = "dia"><strong><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</strong>
                   
                    <div class="btn-group">
                      <!--   <button class="btn btn-success">reservar</button> -->
                   <!--      <button class="btn btn-warning">retar</button>
                        <button class="btn btn-danger">cancelar</button> -->

                        <button a href="#form_reserva" class="portfolio-link" data-toggle="modal" class="btn-group btn-group-justified"class="btn btn-info btn-block regular-link">reservar</button>
                        <button a href="#form_reserva" class="portfolio-link" data-toggle="modal" class="btn-group btn-group-justified"class="btn btn-info btn-block regular-link">aceptar</button>
                        <button a href="#form_reserva" class="portfolio-link" data-toggle="modal" class="btn-group btn-group-justified"class="btn btn-info btn-block regular-link">cancelar</button>

                        
                       <!--  <button class="btn-group btn-group-justified"class="btn btn-info btn-block regular-link">aceptar</button>
                        <button class="btn-group btn-group-justified"class="btn btn-info btn-block regular-link">cancelar</button> -->
                    </div>
                
                </div>
                <?php }} ?>

        </div>
    </div>
    </body>

</html>
    
        </div>
        </div>

    </section>
    <?php }?>

    <div class="portfolio-modal modal fade" id="form_reserva" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="calendario_modal" class="modal-body">
                            <!-- Project Details Go Here -->
                            <div class="container">        

                                <div class="row">
                                    <div class="box">
                                        <!-- <div class="col-lg-3 "></div>
                                        .col-md-3 .col-md-offset-3 -->
                                        <div class="col-lg-3 col-lg-offset-3 ">
                                            <hr>
                                            <h2 class="intro-text text-center"><strong>Cargar partido</strong></h2>
                                            <hr>
                                            <form role="form" action="index.php?action=cargar_modal_calendario" method="POST">
                                                <div class="row">
                                                    
                                                    <div class="form-group col-lg-12">
                                                        <label>Fecha:</label>
                                                        <input name="fecha" type="number" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" readonly>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <label>Horario: </label>
                                                        <input name="horario" type="text" class="form-control" value = "predeterminados">
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <label>Lugar: </label>
                                                        <input name="lugar" type="text" class="form-control" value = "predeterminados" >
                                                    </div>
                                                    
                                                    <div class="form-group col-lg-12">
                                                        <label>Nuevo lugar: </label>
                                                        <input name="nuevo" type="number" class="form-control" >
                                                    </div>
                                                    
                                                    <div class="form-group col-lg-12">                       
                                                        <!--  <input name = "nac" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['nac']->value;?>
"> -->
                                                        <button type="submit" class="btn btn-default">Enviar</button>
                                                    </div>
                                                </div>
                                            </form>
                                           
                                        </div>
                                    </div>
                                </div>

                            </div>
                           
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- registro -->
    <!-- <section id="contact">
    <div class="portfolio-modal modal fade" id="registro" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Registro</h2>
                            <p class="item-intro text-muted">Complete los campos</p>
                <div class="col-lg-12">     
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="formu">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Pass *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" value="agree">  Accepto <a href="#">Terminos y condiciones</a>.
                                        </label>
                                     </div>
                                    </div>
                                    
                                </div>
                            </div>
                              
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl"<a href="#registro" class="portfolio-link" data-toggle="modal"></a>registrarse</button>
                                </div>
                        </div>
                    </form>
                </div>
                            <div class="clearfix"></div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section> -->
   <!--  comienzo madal registrarse -->
 
<div class="portfolio-modal modal fade" id="registro" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">

                           <!--  comienzo register -->
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-lg-7"> 
                                
                                    <h3>Registro</h3>
                                
                               <!--  <form name="sentMessage" id="contactForm" novalidate method="post" > -->
                                <form name="sentMessage2" id="contactForm2" method="post" action="index.php?action=register" >
                                    <div class="row">
                                        <div class="formu">
                                            <div class="col-md-6" >
                                                <div class="form-group">
                                                    <p class="item-intro text-muted">Nombre</p>
                                                    <input type="text" name="name" class="form-control" placeholder="Su nombre *" id="name" required data-validation-required-message="Please enter your name.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <p class="item-intro text-muted">Apellido</p>
                                                    <input type="text" name="lastname"class="form-control" placeholder="Su apellido *" id="name" required data-validation-required-message="Please enter your lastname.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <p class="item-intro text-muted">Contrase&ntilde;a</p>
                                                    <input type="password" name="pass"class="form-control" placeholder="Su contraseña *" id="name" required data-validation-required-message="Please enter your name.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <p class="item-intro text-muted">Correo</p>
                                                    <input type="email" name="email" class="form-control" placeholder="Su correo *" id="email" required data-validation-required-message="Please enter your email address.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <p class="item-intro text-muted">Tel&eacute;fono</p>
                                                    <input type="tel" name="tel"class="form-control" placeholder="Su teléfono " id="phone" required data-validation-required-message="Please enter your phone number.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <br><br>
                                                <!-- <div class="form-group">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" value="agree">  Accepto <a href="#">Terminos y condiciones</a>.
                                                    </label>
                                                </div> -->
                    
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                            <div class="col-lg-12 text-center">
                                                <button type="submit" class="btn btn-xl" >  
                                                Registrarse</button>
                                            </div>
                                        <div class="clearfix"></div>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                                    </div>
                                </form>
                               
                            </div>
                            
                            
                    </div>
    

                           <!--  fin register -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal calendario!!!!!!!!!!!!!!!!1 -->

<div class="portfolio-modal modal fade" id="calendario" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">

                           <!--  comienzo register -->
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-lg-7"> 
                                
                                    <h3>Registro</h3>
                                
                               <!--  <form name="sentMessage" id="contactForm" novalidate method="post" > -->
                                <form name="sentMessage2" id="contactForm2" method="post" action="index.php?action=register" >
                                    <div class="row">
                                        <div class="formu">
                                            <div class="col-md-6" >
                                                <div class="form-group">
                                                    <p class="item-intro text-muted">Nombre</p>
                                                    <input type="text" name="name" class="form-control" placeholder="Su nombre *" id="name" required data-validation-required-message="Please enter your name.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <p class="item-intro text-muted">Apellido</p>
                                                    <input type="text" name="lastname"class="form-control" placeholder="Su apellido *" id="name" required data-validation-required-message="Please enter your lastname.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <p class="item-intro text-muted">Contrase&ntilde;a</p>
                                                    <input type="password" name="pass"class="form-control" placeholder="Su contraseña *" id="name" required data-validation-required-message="Please enter your name.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <p class="item-intro text-muted">Correo</p>
                                                    <input type="email" name="email" class="form-control" placeholder="Su correo *" id="email" required data-validation-required-message="Please enter your email address.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <p class="item-intro text-muted">Tel&eacute;fono</p>
                                                    <input type="tel" name="tel"class="form-control" placeholder="Su teléfono " id="phone" required data-validation-required-message="Please enter your phone number.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <br><br>
                                                <!-- <div class="form-group">
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" value="agree">  Accepto <a href="#">Terminos y condiciones</a>.
                                                    </label>
                                                </div> -->
                    
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                            <div class="col-lg-12 text-center">
                                                <button type="submit" class="btn btn-xl" >  
                                                Registrarse</button>
                                            </div>
                                        <div class="clearfix"></div>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                                    </div>
                                </form>
                               
                            </div>
                            
                            
                    </div>
    

                           <!--  fin register -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

    

    

    

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>





<?php }} ?>