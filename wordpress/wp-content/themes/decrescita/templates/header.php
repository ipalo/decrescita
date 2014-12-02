<header id="primary-menu" class="row navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand text-hide" href="<?php echo esc_url(home_url('/')); ?>"><span id="definizione-decrescita" class="glyphicon-chevron-down"></span></a>
    </div>
    <nav id="primary-menu-collapse" class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right'));
        endif;
      ?>
    </nav>
</header>

<div id="tools-menu" class="row">
  <div class="right">
    <ul class="nav nav-pills nav-stacked affix-top" data-spy="affix">
      <li><a href="#"><span class="valign"></span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icona-cerca.png" width="25" title="Cerca" alt="Cerca"></a></li>
      <li><a href="#"><span class="valign"></span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icona-mappa.png" width="25" title="Mappa del sito" alt="Mappa del sito"></a></li>
      <li><a href="#"><span class="valign"></span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icona-personaggi.png" width="25" title="Personaggi" alt="Personaggi"></a></li>
      <li><a href="#"><span class="valign"></span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icona-glossario.png" width="25" title="Glossario" alt="Glossario"></a></li>
    </ul>
  </div>
</div>
<div id="definition" class="row">
    <div class="col-md-12">
        <h2>decrescita <span><em>s. f. </em><a href="">Svolta riflessiva</a> per la ricerca relazionale, personale e collettiva di una <a href="">qualità della vita</a> sganciata dall’ossessione per la crescita e dalla corsa alla produzione, al possesso e al consumo di merci;</span>
        </h2>
    </div>
</div>
<div id="secondary-menu" class="row navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#secondary-menu-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div id="secondary-menu-collapse" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#" class="label">EVENTI</a></li>
      <li><a href="#">CONFERENZE</a></li>
      <li><a href="#">ARTICOLI</a></li>
      <li><a href="#">FOTOSTORIE</a></li>
      <li><a href="#">VIDEO</a></li>
      <li><a href="#">PUBBLICAZIONI</a></li>
      <li><a href="#">GRUPPI DI LAVORO</a></li>
      <li><a href="#">MEDIATECA</a></li>
    </ul>
  </div>
</div>
<div id="tags" class="row">
    <div class="col-md-12">
      <ul class="list-unstyled list-inline">
        <li><h4>TEMI:</h4></li>
        <li><a href="#" class="label">bene comune</a></li>
        <li><a href="#" class="label">ben vivere</a></li>
        <li><a href="#" class="label">buone pratiche</a></li>
        <li><a href="#" class="label">democrazia</a></li>
      </ul>
    </div>
</div>
