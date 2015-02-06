<?php

/**
 * @file
 * Default theme implementation to display a region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top class.
 * - $region: The name of the region variable as defined in the theme's .info file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see template_process()
 */
?>


<?php global $user, $language, $base_url;?>
<?php $lang = $language->language; ?>	

<?php $currentUrl = explode('/',$_SERVER['REQUEST_URI']); ?>
<?php $currentUrl = $currentUrl[count($currentUrl) - 1]; ?>

<?php $currentUrl2 =  explode('?', $currentUrl); ?>


<?php if ($content): ?>
  <div class="row-fluid" id='languageBlock'>  	
    <div class="<?php if($currentUrl == '' || $currentUrl == '?language=fr' || $currentUrl == '?language=en' || $currentUrl == 'liste-actions' || $currentUrl == 'liste-actions?language=en' || $currentUrl == 'liste-actions?language=fr' || $currentUrl2[0] == 'carte-des-relais') echo 'span12'; else echo 'span3 offset9'; ?>" title='traduire / translate'>
    	<?php print $content; ?>
    </div>
  </div>

	<!-- HAck pour forcer le bouton vers lang->fr lors non-deconnecté lang->en -->


	<?php //if(!$user->uid): ?>

		
		
		
			<!-- Hack pour avoir les bonnes classes fr/en active/session-active sur les boutons FR/EN -->
			<script type="text/javascript"> 
			// je dois mettre une classe custom pour detecter langlais sur la div et MAJ le CSS en conséquence
			 jQuery( document ).ready(function() {

			 	var lang = '<?php echo $lang ;?>';

			 	if(lang == 'fr'){

			 		jQuery('li.fr a').addClass( "session-active" );
					jQuery('li.en a').removeClass( "session-active" );
				
			 	}else{
				 	
				 	jQuery('li.fr a').removeClass( "session-active" );
					jQuery('li.en a').addClass( "session-active" );
				
			 	}
				
			// // Handler for .ready() called.
			//var link = jQuery('li.fr a').attr('href');
			//var tab = link.split('?language=en');
			//var newLink = tab[0];
			// //alert(tab[0]+'?language=en');
			// jQuery('li.fr a').attr('href', tab[0]+'?language=fr');
			
			// //jQuery('li.fr').html('<li class="fr last"><a href="/biolit-dev/les-nouveaux-arrivants?language=fr" class="language-link  session-active" lang="fr">Français</a></li>');
			 			
			

			 });
			</script>	
		

			

		<!-- Hack pour avoir les bonnes classes fr/en active/session-active sur les boutons FR/EN -->
		<script type="text/javascript"> 
		jQuery( document ).ready(function() {

				// on recupere la valeur courante des liens pour les modifiers
				linkEn = jQuery('li.en a').attr('href');
				tabEn = linkEn.split('?language=');

				linkFr = jQuery('li.fr a').attr('href');
				tabFr = linkFr.split('?language=');
			
				// test si il y a une redirecion
				var currentUrl = "<?php echo $_SERVER['REQUEST_URI'] ;?>";
				tabRedir = currentUrl.split('destination');
				
				// alert(currentUrl);
				  
				 var isRedirect = tabRedir[1];
				 // alert(isRedirect);

				if(isRedirect){

					// alert('pas toi');
					// on altere
					jQuery('li.en a').attr('href', tabEn[0]+'?language=en&destination=node/add/programme-new');
					jQuery('li.fr a').attr('href', tabFr[0]+'?language=fr&destination=node/add/programme-new');
				
				}else{
					
					// on altere
					var currentUrl = '<?php echo $currentUrl; ?>';
					var isComplexUrl = currentUrl.split('?');
					currentUrl = isComplexUrl[0];


					var currentUrl2 = '<?php echo $currentUrl2[count($currentUrl2) - 1]; ?>';
										
					

					if(currentUrl == 'carte-des-relais' && currentUrl2 != 'language=en' && currentUrl2 != 'language=fr' && currentUrl2 != 'carte-des-relais'){
											
						jQuery('li.en a').attr('href', decodeURIComponent(tabEn[0])+'&language=en');
						jQuery('li.fr a').attr('href', decodeURIComponent(tabFr[0])+'&language=fr');
				
					}else{
				
						jQuery('li.en a').attr('href', decodeURIComponent(tabEn[0])+'?language=en');
						jQuery('li.fr a').attr('href', decodeURIComponent(tabFr[0])+'?language=fr');
			
					}
				}
				

				
			
		});
		</script>

	<?php//endif; ?> <!-- fin si deconnecté -->


<?php endif; ?> <!-- fin if content -->
