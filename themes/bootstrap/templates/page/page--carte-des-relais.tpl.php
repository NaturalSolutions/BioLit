<?php  global $base_path, $base_url; ?>
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


<div class="main-container container listeRelais">


  <div class="row-fluid">
      <section id='contentOflisteRelais' class="<?php print _bootstrap_content_span($columns); ?>">     
       
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php if($language->language == 'fr') print $title; else echo 'Network of local partners'; ?></h1>
      <?php endif; ?>
        
        <div class='row-fluid' id='fold1inPageRelais'>

          <div class='span7'>
            
            <div class="row-fluid" id='sliderRelais'>
            <div class='span12'>
            <?php print views_embed_view('carte_des_relais','page'); ?>
            </div>
            </div>

     
          
          </div>

          <div class='span5' id='rightSideInRelais'>

            <div class='row-fluid'>
              <div class='span12'>        
              <div id='icon_house_coordinateur' title='Coordinateurs BioLit'></div>
              <div id='icon_house_relais' title='Relais BioLit'></div>
              
              <?php if($language->language == 'en'): ?>
              
                <p>To participate in BioLit, contact a local partner near you! Click on this map to access the partner contact details.<br/>
                <br/>By contacting a <strong style='color:#33CFE3;'>local partner</strong> you can find out how to conduct your own monitoring activities and receive help to identify your field observations. Your observations are very important and BioLit can make sure that your data is shared with scientists at the french National Museum of Natural History.
                <br/><br/><strong style='color:#33AB53;'>Regional coordinators</strong> have the task of participating in the development and strengthening of the BioLit network.<br/>
                <br/>If you are an association or a group, and want to become a BioLit "Local Partner", do not hesitate to <a href="<?php echo $base_url; ?>/contact?&sujet=relais" alt=''>contact us!</a></p>
                
              <?php else: ?>
               
                <p>Pour participer à des <strong>sorties BioLit</strong> et être guidé(e) dans vos observations, contactez un relais près de chez vous ! Cliquez sur la carte ci-contre pour accéder aux coordonnées des relais.<br/>
                <br/><strong style='color:#33CFE3;'>Les relais locaux</strong> assurent l’animation des activités d’observations sur le terrain. Ils organisent des sorties nature et facilitent la transmission des données collectées vers les scientifiques du Muséum National d’Histoire Naturelle.
                <br/><br/><strong style='color:#33AB53;'>Les coordinateurs régionaux</strong> ont pour rôle de participer au développement et au renforcement du réseau BioLit.<br/>
                <br/>Vous êtes une association ou une collectivité, vous souhaitez devenir relais BioLit, n'hésitez pas à nous <a href="<?php echo $base_url; ?>/contact?&sujet=relais" alt=''>contacter ! </a></p>
               
              <?php endif; ?>

              </div>
            </div>

            <div class="row-fluid" id='sliderRelais'>
            <div class='span12'>
            <?php print views_embed_view('v_sliderrelais','block'); ?> 
            </div>
            </div>
      
          </div> <!-- fin rightSideInRelais -->
     
        </div> <!-- fin fold1inPageRelais -->


      </section>

  </div>
</div> 


<footer class="footer container">
  <?php print render($page['footer']); ?>

    <script>

  jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 160,
    controlNav:false,
    directionNav:false,
    itemMargin: 5
   
  });
  });
  
jQuery( document ).ready(function() {
  

  if(language == 'en'){

    jQuery('#edit-field-facade-du-relais-value label[for="edit-field-facade-du-relais-value-atlantique"]').html('<input class="bef-select-as-radios form-radio" type="radio" id="edit-field-facade-du-relais-value-atlantique" name="field_facade_du_relais_value" value="atlantique">Atlantic');
    jQuery('#edit-field-facade-du-relais-value label[for="edit-field-facade-du-relais-value-manche"]').html('<input class="bef-select-as-radios form-radio" type="radio" id="edit-field-facade-du-relais-value-manche" name="field_facade_du_relais_value" value="manche">Channel and North Sea');
    jQuery('#edit-field-facade-du-relais-value label[for="edit-field-facade-du-relais-value-med"]').html('<input class="bef-select-as-radios form-radio" type="radio" id="edit-field-facade-du-relais-value-med" name="field_facade_du_relais_value" value="med">Mediterranean');
  
    jQuery('div.openlayers-views-map').click(function(){
      
      jQuery('div.openlayers-popup.openlayers-tooltip-description > p > strong').each(function(){
        if(jQuery( this ).text() == 'Relais local') jQuery( this ).text('local partner');
        else if(jQuery( this ).text() == 'Coordinateur régional') jQuery( this ).text('Regional coordinator');
        else if(jQuery( this ).text() == 'Coordinateur national') jQuery( this ).text('National coordinator');
      });

    });

  }



});


  
  </script>
</footer>
