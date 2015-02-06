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

<?php global $language; ?>

<div class="container" id='selectLanguageOnFront'>
  <div class="row-fluid">
    <?php print render($page['header']); ?>
  </div>
</div>


<div class="container-fluid slidershowActions">
<div class="row-fluid">
<?php print views_embed_view('v_slideraction','block'); ?> 
</div>
</div>

<div class="main-container container actions">
  <div class="row-fluid">

    <section id='contentOfActionsSection' class="<?php print _bootstrap_content_span($columns); ?>">        
      <h1 class="page-header"><?php if($language->language == 'fr') print 'Les actions'; else echo 'Actions'; ?></h1>  

        
        <?php print views_embed_view('v_liste_actions','block_1'); ?>
        
    </section>

  </div>
</div>


<footer class="footer container">
  <script>

  //Chargement du slider 
  jQuery(window).load(function() {

    jQuery('.flexslider').flexslider({
      animation: "slide",
      animationLoop: false,
      maxItems: 1
    });

  });

  //Alterer les labels des boutons filtes facades 
  jQuery( document ).ready(function() {

      if(language == 'en'){

        jQuery('#edit-field-facade-programme-value label[for="edit-field-facade-programme-value-atlantique"]').html('<input class="bef-select-as-radios form-radio" type="radio" id="edit-field-facade-programme-value-atlantique" name="field_facade_programme_value" value="atlantique">Atlantic');
        jQuery('#edit-field-facade-programme-value label[for="edit-field-facade-programme-value-manche"]').html('<input class="bef-select-as-radios form-radio" type="radio" id="edit-field-facade-programme-value-manche" name="field_facade_programme_value" value="manche">Channel and North Sea');
        jQuery('#edit-field-facade-programme-value label[for="edit-field-facade-programme-value-med"]').html('<input class="bef-select-as-radios form-radio" type="radio" id="edit-field-facade-programme-value-med" name="field_facade_programme_value" value="med">Mediterranean');
      
        jQuery('.container4just1blocAction65 h3.titleOfBlocAction a').text('Start your observations!');
        jQuery('.container4just1blocAction10 h3.titleOfBlocAction a').text('Brown algae and winkles');
        jQuery('.container4just1blocAction9 h3.titleOfBlocAction a').text('Chlorophyll-mania');
        jQuery('.container4just1blocAction7 h3.titleOfBlocAction a').text('The new arrivals');
        jQuery('.container4just1blocAction8 h3.titleOfBlocAction a').text('Seasons of the sea');
        jQuery('.container4just1blocAction11 h3.titleOfBlocAction a').text('Look out, threat?');
        
        jQuery('ul.slides li:first').find('p').html('Start your observations!<br><i>Laurent DEBAS – The coastline of the Golfe de Saint-Florent in Corsica</i>');
        jQuery('ul.slides li:nth-child(2)').find('p').html('Brown algae and winkles<br><i>Laurent DEBAS – Mishmash of brown algae </i>');
        jQuery('ul.slides li:nth-child(3)').find('p').html('Chlorophyll-mania <br><i>Bernadette HUYNH-TAN – Gold coin (Pallenis maritima)</i>');
        jQuery('ul.slides li:nth-child(4)').find('p').html('The new arrivals<br><i>Adrien WECQUEL – The “Sally Lightfoot” crab (Percnon gibbesi)</i>');
        jQuery('ul.slides li:nth-child(5)').find('p').html('Seasons of the sea<br><i>Frédéric BASSEMAYOUSSE – Purple sail jellyfish (Velella velella)</i>');
        jQuery('ul.slides li:nth-child(6)').find('p').html('Look out, threat?<br><i>Laurent DEBAS – Solid waste thrown up by the waves on the beach at Prado, after a storm</i>');

      }

  });
    




  </script>
  <?php print render($page['footer']); ?>
</footer>
