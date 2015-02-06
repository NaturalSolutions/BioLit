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
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <?php render($page['content']['metatags']); ?>
</header>

<div class="main-container container biolitheqContainer">
  <div class="row-fluid">
 
    <section class="<?php print _bootstrap_content_span($columns); ?>" id='biolitheqSection'>  
      <h1 class="page-header"><?php print 'BioLithèque' ?></h1>  
  

    <div class="row-fluid">
      <div class="span4" id='foldOnRight4biolitek'>
        
      </div>
      <div class="span8">
  
      <div class="row-fluid">
        <div class="span12">  

        <div class="row-fluid">
          <div class="span12">
          <p class='firstLineOfTable'><b class='title'>Titre du document</b> <b class='seeDoc'>Voir</b> <b class='downloadDoc'>Télécharger</b></p>
          </div>
        </div> 

        <div class="row-fluid">
          <div class="span12">
            <!-- Affiche zip des fiches especes -->
            <?php print views_embed_view('v_biolitheque','block_2'); ?>
          </div>
        </div> 
    
        <!-- Affiche fiches especes -->
        <?php print views_embed_view('v_biolitheque','block_1'); ?>

        <div class="row-fluid">
          <div class="span12">
            <p class='moreSecondLine'><b class='moreButton2'>Documents BioLit</b></p>
          </div>
        </div>


        <div class='biolitDocBlock'>
          <div class="row-fluid">
          <div class="span12">
            <p class='secondeLinesOfTable'> <span class='title'>Charte d’utilisation du site web biolit.fr</span> <a class='seeDoc' href="sites/all/themes/bootstrap/images/charte.pdf"></a> <a class='downloadDoc' download="Charte d’utilisation du site web biolit.fr" href="sites/all/themes/bootstrap/images/charte.pdf"></a></p>
          </div>
          </div> 

          <div class="row-fluid">
          <div class="span12">
            <p class='secondeLinesOfTable'> <span class='title'>Fiches d’identification espèces Atlantique, Manche et Mer-du-Nord</span> <a class='seeDoc' href="sites/all/themes/bootstrap/images/identification.pdf"></a> <a class='downloadDoc' download="Fiches d’identification espèces Atlantique, Manche et Mer-du-Nord" href="sites/all/themes/bootstrap/images/identification.pdf"></a></p>
          </div>
          </div> 
        </div>

        </div>
      </div>

      </div> <!-- fin bloc de droite -->
  </div>




    </section>

  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>

  
  <script>
  
  jQuery( document ).ready(function() {
  // Handler for .ready() called.

      var etatFicheEspece = 0;
      var etatDocsBiolit = 0;

      jQuery('.moreButton').click( function(e){
      
      if(etatFicheEspece == 0){
      jQuery(this).css("background","url('sites/all/themes/bootstrap/images/icon_lessDoc.png') no-repeat 0% 50%");
      jQuery(this).css("backgroundSize","20%");
      jQuery('.view-display-id-block_1').slideDown(); 
      etatFicheEspece = 1
      }else if(etatFicheEspece == 1){
      jQuery(this).css("background","url('sites/all/themes/bootstrap/images/icon_moreDoc.png') no-repeat 0% 50%");
      jQuery(this).css("backgroundSize","20%");
      jQuery('.view-display-id-block_1').slideUp(); 
      etatFicheEspece = 0;
      }
      
      });

      jQuery('.moreButton2').click( function(e){
      
      if(etatDocsBiolit == 0){
      jQuery(this).css("background","url('sites/all/themes/bootstrap/images/icon_lessDoc.png') no-repeat 0% 50%");
      jQuery(this).css("backgroundSize","20%");
      jQuery('.biolitDocBlock').slideDown(); 
      etatDocsBiolit = 1
      }else if(etatDocsBiolit == 1){
      jQuery(this).css("background","url('sites/all/themes/bootstrap/images/icon_moreDoc.png') no-repeat 0% 50%");
      jQuery(this).css("backgroundSize","20%");
      jQuery('.biolitDocBlock').slideUp(); 
      etatDocsBiolit = 0;
      }
      
      });

   
  });
  
  </script>
</footer>
