<?php  global $base_path, $base_url,$user; ?>


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

<!-- <pre><?php //print_r($page);?></pre>  -->
<div class="main-container container showDataOfProgN65">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row-fluid">

      <section class="<?php print _bootstrap_content_span($columns); ?>">     
       
        <?php $form_id = $node->vid;  ?>


        <?php $tabOfurl = explode('/',$_SERVER['REQUEST_URI']); ?>       
        <?php $val =  $tabOfurl[count($tabOfurl) - 1]; ?>

        <!-- cas ou l'on vient des liens depuis le compte user -->
        <?php if($val == 'mes-observations'): ?>
          <?php $tabOfurl = explode('?',$_SERVER['REQUEST_URI']); ?>        
          <?php $tabOfurl = explode('/', $tabOfurl[0]); ?>
          <?php $val =  $tabOfurl[count($tabOfurl) - 1]; ?>
        <?php endif; ?>

        <?php if($val == 'edit'): ?>  
          <?php if (!empty($title)): ?>
            <h1 style='border-bottom: 1px solid #eeeeee;' class="page-header"><?php print 'Modifier Fiche d’observation : À vos observations !'; ?></h1>
          <?php endif; ?>
          <?php print $messages; ?>
         <!-- <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
          <?php endif; ?> -->
          <div class='actionOnForm'>
          <a href="<?php echo $base_url; ?>/node/<?php echo $form_id; ?>" alt=''><div class='btn-voirN1'>Voir</div></a>
          <!-- <a href="<?php echo $base_url; ?>/?q=node/<?php echo $form_id; ?>/edit" alt=''><div class='btn-modifierN1'>Modifier</div></a> -->
          </div>
          <?php if (!empty($page['help'])): ?>
            <div class="well"><?php print render($page['help']); ?></div>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>

        <?php elseif($val == 'delete'): ?>
            <?php if (!empty($title)): ?>
            <h1 class="page-header"><?php print 'Supprimer Fiche d’observation : À vos observations !'; ?></h1>
          <?php endif; ?>
          <?php print $messages; ?>
         <!-- <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
          <?php endif; ?> -->
          <?php if (!empty($page['help'])): ?>
            <div class="well"><?php print render($page['help']); ?></div>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
        <?php else: ?>
          
          <?php if ( $user->uid && $user->uid == $node->uid): ?><div id='persoSucces' class="alert alert-success">Grâce à vos observations, nous suivons l’évolution de la qualité des milieux littoraux.<br/><br/> Merci de votre collaboration !</div><?php endif; ?>
          
          <a href="<?php echo $base_url; ?>" alt=''>Accueil</a> > <a href="<?php echo $base_url; ?>/liste-actions" alt=''>Actions</a> > <a href="<?php echo $base_url; ?>/node/65" alt=''>À vos observations !</a> > Fiche d'observation : À vos observations !
             
          <?php if (!empty($title)): ?>
          <h1 id='titleWithIcon' class="page-header"><?php print $title; ?></h1>
          <?php endif; ?>
          <!--<?php print $messages; ?> 
         <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>-->
          <?php if (!empty($page['help'])): ?>
            <div class="well"><?php print render($page['help']); ?></div>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>


          <?php if($user->uid == 1) print render($page['content']); ?>
          <?php  $myCurrentUser = $user->roles; ?>
          <?php if(isset($myCurrentUser[3]) && $myCurrentUser[3] == 'Modérateur' ): ?> 
            <div class='actionOnForm'>
          <!-- <a href="<?php echo $base_url; ?>/?q=node/<?php echo $form_id; ?>" alt=''><div class='btn-voirN1'>Voir</div></a> -->
          <a href="<?php echo $base_url; ?>/node/<?php echo $form_id; ?>/edit" alt=''><div class='btn-modifierN1'>Modifier</div></a>
          </div>
          <?php endif; ?>
  
         

          <!-- MAJ VALIDATION IDENTIFICATION && CLEAR DU CACHE -->
          <?php if(isset($_POST['ValidThisIdent']) && $_POST['ValidThisIdent'] != ''): ?>
            <?php $query= db_update('field_data_field_com_isvalidate_libre')
                   ->fields(array( 'field_com_isvalidate_libre_value' => 1))
                   ->condition('entity_id', $_POST['ValidThisIdent'])
                   ->execute(); ?>
            

            <!-- On vide le cache -->
            <?php cache_clear_all('*','cache_field', TRUE); ?>  
                 
           <?php endif; ?>

          <?php if(isset($_POST['SupprValidThisIdent']) && $_POST['SupprValidThisIdent'] != ''): ?>
            <?php $query= db_update('field_data_field_com_isvalidate_libre')
                   ->fields(array( 'field_com_isvalidate_libre_value' => 0))
                   ->condition('entity_id', $_POST['SupprValidThisIdent'])
                   ->execute(); ?>
                   
             <!-- On vide le cache -->
             <?php cache_clear_all('*','cache_field', TRUE); ?>  
            
           <?php endif; ?> 
           <!-- FIN MAJ VALIDATION IDENTIFICATION && CLEAR DU CACHE -->

            
          <div id="viewAfficheDataFormObs">    
          <div class='container4InfoIdent'></div> 
          <?php echo views_embed_view('v_affiche_donnee_formulaire', 'block_1', $form_id); ?>   
          </div>   

          <div class="row-fluid" id='foldOfIdent'>
            <div class="span12">
              <h3>Identifications</h3>   
               <!-- Affichage des Identifictions -->
            <?php echo views_embed_view('v_affiche_comment', 'block_3', $form_id); ?> 
            </div>
          </div>
           


          <?php if ( $user->uid ): ?>
          <div class="row-fluid" id='containerOfFormIdent'>
            <div class="span12">
            <h3 class='btn2ShhowFormOfIdent'>Proposer une identification</h3>
            <?php $identification_view = drupal_get_form("comment_node_{$node->type}_form", (object) array('nid' => $node->nid)); ?> 
            <?php print drupal_render($identification_view); ?>
            </div>
          </div>
          <?php endif; ?> 
          

           <?php if ( $user->uid ): ?>
          <div class="row-fluid" id='containerOfFormCom'>
            <div class="span12">
            <h3>Ajouter un commentaire</h3>
            <?php $comment_view = drupal_get_form("comment_node_{$node->type}_form", (object) array('nid' => $node->nid)); ?> 
            <?php print drupal_render($comment_view); ?>
            </div>
          </div>
           <?php endif; ?> 

          
          <div class="row-fluid" id='foldOfCom'>
            <div class="span12">
            <!-- Affichage des commentaires -->
            <h3>Commentaires</h3>
            <?php echo views_embed_view('v_affiche_comment', 'block_2', $form_id); ?>   
            </div>
          </div>

          
          <!-- Si l'utilisateur n'est pas connecté -->
          <?php if(!$user->uid): ?>
          <br/>
          <div class="row-fluid">
            <div class="span12">
              <a class='btnLogin2IdentOrComment' href="<?php echo $base_url; ?>/user/login?&destination=node/<?php echo $form_id; ?>" alt='Connection'>Ajouter un commentaire ou proposer une identification</a> 
            </div>
          </div>                  
          <?php endif; ?>

        <?php endif; ?> 
      </section>


       
       

  </div>

