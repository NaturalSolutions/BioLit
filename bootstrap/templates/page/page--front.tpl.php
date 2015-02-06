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

<div class="container" id='selectLanguageOnFront'>
  <div class="row-fluid">
    <?php print render($page['header']); ?>
  </div>
</div>



<div class="container-fluid" id='firstFullContainerHP'>
  
  <div class="row-fluid">
    <div class="span12">

      <div class="flexsliderOnTopHp">


        <ul class="slides">
          <li>
            <div id='slideHP1'></div>
          </li>
          <li>
            <div id='slideHP2'></div>
          </li>
          <li>
           <div id='slideHP3'></div>
          </li>
          <li>
            <div id='slideHP4'></div>
          </li>
          <li>
            <div id='slideHP5'></div>
          </li>
          <li>
           <div id='slideHP6'></div>
          </li>
          <li>
           <div id='slideHP7'></div>
          </li>
          <li>
            <div id='slideHP8'></div>
          </li>
          <li>
            <div id='slideHP9'></div>
          </li>
          <li>
            <div id='slideHP10'></div>
          </li>
          <li>
            <div id='slideHP12'></div>
          </li>
        </ul>

      </div>
    </div>
  </div> 

  <div class="container">
    
     <!-- FOLD 1 -->
    <div id='fold1' class="row-fluid" >
        <div class="span12" id='sliderOnTop'>
          <div id='accrocheZone'><p><?php if($language->language == 'fr') echo '« Le littoral est fragile !<br/> Par vos observations, aidez nous à le protéger. »'; else echo '« The coastline is threatened!<br/> Help us to protect it through your observations. »'; ?></p><a href="<?php echo $base_url; ?>/liste-actions" alt='' id="<?php if($language->language == 'fr') echo 'btn_jeParticipe'; else echo 'btn_jeParticipe_en'; ?>"></a></div>
        </div>      
    </div>

  </div>
</div> <!-- fin firstFullContainerHP -->

<div class="container-fluid" id='secondFullContainerHP'>
   
   <div id='backgroundOfFold2'></div> 


  <div class="container" id='secondContainerHP'>
    <!-- FOLD 2 -->

    <div class="row-fluid" id='fold2'>

      <div id='imgPasOnFold2'></div>
      <div id='imgPhotoOnFold2'></div>
      <div id="<?php if($language->language == 'fr') echo 'fleche'; else echo 'fleche_en'; ?>"></div>
      
      <div class='span12' id='contentOfFold2'>
        

        <div class='span4'>
          <div id="<?php if($language->language == 'fr') echo 'fold2a'; else echo 'fold2a_en'?>" class='stepFold2'></div>
          <h3><span class='bigChar'>1</span><?php if($language->language == 'fr') echo 'Je me promène'; else echo 'Walk'; ?></h3>
          <p class='labelStepFold2'> <?php if($language->language == 'fr') echo 'Où que vous soyez sur le littoral, vous pouvez participer.'; else echo 'Wherever you are on the coastline, you can participate.'; ?> </p>
        </div>
        
        <div class='span4'>
          <div id='fold2b' class='stepFold2'></div>
          <h3><span class='bigChar'>2</span><?php if($language->language == 'fr') echo 'J’observe'; else echo 'Observe'; ?></h3>
          <p class='labelStepFold2'><?php if($language->language == 'fr') echo 'Arrêtez-vous pour photographier les espèces rencontrées.'; else echo 'Stop to photograph the species you encounter.'; ?> </p>
        </div>
        
        <div class='span4'>
          <div id='fold2c' class='stepFold2'></div>
          <h3><span class='bigChar'>3</span><?php if($language->language == 'fr') echo 'Je partage'; else echo 'Share'; ?></h3>
          <p class='labelStepFold2'><?php if($language->language == 'fr') echo 'Au retour, partagez photos et commentaires.'; else echo 'On your return, share your photos and comments.'; ?></p>
        </div>
        

        
      </div>    
    </div><!-- fin fold2 -->
  </div> <!-- FIN Container -->
  
</div> <!-- FIN Container-fluid -->

