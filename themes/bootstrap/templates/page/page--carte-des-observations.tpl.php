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

<div class="main-container container listeObservations">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row-fluid">
      <section id='contentOflisteObservations' class="<?php print _bootstrap_content_span($columns); ?>">     
        
        <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
        <?php endif; ?>
        
        <div class='row-fluid' id='fold1inPageObservations'>
          <div class='span12'>           
            <?php print views_embed_view('carte_des_observations','page'); ?>
          </div>
        </div> 

        <div class='row-fluid'>
          <div class='span12'>

            <div class='row-fluid' id='contentDownOfObsPage'> <!-- colone generale-->
              <div class='span9' id='photosZone'> <!-- ligne generale-->
                <div class='filterOnIdentOrNotZone'>
                  
                  <select id="edit-type" name="type" class="form-select">
                    <option value="All" selected="selected">Toutes les observations</option>
                    <option value="programme_n1">Algues brunes &amp; Bigorneaux</option>
                    <option value="programme_obs_libre">À vos observations !</option>
                    <option value="programme_saisons">Les saisons de la Mer</option>
                    <option value="programme_new">Les nouveaux arrivants</option>
                    <option value="programme_flore">Chlorophylle-mania</option>
                    <option value="programme_dechet">Attention, menace ?</option>
                  </select>
                  
                  <div class='All'>Toutes les observations</div>
                  <div class='justIdentPlz'>Identifiées</div>
                  <div class='NotIdentPlz'>Non-identifiées</div>
                </div>
                <?php print views_embed_view('carte_des_observations','block_1'); ?>
               
              
              </div>
              <div class='span3'> <!-- ligne generale-->
              
              <div id='minipictureOfUserInObs'>
                <h3>Participants</h3>
                <?php print views_embed_view('carte_des_observations','block_2'); ?>
               
              </div>
              </div>
            </div>
        
          </div>
        </div>


      </section>

  </div>
</div>


<footer class="footer container">
  <?php print render($page['footer']); ?>


   <script>



