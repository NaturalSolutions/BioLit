<?php
/**
 * @file
 * theme implementation to display a region footer
 * variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through CSS
 * - $region: The name of the region variable as defined in the theme's .info file.
 * - $classes_array: Array of html class attribute values. It is flattened into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 */
?>



      <?php  global $base_path, $base_url, $language; ?>
    <div class='container containerFooter'>

  	<div class='row-fluid' id='foldFooter'>
      	<div class="span12" id='contentOfFooter'>

      		<div class='span4 aLittleOnBot'>
      			<p class='titleOfRowInFooter'><?php if($language->language === 'fr') echo 'A propos de BioLit'; else echo 'About BioLit'; ?> </p>
            <p>
            <!-- <a href='' alt='le programme BioLit' title='le programme BioLit'>Le programme BioLit</a><br/> -->
            <?php if($language->language === 'fr'): ?> 
              <a href='<?php echo $base_url; ?>/l-observatoire-biolit' alt='L’observatoire BioLit' title='L’observatoire BioLit'>L’observatoire BioLit</a><br/>
              <a href='<?php echo $base_url; ?>/les-partenaires' alt='Les partenaires' title='Les partenaires'>Les partenaires</a><br/>
              <a href='<?php echo $base_url; ?>/vos-donnees-d-observation' alt="Les données d'observation" title="Vos données d'observation">Vos données d'observation</a><br/>
              <a href='<?php echo $base_url; ?>/resultats' alt="Les résultats du programme" title="Les résultats du programme">Résultats</a><br/>
              <a href='<?php echo $base_url; ?>/planete-mer' alt='Planète Mer' title='Planète Mer'>Planète Mer</a><br/>
              <a href='<?php echo $base_url; ?>/programmes-et-structures-amis' alt='Programmes et structures amis' title='Programmes et structures amis'>Les structures amies</a><br/>
              <a href='<?php echo $base_url; ?>/biolitheque' alt='BioLithèque' title='BioLithèque'>BioLithèque</a><br/>
              <a href='http://planetemer.org/Planete-Mer-PressRoom71.php' alt='Revue de presse' title='Revue de presse'>Revue de presse</a><br/>
              <a href='<?php echo $base_url; ?>/contact' alt='contact' title='contact'>Contact</a><br/>
				    <?php else : ?>
              <a href='<?php echo $base_url; ?>/l-observatoire-biolit?language=en' alt='The BioLit observatory ' title='The BioLit observatory '>The BioLit observatory </a><br/>
              <a href='<?php echo $base_url; ?>/les-partenaires?language=en' alt='Partners' title='Partners'>Partners</a><br/>
              <a href='<?php echo $base_url; ?>/vos-donnees-d-observation?language=en' alt="Your observation data" title="Your observation data">Your observation data</a><br/>
              <a href='<?php echo $base_url; ?>/resultats?language=en' alt="Results" title="Results">Results</a><br/>
              <a href='<?php echo $base_url; ?>/planete-mer?language=en' alt='Planète Mer' title='Planète Mer'>Planète Mer</a><br/>
              <a href='<?php echo $base_url; ?>/programmes-et-structures-amis?language=en' alt='Linked programs and agencies' title='Linked programs and agencies'>Linked programs and agencies </a><br/>
              <a href='<?php echo $base_url; ?>/biolitheque?language=en' alt='BioLithèque' title='BioLithèque'>BioLithèque</a><br/>
              <a href='http://planetemer.org/Planete-Mer-PressRoom71.php' alt='press review' title='press review'>Press review</a><br/>
              <a href='<?php echo $base_url; ?>/contact?language=en' alt='contact' title='contact'>Contact</a><br/>
            <?php endif; ?>
            </p>
			    </div>
      		
          <div class='span4'>
      			<p class='titleOfRowInFooter'><?php if($language->language === 'fr') echo 'Les actions'; else echo 'Actions'; ?></p>
            <p>
            <a href="<?php echo $base_url; ?>/a-vos-observations" alt='A vos observation !' title='A vos observation !'><?php if($language->language == 'fr') echo 'À vos observations !'; else echo 'Start your observations!'; ?></a><br/>
            <a href="<?php echo $base_url; ?>/algues-brunes-et-bigorneaux" alt='Algues brunes et bigorneaux' title='Algues brunes et bigorneaux'><?php if($language->language == 'fr') echo 'Algues brunes et bigorneaux'; else echo 'Brown algae and winkles'; ?></a><br/>
            <a href="<?php echo $base_url; ?>/saisons-de-la-mer" alt='Saisons de la Mer' title='Saisons de la Mer'><?php if($language->language == 'fr') echo 'Les saisons de la Mer'; else echo 'Seasons of the sea'; ?></a><br/>
            
            
            <?php if($language->language === 'en'): ?> 
              <a href="<?php echo $base_url; ?>/the-new-arrivals?language=en" alt='The new arrivals' title='The new arrivals'>The new arrivals</a><br/>
            <?php else : ?>
              <a href="<?php echo $base_url; ?>/les-nouveaux-arrivants?language=fr" alt='Les nouveaux arrivants' title='Les nouveaux arrivants'>Les nouveaux arrivants</a><br/>
            <?php endif; ?>

            <a href="<?php echo $base_url; ?>/chlorophylle-mania" alt='Chlorophylle-mania' title='Chlorophylle-mania'><?php if($language->language == 'fr') echo 'Chlorophylle-mania'; else echo 'Chlorophyll-mania'; ?></a><br/>
            <a href="<?php echo $base_url; ?>/attention-menace" alt='Attention, menace ?' title='Attention, menace ?'><?php if($language->language == 'fr') echo 'Attention, menace ?'; else echo 'Look out, threat?'; ?></a><br/>            
            </p>
			    </div>
      		
          <?php if($language->language == 'fr'): ?>
    
            <div class='span4 aLittleOnBot'>
            <p class='titleOfRowInFooter'>En savoir plus</p>
            <p>
            <a href='<?php echo $base_url; ?>/le-littoral?language=fr' alt='Le littoral' title='Le littoral'>Le littoral</a><br/>
            <a href='<?php echo $base_url; ?>/les-marees?language=fr' alt='Les marées' title='Les marées'>Les marées</a><br/>
            <a href='<?php echo $base_url; ?>/les-habitats?language=fr' alt='Les habitats' title='Les habitats'>Les habitats</a><br/>
            <a href='<?php echo $base_url; ?>/la-laisse-de-mer?language=fr' alt='La Laisse de mer' title='La Laisse de mer'>La Laisse de mer</a><br/>
            <a href='<?php echo $base_url; ?>/menaces?language=fr' alt='Des menaces pour la biodiversité du littoral' title='Des menaces pour la biodiversité du littoral'>Des menaces pour la biodiversité du littoral </a><br/>
            <a href='<?php echo $base_url; ?>/espece-non-indigene?language=fr' alt='Les espèce non-indigène' title='Les espèce non-indigène'>Les espèces non-indigènes</a><br/>
            </p>
            </div>

          <?php else: ?>
          
            <div class='span4 aLittleOnBot'>
            <p class='titleOfRowInFooter'>More informations</p>
            <p>
            <a href='<?php echo $base_url; ?>/le-littoral?language=en' alt='The coastline' title='The coastline'>The coastline</a><br/>
            <a href='<?php echo $base_url; ?>/les-marees?language=en' alt='The tides' title='The tides'>The tides</a><br/>
            <a href='<?php echo $base_url; ?>/les-habitats?language=en' alt='Habitats' title='Habitats'>Habitats</a><br/>
            <a href='<?php echo $base_url; ?>/la-laisse-de-mer?language=en' alt='The foreshore' title='The foreshore'>The foreshore</a><br/>
            <a href='<?php echo $base_url; ?>/menaces?language=en' alt='Des menaces pour la biodiversité du littoral' title='Des menaces pour la biodiversité du littoral'>Threats to coastline biodiversity</a><br/>
            <a href='<?php echo $base_url; ?>/espece-non-indigene?language=en' alt='Les espèce non-indigène' title='Les espèce non-indigène'>Non-native species</a><br/>
            </p>
            </div>

          <?php endif; ?>
          

    	</div>
    </div>

    <div class='row-fluid' id='lineOfButtonInFooter'>
    	<div class='span12' id='contentOfLine2Footer'>
    		<div class="span4">
          <a href='http://www.planetemer.org/' alt='Planète Mer' target='_blank' title='Planète Mer'><div id='logoPlaneteMer'></div></a>
        </div>
        <div class="span4" id='zoneJeParticipeBtn'>
          <a id="<?php if($language->language == 'fr') echo 'btn_jeParticipeInFooter'; else echo 'btn_jeParticipeInFooter_en'; ?>" href="<?php echo $base_url; ?>/liste-actions" alt=''></a>
    			<!-- <a id='btnJeParticipeOnFooter' href="<?php echo $base_url; ?>/?q=liste-actions" alt=''>JE PARTICIPE</a> -->
    		</div>
    		<div class='span4'>
    			<?php if($language->language == 'fr'): ?>
          
          <a id='btnJeFaisUnDonOnFooter' href='http://www.planetemer.org/Planete-Mer-don-etape-1.php' target='_blank' alt=''>FAIRE UN DON</a>
    		  
          <?php else: ?>
  
          <a id='btnJeFaisUnDonOnFooter' href='http://www.planetemer.org/Planete-Mer-don-etape-1.php' target='_blank' alt=''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DONATE</a>
          
          <?php endif; ?>
        </div>
    	</div>
    </div>





    </div>

    <div class="container-fluid">
      
         <div class="row-fluid" id='lineOfCredit'>
      <div class="span12">
        
        <?php if($language->language == 'fr'): ?>
         <a href="<?php echo $base_url; ?>/credits-et-mentions-legales" alt="" title=''>Crédits & Mentions légales</a>
        <?php else: ?>
          <a href="<?php echo $base_url; ?>/credits-et-mentions-legales?language=en" alt="" title=''>Credits & Legal notices </a>
        <?php endif; ?>
     
      </div>
    </div>


    </div>


<?php 
    // Hack pour avoir le login dans la bonne langue 
    $myPath = drupal_get_path_alias(current_path());
    
    if($language->language === 'en' &&  $myPath === 'the-new-arrivals'){
      
      ?>
      <script type="text/javascript"> 
              
        var linkToLogin = jQuery('a#connexion').attr('href');
        var linkToLogin = linkToLogin + '?language=en';

        var linkToRegister = jQuery('a#inscription').attr('href');
        var linkToRegister = linkToRegister + '?language=en';

        jQuery('a#connexion').attr('href', linkToLogin);
        jQuery('a#inscription').attr('href', linkToRegister);
      
      </script>
      <?php
    }

?>