</div>


<footer class="footer container">
  <?php print render($page['footer']); ?>
<script>  
jQuery( document ).ready(function() {

var firstLoad = true;

//fonction qui change les titres s'il n'y a pas de commentaires ou d'identifications
function majLabelIfNoCommentOrIdent(isIdent){

 
  if(jQuery('#foldOfIdent .view-id-v_affiche_comment').height() == '0'){
        jQuery('#foldOfIdent h3').text('0 identification');
  }else{
        if(isIdent){jQuery('#foldOfIdent h3').text('Identification validée');}
        else{ jQuery('#foldOfIdent h3').text('Proposition d\'identification'); }
  }
  if(jQuery('#foldOfCom .view-id-v_affiche_comment').height() == '0'){
        jQuery('#foldOfCom h3').text('0 commentaire');
  }else{
        jQuery('#foldOfCom h3').text('Commentaires');
  }

  jQuery('#foldOfIdent h3').show();
  jQuery('#foldOfCom h3').show();

}

//SlideShow
if (jQuery('#galleria img').length) {
    
   Galleria.loadTheme('../sites/all/themes/bootstrap/themes/classic/galleria.classic.min.js');
   //Galleria.run('#viewAfficheDataFormObs #galleria');
  Galleria.configure({
  imageCrop: true,

  transition: 'fade'
  });

   Galleria.run('#viewAfficheDataFormObs #galleria', {

  

    extend: function(options) {

        // Galleria.log(this) // the gallery instance   /* BUG AVC CRHOME */
        // Galleria.log(options) // the gallery options

        // listen to when an image is shown
        this.bind('image', function(e) {


            /*dedans*/
            var nameOfCurrentPic;

            jQuery('.galleria-images .galleria-image').each(function() {
            if (jQuery(this).css('opacity') == '1') {

            var urlOfCurrentPic = jQuery(this).children("img").attr('src');
            var tabOfSplitUrlOfCurrentPic = urlOfCurrentPic.split('/');
            nameOfCurrentPic = tabOfSplitUrlOfCurrentPic[tabOfSplitUrlOfCurrentPic.length - 1];
            var tabOfSplitUrlOfCurrentPic = nameOfCurrentPic.split('.');
            nameOfCurrentPic = tabOfSplitUrlOfCurrentPic[tabOfSplitUrlOfCurrentPic.length - 2];

            //Convert String -> MD5
            nameOfCurrentPic = jQuery.md5(nameOfCurrentPic);

            //Au chargement de la page on montre que les commentaires et identification de la photo courante
            jQuery('.'+nameOfCurrentPic).show("fast");

            //Au chargement de la page, on met le nom de la photo courante dans les champs caché des formulaires
            jQuery('#containerOfFormIdent .field-name-field-com-nom-photo-libre input').val(nameOfCurrentPic);
            jQuery('#containerOfFormCom .field-name-field-com-nom-photo-libre input').val(nameOfCurrentPic);

            // On stock dans une variable le nom commum du taxon identifie
            var nomOfTaxIdent = jQuery('.itsIdentifier').find('p#'+nameOfCurrentPic).attr('data-value-nom-commum');
            var nomScientifiqueOfTaxIdent = jQuery('.itsIdentifier').find('p#'+nameOfCurrentPic).attr('data-value-nom-scientifique');

            //S'il existe un nom d'espece on change le titre et on cache toutes les identifications
            if(nomOfTaxIdent != '' && nomOfTaxIdent != undefined) {    

            //on ajoute la div en sur-impression sur le slideshow affichant le nom commum et le nom scientifique    
            jQuery('.container4InfoIdent').html("<strong>"+nomOfTaxIdent+"</strong><br/><i>"+nomScientifiqueOfTaxIdent+"</i>").slideDown('fast');
            jQuery('div.view-v-affiche-comment.view-display-id-block_3 div.lineOfComId:not(.itsIdentifier) ').hide();
            jQuery('div#containerOfFormIdent').hide();

            majLabelIfNoCommentOrIdent(true);

            }else{

            jQuery('div#containerOfFormIdent').show();
            majLabelIfNoCommentOrIdent(false);
            }


            }   
            });

            //gestion slideshow arrow-left & Right
            jQuery('.galleria-image-nav-right, .galleria-image-nav-left').click(function() {

            //aller chercher la minature suivante si elle existe + trigger dessus
            var minatureActive = jQuery('.galleria-thumbnails-container .galleria-image.active');
            minatureActive.trigger("click");

            });

            //lors clic sur minature slideShow
            jQuery('.galleria-thumbnails-container .galleria-image').click(function() {

            var urlOfCurrentPic = jQuery(this).children("img").attr('src');
            var tabOfSplitUrlOfCurrentPic = urlOfCurrentPic.split('/');
            var nameOfCurrentPic = tabOfSplitUrlOfCurrentPic[tabOfSplitUrlOfCurrentPic.length - 1];
            var tabOfSplitUrlOfCurrentPic = nameOfCurrentPic.split('.');
            nameOfCurrentPic = tabOfSplitUrlOfCurrentPic[tabOfSplitUrlOfCurrentPic.length - 2];

            //Convert String -> MD5
            nameOfCurrentPic = jQuery.md5(nameOfCurrentPic);

            //Lors de clics dans le slideshow, on change la valeur du champs correspondant à la photo courante
            jQuery('#containerOfFormIdent .field-name-field-com-nom-photo-libre input').val(nameOfCurrentPic);
            jQuery('#containerOfFormCom .field-name-field-com-nom-photo-libre input').val(nameOfCurrentPic);

            // On stock dans une variable le nom commum du taxon identifie
            var nomOfTaxIdent = jQuery('.itsIdentifier').find('p#'+nameOfCurrentPic).attr('data-value-nom-commum');
            var nomScientifiqueOfTaxIdent = jQuery('.itsIdentifier').find('p#'+nameOfCurrentPic).attr('data-value-nom-scientifique');

            //On affiche les commentaires et identification de la photo courante
            jQuery('.'+nameOfCurrentPic).show("slow");

            //Cache les commentaires et identifications des autres photos
            jQuery(".lineOfComId:not(."+nameOfCurrentPic+")").hide('fast');

            //S'il existe un nom d'espece on change le titre et on cache toutes les identifications
            if(nomOfTaxIdent != '' && nomOfTaxIdent != undefined) {       
            //on ajoute la div en sur-impression sur le slideshow affichant le nom commum et le nom scientifique    
            jQuery('.container4InfoIdent').html("<strong>"+nomOfTaxIdent+"</strong><br/><i>"+nomScientifiqueOfTaxIdent+"</i>").slideDown('fast');
            jQuery('div.view-v-affiche-comment.view-display-id-block_3 div.lineOfComId:not(.itsIdentifier) ').hide();
            jQuery('div#containerOfFormIdent').hide();

            majLabelIfNoCommentOrIdent(true);

            }else{
            jQuery('.container4InfoIdent').slideUp('fast');
            jQuery('div#containerOfFormIdent').show();

            majLabelIfNoCommentOrIdent(false);
            }


            });

            //Récuperation et test de l'url pour savoir s'il on vient de la page obs pour afficher la bonne picture.
            var currentUrl = window.location.href.split('&');
            currentUrl = currentUrl[currentUrl.length - 1].split('=');

            //test si on vient d'un com ou d'une ident
            var urlIsCom = window.location.href.split('pic');
            urlIsCom = urlIsCom[urlIsCom.length - 1];


            if(urlIsCom != '' && urlIsCom != nameOfCurrentPic && urlIsCom[0] != '=' && firstLoad){ 

            //find une image avec cette url = /biolit-dev/sites/default/files/algues3_2.jpg
            jQuery(".galleria-thumbnails .galleria-image img").each(function() {

            var urlOfCurrentPic = jQuery(this).attr('src');
            var tabOfSplitUrlOfCurrentPic = urlOfCurrentPic.split('/');
            nameOfCurrentPic = tabOfSplitUrlOfCurrentPic[tabOfSplitUrlOfCurrentPic.length - 1];
            var tabOfSplitUrlOfCurrentPic = nameOfCurrentPic.split('.');
            nameOfCurrentPic = tabOfSplitUrlOfCurrentPic[tabOfSplitUrlOfCurrentPic.length - 2];

            //Convert String -> MD5
            nameOfCurrentPic = jQuery.md5(nameOfCurrentPic);

            if(nameOfCurrentPic == urlIsCom) {

            jQuery(this).parent().trigger( "click" );
            }

            });

            }

            //Si la photo de l'url est  !=  de la photo courante du diapo alors on trigger sur la bonne photo 
            if(currentUrl[1] != '' && currentUrl[1] != nameOfCurrentPic && firstLoad){ 

            //find une image avec cette url = /biolit-dev/sites/default/files/algues3_2.jpg
            jQuery(".galleria-thumbnails .galleria-image img").each(function() {

            var urlOfCurrentPic = jQuery(this).attr('src');
            var tabOfSplitUrlOfCurrentPic = urlOfCurrentPic.split('/');
            nameOfCurrentPic = tabOfSplitUrlOfCurrentPic[tabOfSplitUrlOfCurrentPic.length - 1];
            var tabOfSplitUrlOfCurrentPic = nameOfCurrentPic.split('.');
            nameOfCurrentPic = tabOfSplitUrlOfCurrentPic[tabOfSplitUrlOfCurrentPic.length - 2];

            //Convert String -> MD5
            nameOfCurrentPic = jQuery.md5(nameOfCurrentPic);

            if(nameOfCurrentPic == currentUrl[1]) {

            jQuery(this).parent().trigger( "click" );
            }

            });

            }
            firstLoad = false;
            /*dedans*/

            Galleria.log(e) // the event object may contain custom objects, in this case the main image
            Galleria.log(e.imageTarget) // the current image

            // lets make galleria open a lightbox when clicking the main image:
            jQuery(e.imageTarget).click(this.proxy(function() {
               this.openLightbox();
            }));
        });
    }
});
 }



/*Affichage gestion si Identifie*/
/*    
   Dupliquer le code pour Observation Libre
   tester quand form a moitier plein etc
   ameliorer le back-office pour moderateur biolit
 */

/*Commentaires*/

//On définit le type de commentaire (identification ou commentaire) dans des champs cachés
jQuery('#containerOfFormIdent .form-item-subject input').val('identification');
jQuery('#containerOfFormCom .form-item-subject input').val('commentaire');

//Animation Show / Hide du formulaire d'indentification
jQuery('div#containerOfFormIdent h3.btn2ShhowFormOfIdent').click(function() {

  jQuery('div#containerOfFormIdent form.comment-form').slideToggle( "slow" );

});

//Regles de validation de formulaire

//Lors de clic sur submit form commentaires
jQuery('#containerOfFormCom form').submit(function( event ) {

  if( jQuery('#containerOfFormCom div.field-name-comment-body textarea').val() == '' ) {
    
    //Annulation de comportement de base du bouton submit
    event.preventDefault();
    alert('Veuillez saisir toutes les informations');
  
  }
  
});
//Lors de clic sur submit form identification
jQuery('#containerOfFormIdent form').submit(function( event ) {

  if( jQuery('#containerOfFormIdent div.field-name-field-com-identification-libre input').val() == '' && jQuery('#containerOfFormIdent div.field-name-field-com-nom-scientifique-libre input').val() == '' && jQuery('#containerOfFormIdent div.field-name-field-com-lien-libre input').val() == '' ) {
    
    //Annulation de comportement de base du bouton submit
    event.preventDefault();
    alert('Veuillez saisir toutes les informations');
  
  }
  
});
});
/**/

 </script>

</footer>
