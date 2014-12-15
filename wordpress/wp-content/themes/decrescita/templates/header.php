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
<div id="definition" class="row hidden-xs">
    <div class="col-md-12">
        <h2>decrescita <span><em>s. f. </em><a href="">Svolta riflessiva</a> per la ricerca relazionale, personale e collettiva di una <a href="">qualità della vita</a> sganciata dall’ossessione per la crescita e dalla corsa alla produzione, al possesso e al consumo di merci;</span>
        </h2>
    </div>
</div>
<div id="menu-categorie" class="row navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-categorie-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <h4 class="visible-xs-block">Categorie:</h4>
  </div>
  <div id="menu-categorie-collapse" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <?php wp_list_categories(array('title_li' => '')); ?>
    </ul>
  </div>
</div>
<div id="menu-temi" class="row navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-temi-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <h4>Temi:</h4>
  </div>
  <div id="menu-temi-collapse" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'temi')); ?>
    </ul>
  </div>
</div>
