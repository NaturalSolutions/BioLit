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
<?php global $user, $language ?>
<div class="main-container container" id="userConnexion">

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

    <section class="<?php print _bootstrap_content_span($columns); ?>" id='containerOfUserProfile'>  
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
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
      <?php $tabOfurl = explode('/',$_SERVER['REQUEST_URI']); ?>       
      <?php $val =  $tabOfurl[count($tabOfurl) - 1]; ?>
     
      


      <?php if($user->uid): //si connecté ?>
      <?php  $myCurrentUser = $user->roles; ?>

          <!-- viens pour ces actions : -->          
        <?php 
          
          //contient soit le numero de node soit ?language=en
          $is_english = explode('?', $val);
          
          // echo $is_english[ count($is_english) - 2];
          // echo '<br/>'.$user->uid;
          // echo '<br/>'.$val;
           //echo '<br/>'.$is_english[ count($is_english) - 2];

          // (FIXME) Modif à la va-vite dans l'urgence de l'avant livraison, à referaire en respectant les principes de Drupal (voir https://drupal.org/node/350634 et d'autres surement)
          if(substr($val, 0, 4) == 'edit' || $val == 'identification' || $val == 'contact' || $val == 'commentaires' || $val == 'password' || $is_english[ count($is_english) - 2] == 'password'): ?>  
          
          <?php print render($page['content']); ?>
        
        <?php elseif($val == 'user' || $val == $user->uid || /*$val == $is_english[ count($is_english) - 1] ||*/ $user->uid == $is_english[ count($is_english) - 2]): ?>
        <!-- si consultation son propre profile -->
          
          <div class="row-fluid">
            <div class="span2">
              <?php print views_embed_view('v_info_user','block', $user->uid); ?>
            </div>
            
            <!-- Si on est un moderateur -->
            <?php if(isset($myCurrentUser[3]) && $myCurrentUser[3] == 'Modérateur' ): ?> 
            <div class="span10">          
              <h3>Les dernières observations</h3>
              <?php print views_embed_view('v_user_mes_obs','block'); ?>
            </div>
            <?php else: ?> 
            <!-- On est juste un user connecté -->
            <div class="span10">          

              <h3><?php if($language->language == 'fr') echo 'Mes dernières observations'; else echo 'My last observations'; ?></h3>
              
              <?php print views_embed_view('v_user_mes_obs','block', $user->uid); ?>
            </div>
            <?php endif; ?>
          </div>

        <?php else: ?>
        <!-- On ne vient consulter un autre profile -->

          <div class="row-fluid">
            <div class="span2">
              <?php print views_embed_view('v_info_user','block', $val); ?>
            </div>

            <div class="span10">          
              <h3><?php if($language->language == 'fr') echo 'Ses dernières observations'; else echo 'Last observations'; ?></h3>
              <?php print views_embed_view('v_user_mes_obs','block', $val); ?>
            </div>
          </div>

        <script>
          jQuery('#containerOfUserProfile ul.nav-tabs li a').each(function() {
            if(jQuery(this).text() == 'Les identifications' || jQuery(this).text() == 'Les commentaires') jQuery(this).hide();
          });
        </script>
        <?php endif; ?> 
            
      <?php else: //si deconnecté ?>
  
        <?php if(is_numeric($val) && ( $tabOfurl[count($tabOfurl) - 2] == 'login?&destination=node')) $val = 'user'; ?>        

        <?php $is_en = explode('?language=', $val); ?>
        <!-- Si un langage est souhaité -->
        <?php if(count($is_en) > 1): ?> 
          <?php $val = explode('?language=', $val) ; ?>
          <?php $val = $val[count($val) - 2]; ?>
          
        <?php endif; ?>
         
        
        
        <?php if($val == 'edit' || $val == 'login' || $val == 'mes-observations' || $val == 'password' || $val == 'contact' || $val == 'user' || $val == '?q=user' || $val == 'register' || $val == '?q=register' || $val == 'programme-new' || $val == 'programme-dechet' || $val == 'programme-flore' || $val == 'programme-obs-libre' || $val == 'programme-n1' || $val == 'programme-saisons'): ?>
          <?php print render($page['content']); ?>
        <?php 
          // (FIXME) Modif à la va-vite dans l'urgence de l'avant livraison, à referaire en respectant les principes de Drupal (voir https://drupal.org/node/350634 et d'autres surement)
          elseif ((count($tabOfurl) > 4) && ($tabOfurl[count($tabOfurl) - 4] == 'reset')): ?>
          <?php print render($page['content']); ?>
        <?php else: ?>
          
          <div class="row-fluid">
            <div class="span2">
              
              <?php print views_embed_view('v_info_user','block', $val); ?>
            </div>

            <div class="span10">
              <h3><?php if($language->language == 'fr') echo 'Ses dernières observations'; else echo 'Last observations'; ?></h3>
              <?php print views_embed_view('v_user_mes_obs','block', $val); ?>
            </div>
          </div>

        <?php endif; ?>

        
      <?php endif;?>

      
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
<footer class="footer container">
<script>