<div class="container-fluid" id="<?php if($language->language == 'fr') echo 'thirdFullContainerHP'; else echo 'thirdFullContainerHP_en'; ?>">
  <div class="container">
     <!-- FOLD 3 -->
    <div class="row-fluid" id='fold3'>
      
      <a href="<?php echo $base_url; ?>/carte-des-relais?field_facade_du_relais_value=manche" alt=''><div class='btnFold2OnMap' id='btnFold2OnMap1'></div></a>
      <a href="<?php echo $base_url; ?>/carte-des-relais?field_facade_du_relais_value=atlantique" alt=''><div class='btnFold2OnMap' id='btnFold2OnMap2'></div></a>
      <a href="<?php echo $base_url; ?>/carte-des-relais?field_facade_du_relais_value=med" alt=''><div class='btnFold2OnMap' id='btnFold2OnMap3'></div></a>

      <div class='span12' id='contentOfFold3'>
        
        <div class='span7' id='mapFold3'></div>

        <div class="span3">
          <h3><?php if($language->language == 'fr') echo 'Les relais locaux'; else echo 'Network of local partners'; ?></h3>
          <div id='firstSmallBlueLine'></div>
          <p><?php if($language->language == 'fr') echo 'BioLit, c’est un réseau de femmes et d’hommes, qui s’investissent dans des structures d’éducation à l’environnement, de gestion et de protection de la nature… Partenaires de BioLit, ils sont prêts à partager avec vous leurs connaissances du littoral et à vous y accompagner.'; else echo 'BioLit, is a network of men and women involved in environmental management and protection. BioLit partners hope to share their knowledge of the coastline with the local community and help you to record what you see on the shore.<br/><br/>Find a partner'; ?></p>   
          <div id='secondSmallBlueLine'></div>

          <a href="<?php echo $base_url; ?>/carte-des-relais" alt=''><div id="<?php if($language->language == 'fr') echo 'btn_trouverUneAsso'; else echo 'btn_trouverUneAsso_en'; ?>"></div></a>
        </div>

      </div>
    </div>

  </div> <!-- FIN Container -->
</div> <!-- FIN Container-fluid -->

<div class="container-fluid" id='<?php if($language->language == "fr") echo "fourthFullContainerHP"; else echo "fourthFullContainerHP_en"; ?>'>
  
  <div class='container'>
     <!-- FOLD 4 -->
    <div class="row-fluid" id='fold4'>
      <div class='span12' id='contentOfFold4'>

        <center>
        <div class="flexsliderHP">
        <ul class="slides">
        <li>
          <div class='span12'>
            <div id='prog5' class='prog'></div>
            <p class='labelProg'><?php if($language->language == 'fr') echo 'Algues brunes et bigorneaux'; else echo 'Brown algae and winkles'; ?></p>
            <a href="<?php echo $base_url.'/algues-brunes-et-bigorneaux'; ?>" class='lireArticle'><?php if($language->language == 'fr') echo 'En savoir +'; else echo 'Get More'; ?></a>
          </div>
        </li>
         <li>
          <div class='span12'>
            <div id='prog6' class='prog'></div>
            <p class='labelProg'><?php if($language->language == 'fr') echo 'À vos observations !'; else echo 'Start your observations!'; ?></p>
            <a href="<?php echo $base_url.'/a-vos-observations'; ?>" class='lireArticle'><?php if($language->language == 'fr') echo 'En savoir +'; else echo 'Get More'; ?></a>
          </div>
        </li>
        <li>
          <div class='span12'>
            <div id='prog2' class='prog'></div>
            <p class='labelProg'><?php if($language->language == 'fr') echo 'Les saisons de la Mer'; else echo 'Seasons of the sea'; ?> </p>
            <a href="<?php echo $base_url.'/saisons-de-la-mer'; ?>" class='lireArticle'><?php if($language->language == 'fr') echo 'En savoir +'; else echo 'Get More'; ?></a>
          </div>
        </li>
        <li>
          <div class='span12'>
            <div id='prog1' class='prog'></div>
            <p class='labelProg'><?php if($language->language == 'fr') echo 'Les nouveaux arrivants'; else echo 'The new arrivals'; ?> </p>
            <a href="<?php echo $base_url.'/les-nouveaux-arrivants'; ?>" class='lireArticle'><?php if($language->language == 'fr') echo 'En savoir +'; else echo 'Get More'; ?></a>
          </div>
        </li>
        <li>
          <div class='span12'>
            <div id='prog3' class='prog'></div>
            <p class='labelProg'><?php if($language->language == 'fr') echo 'Chlorophylle-mania'; else echo 'Chlorophyll-mania'; ?> </p>
            <a href="<?php echo $base_url.'/chlorophylle-mania'; ?>" class='lireArticle'><?php if($language->language == 'fr') echo 'En savoir +'; else echo 'Get More'; ?></a>
          </div>
        </li>
        <li>
          <div class='span12'>
            <div id='prog4' class='prog'></div>
            <p class='labelProg'><?php if($language->language == 'fr') echo 'Attention, menace ?'; else echo 'Look out, threat?'; ?> </p>
            <a href="<?php echo $base_url.'/attention-menace'; ?>" class='lireArticle'><?php if($language->language == 'fr') echo 'En savoir +'; else echo 'Get More'; ?></a>
          </div>
        </li> 
        </ul>
        </div> <!-- FIN FlexsliderHP -->
        </center>

      </div>
    </div>

  </div> <!-- FIN Container -->