jQuery(document).ready(function() {
  
  (function() {
    
    
    window.init = function() {

      //mes variables
      var currentEtatChoix = 0;    
      
      jQuery('.view-first').show();
      jQuery('.isIdent').show();


      var ecouteChangeProgramme = function() {
        
        //On écoute le choix du select (type de contenu)
        jQuery('section#contentOflisteObservations select').change( function(){

           sortMyPics( );  

        });

      }(); // fin ecouteChangeProgramme 

      /* //Méthode permettant de regarder si n'existe pas encore d'observation
       var checkIfHasPictures = function(){

         var visible = false;

         jQuery('.view-carte-des-observations .view-first').each( function (){

           if( jQuery(this).is(':visible') ){
             visible = true;
           }
        
         });
        
         jQuery('.view-carte-des-observations .view-first').text('pas d\'observation');
         console.log(visible);        

      };*/
      

      /*  Gestion bouton identife ou non
      *   Les != etat de choix utilisateurs espece:
      *
      * 0 = Tout
      * 1 = Identifie
      * 2 = Non-identifie
      */

      var majDesignOfButtonIdent = function (){

        //Clic sur Identifie
        jQuery('div.justIdentPlz, div.NotIdentPlz, div.All').click(function(e) {
          
          var currentSelector = jQuery(e.target).prop('class');
          
          jQuery(this).css('backgroundColor','#00c4dd');
          jQuery(this).css('borderRadius','2px');
          jQuery(this).css('border','none');
          jQuery(this).css('padding','3px 2px 7px 3px');
          jQuery(this).css('color','#fff');
          jQuery(this).css('lineHeight','24px');  

          if(currentSelector === 'justIdentPlz'){

            jQuery('.All, .NotIdentPlz').css('borderBottom','1px dashed rgb(91, 58, 0)');
            jQuery('.All, .NotIdentPlz').css('backgroundColor','transparent');
            jQuery('.All, .NotIdentPlz').css('color','#333333');
            jQuery('.All, .NotIdentPlz').css('padding','0');

            currentEtatChoix = 1;
            sortMyPics();

          }else if(currentSelector === 'NotIdentPlz'){

            jQuery('.All, .justIdentPlz').css('borderBottom','1px dashed rgb(91, 58, 0)');
            jQuery('.All, .justIdentPlz').css('backgroundColor','transparent');
            jQuery('.All, .justIdentPlz').css('color','#333333');
            jQuery('.All, .justIdentPlz').css('padding','0');
            
            currentEtatChoix = 2;
            sortMyPics();

          }else if(currentSelector === 'All'){

            jQuery('.justIdentPlz, .NotIdentPlz').css('borderBottom','1px dashed rgb(91, 58, 0)');
            jQuery('.justIdentPlz, .NotIdentPlz').css('backgroundColor','transparent');
            jQuery('.justIdentPlz, .NotIdentPlz').css('color','#333333');
            jQuery('.justIdentPlz, .NotIdentPlz').css('padding','0');
            
            currentEtatChoix = 0;
            sortMyPics();

          }
        
        

        }); // fin click
        
        
      }();//fin majDesignOfButtonIdent
      

      //Mise a jour de l'affichage des pictures en fonction du choix utilisateur
      var updateDisplay = function(currentChoixProgramme){
          var prog = currentChoixProgramme;


          if(prog == 'programme_n1') prog = 'n1';
          else if(prog == 'programme_obs_libre') prog = 'green';
          else if(prog == 'programme_saisons') prog = 'blue';
          else if(prog == 'programme_new') prog = 'pink';
          else if(prog == 'programme_flore') prog = 'flore';
          else if(prog == 'programme_dechet') prog = 'dechet';

          if(currentEtatChoix == 1){
            jQuery('.view-first').hide();
            jQuery('.mask.'+prog).parent('.view-first.isIdent').show();            
          }else if(currentEtatChoix == 2){
            jQuery('.view-first').hide();
            jQuery('.mask.'+prog).parent('.view-first').not(jQuery('.isIdent')).show();      
          }else if(currentEtatChoix == 0){
            jQuery('.view-first').hide();
            jQuery('.mask.'+prog).parent('.view-first').show();      
          }
    }



      //fonctioner pour trier les images en fonction du type de programme. BETTER EXPOSED FILTER FOIRE C DE LA MERDE
      var sortMyPics = function() {

        //maj de la selection par type
        var currentChoixProgramme = jQuery('section#contentOflisteObservations select').val();
      
        
        // console.log(currentEtatChoix);
        // console.log(currentChoixProgramme);
        
      
        if(currentChoixProgramme == 'All'){
          

          if(currentEtatChoix == 1){
            jQuery('.view-first').hide();
            jQuery('.view-first.isIdent').show();            
          }else if(currentEtatChoix == 2){
            jQuery('.view-first').hide();
            jQuery('.view-first').not(jQuery('.isIdent')).show( );
          }else if(currentEtatChoix == 0){
            jQuery('.view-first').show();
          }
           
        
        }else{

            updateDisplay(currentChoixProgramme);        

        }



      }; //fin sortMyPics





      var filtreUserPicture = function() {
        // Script permettant d'afficcher qu'une seul fois l'image de gens 
          var cpt = 0;
          var cpt2 = 0;
          var href_temp = new Array();

          //Parcour des images de gens
          jQuery('#minipictureOfUserInObs a').each(function() {
            
              //On met dans un tableau l'image
              href_temp[cpt] = jQuery(this).attr('href');
              
              //Si l'image courante existe plus d'une fois dans le tableau de valeurs on cache
              for(var i=0 ; i<href_temp.length; i++){

                if(href_temp[cpt] == href_temp[i]) cpt2++;

              }
              
              if(cpt2 > 1){jQuery(this).hide();}

              cpt2 = 0; // raz du compteur du nombre d'images
              cpt++;    //incrémentation du compteur du tableau d'images 
          
          });
      }(); // fin filtreUserPicture
            
    } // fin windows.init

  }()) // fin envirronement de dev
  init(); // true


}); 
</script>
</footer>