jQuery(document).ready(function() {

  var language = '<?php echo $language->language; ?>' ; 
  

  //Style Onglet les identifications pour modérateur biolit
  jQuery("section#containerOfUserProfile div.view-v-mes-observations table caption").each(function() {
    
    if( jQuery(this).text() == 'Identification non-validée' ) jQuery(this).css('background','url("../../sites/all/themes/bootstrap/images/cancel.png") no-repeat 99% 50% #00C4DD'); 
    if( jQuery(this).text() == 'Identification non-validée' ) jQuery(this).css('background-size','6%'); 

    if( jQuery(this).text() == 'Identification validée' ) jQuery(this).css('background','url("../../sites/all/themes/bootstrap/images/check.png") no-repeat 99% 50% #00C4DD'); 
    if( jQuery(this).text() == 'Identification validée' ) jQuery(this).css('background-size','6%'); 
    
    
  
  });
  

  //Empecher le copier/coller de la validation de l'email lors inscription
  if(jQuery("#edit-conf-mail").length){
    window.onload = function() {
      var myInput = document.getElementById('edit-conf-mail');
      myInput.onpaste = function(e) {
         e.preventDefault();
      }
    }
  }

  if(language == 'en'){
    
    //traduction de qq labels en En
    jQuery('#edit-field-is-structure label').text('Your are *');
    jQuery('#edit-field-is-structure #edit-field-is-structure-und').html('<div id="edit-field-is-structure-und" class="form-radios"><div class="form-type-radio form-item-field-is-structure-und form-item"><label class="option radio" for="edit-field-is-structure-und-0"> <input id="edit-field-is-structure-und-0" name="field_is_structure[und]" value="0" checked="checked" class="form-radio" type="radio">A physical person</label></div><div class="form-type-radio form-item-field-is-structure-und form-item"><label class="option radio" for="edit-field-is-structure-und-1"> <input id="edit-field-is-structure-und-1" name="field_is_structure[und]" value="1" class="form-radio" type="radio">An institution</label></div></div>');
    
    jQuery('div#edit-field-prenom label').html('<label for="edit-field-prenom-und-0-value" class="control-label">First name<span class="form-required" title="This field is required.">*</span></label>');
    jQuery('div#edit-field-nom label').html('<label for="edit-field-nom-und-0-value" class="control-label">Last name<span class="form-required" title="This field is required.">*</span></label>');
    jQuery('div#edit-account div.form-item-mail p.help-block').text('A valid email adress. The website will send emails at your address. The email adress is not public and will be used only for the demand of new password or for some kinds of certain notifications.');
    jQuery('div#edit-account div.form-item-name p.help-block').text('Spaces can be used. Punctuation is not used (except dot and hyphens).');
    jQuery('label[for="edit-field-user-keep-in-touch-und"]').text('keep me in touch');
    jQuery('label[for="edit-field-biographie-und-0-value"]').text('Bio');
    jQuery('textarea#edit-field-biographie-und-0-value').text('Hello');
    jQuery('.alert-block.alert-error ul li').each(function(){
      if(jQuery(this).text() == 'Prénom field is required.') jQuery(this).text('First name field is required.');
      if(jQuery(this).text() == 'Nom field is required.') jQuery(this).text('Last name field is required.');
    });
    jQuery('label[for="edit-field-user-keep-in-touch-und-oui"]').html('<input type="checkbox" id="edit-field-user-keep-in-touch-und-oui" name="field_user_keep_in_touch[und][oui]" value="oui" class="form-checkbox"></input>Yes');
  }


  //Comportement Je suis une structure ou non
  var prenom = jQuery( "#edit-field-prenom input" ).val();
  var nom = jQuery( "#edit-field-nom input" ).val();
  var choice = jQuery( "#edit-field-is-structure input[checked]" ).val();


  if(choice == 1){
    jQuery( "#edit-field-prenom" ).hide();
    jQuery( "#edit-field-nom" ).hide();
    if(language == 'en') jQuery( "#edit-account .form-item-name label" ).text('Name of the structure *');
    else jQuery( "#edit-account .form-item-name label" ).text('Nom de la structure *');
  }
  
  jQuery( "#edit-field-is-structure input" ).change( function (e){

    choice =  jQuery(this).val();

    //Personne physique
    if(choice == 0){

      if(language == 'en') jQuery( "#edit-account .form-item-name label" ).text("Name of user *");
      else jQuery( "#edit-account .form-item-name label" ).text("Nom d'utilisateur *");

      jQuery( "#edit-field-prenom input" ).val(prenom);
      jQuery( "#edit-field-nom input" ).val(nom);

      jQuery( "#edit-field-prenom" ).slideDown();
      jQuery( "#edit-field-nom" ).slideDown();

    //Structure
    }else if(choice == 1){

      jQuery( "#edit-field-prenom" ).slideUp("slow", function() {
        if(language == 'en'){
          jQuery( "#edit-account .form-item-name label" ).text('Name of the structure *');
          jQuery( "#edit-field-prenom input" ).val('Structure');
        }else{
          jQuery( "#edit-account .form-item-name label" ).text('Nom de la structure *');
          jQuery( "#edit-field-prenom input" ).val('Structure');
        }
      });
  
      jQuery( "#edit-field-nom" ).slideUp("slow", function() {
        jQuery( "#edit-field-nom input" ).val('Structure');
      });

    }
    
  });

});

</script>
  <?php print render($page['footer']); ?>
</footer>