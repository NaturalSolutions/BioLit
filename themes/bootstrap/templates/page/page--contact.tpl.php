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
<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row-fluid">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  

    <section class="<?php print _bootstrap_content_span($columns); ?>">  
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
     
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php if($language->language == 'fr') echo 'Contacter Planète Mer';  else echo 'Contact'; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <div class="row-fluid">
        <div class="span8">
            <?php print render($page['content']); ?>    
        </div>
         <div class="span4">     
         <iframe width="140%" height="250px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?q=137,+Avenue+Cl%C3%B4t+Bey++13008+Marseille,+France&amp;oe=utf-8&amp;client=firefox-a&amp;ie=UTF8&amp;hq=&amp;hnear=137+Avenue+Cl%C3%B4t+Bey,+13008+Marseille,+Bouches-du-Rh%C3%B4ne,+Provence-Alpes-C%C3%B4te+d'Azur&amp;t=m&amp;z=9&amp;ll=43.504992,5.483128&amp;output=embed"></iframe><br /><small><a href="https://maps.google.fr/maps?q=137,+Avenue+Cl%C3%B4t+Bey++13008+Marseille,+France&amp;oe=utf-8&amp;client=firefox-a&amp;ie=UTF8&amp;hq=&amp;hnear=137+Avenue+Cl%C3%B4t+Bey,+13008+Marseille,+Bouches-du-Rh%C3%B4ne,+Provence-Alpes-C%C3%B4te+d'Azur&amp;t=m&amp;z=14&amp;ll=43.256992,5.383128&amp;source=embed" style="color:#0000FF;text-align:left"><?php if($language->language == 'fr') echo 'Agrandir le plan'; else echo 'Extend the map'; ?></a></small>   
          
         </div>
      </div>

    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>

  <script>(function() {
  
  var changeSelectIfComefromRelais = function(){

    var sujet = window.location.href.split('&');
    //si il a y un sujet précis
    if(sujet[1] != undefined){

      switch(sujet[1]){
      case 'sujet=relais':
        jQuery('#edit-cid option[value="1"]').prop("selected", false);
        jQuery('#edit-cid option[value="2"]').prop("selected", true);
      break;
      }
    }  

  };

  var majLanguage = function(){

    var lang = '<?php echo $language->language ?>';

    if(lang == 'en'){
      jQuery('#edit-cid option[value="1"]').text('I have a question');
      jQuery('#edit-cid option[value="2"]').text('I want to become a relay');
      jQuery('#edit-cid option[value="3"]').text('I have a technical problem');
      jQuery('#edit-cid option[value="4"]').text('Other');
    }

  };

  window.init = function() {

    changeSelectIfComefromRelais();
    majLanguage();  
  
  }
  
  }())
  
  init(); // true


  </script>
</footer>