</div> <!-- FIN Container-fluid -->


     <!-- FOLD 5 -->
<div class="container-fluid" id='fiftFullContainerHP'>


  <div class='container'>
  <div class="row" id='fold5'>
    <div class='container'>

    <div class='row-fluid'>
    <div class='span12'  id='contentOfFold5a'>
      <div class='span2 offset1' id='logoMinistere'></div>
      <div class='span2' id='logoHistoireNat'></div>
      <div class='span2' id='logoLogica'></div>
      <div class='span2' id='logoPartUnivRenne'></div>
      <div class='span2' id='logoPartAgenceAireMarine'></div>
      
    </div>
    </div>

    <div class='row-fluid'>
    <div class='span12' id='contentOfFold5b'>
      <div class='span2 offset1' id='logoPartAgenceEau'></div>
      <div class='span2' id='logoSINP'></div>
      <div class='span2' id='logoMarseille'></div>
      <div class='span2' id='logoFondationTotal'></div>
      <div class='span2' id='logoNatureDecouverte'></div>
      
    </div>
    </div>

    <div class="row-fluid">
      <div class="span12" id="contentOfFold5c">
        <div class='span2' id='logoCG13BdR'></div>
        <div class='span2' id='logoFondationFR'></div>
        <div class='span3' id='logoIntereg'></div>
        <div class='span3' id='logoPanache'></div>
        <div class='span2' id='logoStation'></div>
      </div>
    </div>
    
  </div>      
</div>      

</div> <!-- FIN Container-->
</div> <!-- FIN Container-fluid -->

<!-- <div id='clear'></div> -->
<footer class="footer hp">
 
  
  <?php print render($page['footer']); ?>

  
 

  <script>


// Can also be used with $(document).ready()
jQuery(window).load(function() {

  jQuery('.flexsliderOnTopHp').flexslider({
    animation: "fade",
    animationLoop: true,
    itemWidth: 100,
    minItems: 1,
    controlNav: false,
    directionNav : false,
    randomize : true,
    slideshowSpeed : 15000,
    maxItems: 1,
    move: 1,
    touch : false,
    itemMargin: 0,
    start: function(){
         jQuery('.flexImages').show(); 
         jQuery('body').removeClass('loading');
    }
  });


  jQuery('.flexsliderHP').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 100,
    minItems: 3,
    maxItems: 3,
    prevText: "",
    nextText: "",
    pauseOnHover: true,
    slideshow: false,
    move: 1,
    itemMargin: 0,
    start: function(){
         jQuery('.flexImages').show(); 
         jQuery('body').removeClass('loading');
    }
  });


});

  </script>


</footer>
