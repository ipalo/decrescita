<header id="primary-menu" class="row navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand text-hide" href="<?php echo esc_url(home_url('/')); ?>"></a>
    </div>
    <nav id="primary-menu-collapse" class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right'));
        endif;
      ?>
    </nav>
</header>

<!--<div id="tools-menu" class="row">
  <div class="right">
    <ul class="nav nav-pills nav-stacked affix-top" data-spy="affix">
      <li><a href="#"><span class="valign"></span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icona-cerca.png" width="25" title="Cerca" alt="Cerca"></a></li>
      <li><a href="#"><span class="valign"></span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icona-mappa.png" width="25" title="Mappa del sito" alt="Mappa del sito"></a></li>
      <li><a href="#"><span class="valign"></span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icona-personaggi.png" width="25" title="Personaggi" alt="Personaggi"></a></li>
      <li><a href="#"><span class="valign"></span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icona-glossario.png" width="25" title="Glossario" alt="Glossario"></a></li>
    </ul>
  </div>
</div>-->
<?php if(is_front_page()) : ?>
<div id="definition" class="row hidden-xs">
    <div class="col-md-12">
        <?php $definizione = get_page_by_path('definizione-decrescita', OBJECT, 'page'); ?>
        <h2>decrescita <span><?php echo $definizione->post_content; ?></span></h2>
    </div>
</div>
<?php endif; ?>
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
    <h4 class="hidden-sm hidden-md hidden-lg">Temi:</h4>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-temi-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div id="menu-temi-collapse" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li><h4>Temi:</h4></li>
      <?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'temi')); ?>
    </ul>
  </div>
</div>
