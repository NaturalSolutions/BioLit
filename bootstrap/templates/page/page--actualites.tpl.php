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

<div class="main-container container actuContainer">

    <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
  
  <div class="row-fluid">
 
    <section class="<?php print _bootstrap_content_span($columns); ?>" id='actuSection'>  
      <h1 class="page-header"><?php print 'Actualités BioLit' ?></h1>  
      
      <div class="row-fluid">
        <div class="span12">  
        <?php print views_embed_view('v_actualite','block_1'); ?>
        </div>
      </div>
    
    </section>

  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
