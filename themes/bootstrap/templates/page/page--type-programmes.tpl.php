<?php  global $base_path, $base_url, $language; ?>
<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <?php if (!empty($logo)): ?>
        <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <h1 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
        </h1>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="nav-collapse collapse">
          <nav role="navigation">
            <?php if (!empty($primary_nav)): ?>
              <?php print "<div id='theNav'>".render($primary_nav)."</div>"; ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
              <?php print render($secondary_nav); ?>
            <?php endif; ?>
          <?php if (!empty($page['loginZone'])): ?>
              <?php print render($page['loginZone']); ?>
            <?php endif; ?>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <?php render($page['content']['metatags']); ?>
</header>

<div class="main-container container programme">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row-fluid">
      <section id='contentOfProgrammeSection' class="<?php print _bootstrap_content_span($columns); ?>">     

        <?php if (!empty($breadcrumb)): /*print $breadcrumb*/echo "<a href='$base_url' alt=''>Accueil</a>&nbsp>&nbsp<a href='$base_url/liste-actions' alt=''>Actions</a>&nbsp>&nbsp$title"; endif;?>        
        <h1><?php echo $title; ?></h1>
        <?php $prog_id = $node->vid;  ?>
        <?php print views_embed_view('v_programme','block',$prog_id); ?>       
      </section>
  </div>

</div>


<footer class="footer container">
  <?php print render($page['footer']); ?>
  <script>
  jQuery(document).ready(function() {
    jQuery('a.galleryOfScreenPdf').colorbox({rel:'gal'});
    jQuery('a.galleryOfScreenPdf2').colorbox({rel:'gal2'});
  });
  </script>
    <script>

  jQuery(window).load(function() {
    
    jQuery('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    slideshow: false,
    prevText: "",           //String: Set the text for the "previous" directionNav item
    nextText: "", 
    itemMargin: 60,
    itemWidth: 300,
    maxItems: 4
    });

    jQuery('.flexslider2').flexslider({
    animation: "slide",
    animationLoop: false,
    slideshow: false,
    prevText: "",           //String: Set the text for the "previous" directionNav item
    nextText: "", 
    itemMargin: 60,
    itemWidth: 300,
    maxItems: 4
    });

   
  });
  
  </script>
</footer>
