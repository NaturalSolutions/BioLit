
<?php  global $base_path, $base_url, $language; ?>

<?php if($language->language == 'en'): ?>
	<?php $en = true; ?>
<?php else: ?>
	<?php $en = false; ?>
<?php endif; ?>

<div id='breadcrumPersoN7'>
	<?php if($en): ?> <a href="<?php echo $base_url; ?>" alt=''>Home</a> > <a href="<?php echo $base_url; ?>/liste-actions" alt=''>Actions</a> > <a href="<?php echo $base_url; ?>/the-new-arrivals?language=en" alt='The new arrivals'>The new arrivals</a> > Write data
	<?php else : ?> <a href="<?php echo $base_url; ?>" alt=''>Accueil</a> > <a href="<?php echo $base_url; ?>/liste-actions" alt=''>Actions</a> > <a href="<?php echo $base_url; ?>/les-nouveaux-arrivants?language=fr" alt='The new arrivals'>Les nouveaux arrivants</a> > Saisie des données
	<?php endif; ?>
</div>


<div class='container contentOfEditFormN7'>

	<div class='row-fluid' id='fold1InEditFormN7'>
		<div class='span12'>			
			<?php print drupal_render($form['field_date_observation_new']); ?>
			<?php print drupal_render($form['field_heure_debut_new']); ?>
			<?php print drupal_render($form['field_heure_fin_new']); ?>
		</div>
	</div>

	<br/>

	<div class='row-fluid'>
		
		<div class='span4' id='leftColOnFold2OfEditFormN7'>
			<div class='row-fluid'>			
			<div class='span12'>
			<legend id='fieldPointRepere'><span class="fieldset-legend"><?php if($en) echo 'Name of the site'; else echo 'Site d\'observation'; ?></span></legend>
			<?php print drupal_render($form['field_zone_observation_new']); ?>
			</div>
			</div>

			<div class='row-fluid'>	
			<div class='span12'>
			<?php print drupal_render($form['field_point_de_repere_new']); ?>
			</div>
			</div>

			<div class='row-fluid'>	
			<div class='span12' id='fieldLocalistaion'>
			<div id='traitBlanc'></div>
			<label class='control-label'><?php if($en) echo 'Locate your site *'; else 'Localisation du site *'; ?></label>
			<!-- <legend>Localisation du site *</legend>-->
			<p id='normal'><?php if($en) echo 'Please, use the zoom to pinpoint your site. It’s important to be very precise for the location.'; else echo 'Veuillez positionner le pointeur sur la carte ou renseigner les coordonnées géographiques en cliquant sur le "+" en bas à droite de la carte'; ?></p>

			<!-- <i><p id='small'>Après avoir séléctionné l'outil "crayon", déplacez-vous sur la carte en restant appuyé sur le bouton gauche de la souris.<br/>Zoomez sur la carte en utilisant le (+). Soyez le plus précis possible dans la localisation en zoomant le plus possible<br/>Positionnez le pointeur sur le site d’observation et cliquez pour valider votre position exacte. Recommencez si vous vous êtes trompés.</p></i>			</div>-->
			<i><p id='small'><?php if($en) echo ''; else echo 'Positionnez le pointeur sur le site d’observation et utiliser le zoom pour plus de précision.'; ?>  </p></i></div>
			</div>
		</div>

		<div class='span8'>
			<?php print drupal_render($form['field_localisations_new']); ?>
		</div>

	</div>

	<div id='clickme2add' title='Afficher les coordonnées'></div>
	<div id='clickme2reduce' title='Cacher les coordonnées'></div>

	<div class='row-fluid' id='foldCoord'>	
	<div class='span8 offset4' id='fieldCoord'>
		<?php print drupal_render($form['field_coordonnees_new']); ?>
		<div class='btnMajMap' title='Afficher les coordonnées sur la carte'></div>
	</div>
	</div>


<div class='row-fluid' id='mesPhotos'>
	<div class='span12'>
	<legend id='titleOfMyPictureZone'><?php if($en) echo 'Pictures'; else echo 'Photos'; ?></legend>
	<div class='row-fluid' id='foldOfPhotoSiteEditFormN7'>
		<div class='span12'>
		<p class='labelOfPicturesEditForm'><?php if($en) echo 'One picture  of the seascape or landscape *'; else echo 'Une photo générale du paysage littoral *'; ?></p>
		<?php print drupal_render($form['field_photo_lieu_new']); ?>
		</div>
	</div>

	<div class='row-fluid' id='foldOfPhotoEspeceEditFormN7'>
		<div class='span12'>
		<p class='labelOfPicturesEditForm'><?php if($en) echo 'Pictures of the suspected non native species'; else echo 'Photos des espèces rencontrées lors de votre sortie *'; ?></p>
		<?php print drupal_render($form['field_photo_especes_new']); ?>
		</div>
	</div>
	</div>
</div>

	<div class='row-fluid' id='foldOfNoteEditFormN7'>
		<div class='span8'>
		<?php print drupal_render($form['field_note_new']); ?>
		</div>

		<div class='span4'>
			<a class='inline' href="#inline_content"><?php print drupal_render($form['actions']); ?></a>
			<?php print drupal_render($form['additional_settings']); ?>
			<?php print drupal_render_children($form); ?>
		</div>
	</div>

	<div class='row-fluid' id='lastSentence'>
		<div class="span12"><p><?php if($en) echo '(*) Required to validate your observations'; else echo 'Les champs obligatoires sont signalés par un astérisque (*)'; ?></p></div>
	</div>

	<div style='display:none'>
		<div id="inline_content">
			<div class="row-fluid">
			<div class="span12">
				<h4><?php if($en) echo 'Are you sure ?'; else echo 'Etes vous sûr que vos informations sont correctes ?'; ?></h4>
				<div class="row-fluid">
					<div class="span6"> <div id='yesBtn'></div> </div>
					<div class="span6"> <div id='noBtn'></div> </div>
				</div>
			</div>
			</div>
		</div>
	</div>

</div>
<style>@import url("<?php echo $base_url; ?>/sites/all/libraries/colorbox/example1/colorbox.css?n066hn");</style>
<script src="<?php echo $base_url; ?>/sites/all/libraries/colorbox/jquery.colorbox-min.js?n066hn"></script>
<script>

	var language = '<?php echo $language->language; ?>'; 



	jQuery("#clickme2add").click(function() {
		jQuery("#fieldCoord").slideDown( "slow", function() {
			jQuery('div.contentOfEditFormN7 div#foldCoord').animate({paddingBottom:'16px'});
			jQuery('#clickme2reduce').show("slow");
			jQuery('#clickme2add').hide("slow");
		});
	});

	jQuery("#clickme2reduce").click(function() {
		jQuery("#fieldCoord").slideUp( "slow", function() {
			jQuery('div.contentOfEditFormN7 div#foldCoord').animate({paddingBottom:'0px'});
			jQuery('#clickme2reduce').hide("slow");
			jQuery('#clickme2add').show("slow");
		});
	});

	if(language == 'en'){
		jQuery('h1.page-header').text("The new arrivals");
	}else{
		jQuery('h1.page-header').text("Les nouveaux arrivants");	
	}
	
	jQuery('#field-date-new-add-more-wrapper label').text("Date d'observation*");
	if(language == 'en') jQuery('.contentOfEditFormN7 button#edit-submit').text("Send my observations");
	else jQuery('.contentOfEditFormN7 button#edit-submit').text("Transmettre ma fiche d’observation");
	jQuery('body.page-node-edit.node-type-programme-new #edit-submit').text("Enregistrer les modifications");
	jQuery('#edit-title').val('Les nouveaux arrivants');


	jQuery('.contentOfEditFormN7 button#edit-submit').click(function(event) {
		event.preventDefault();
		//gestion message - boite de dioalogue
		jQuery('.inline').colorbox({inline:true, width:"30%"});
		

		jQuery('#yesBtn').click(function() {
			jQuery('form.node-form.node-programme_new-form').submit();
		});
		jQuery('#noBtn').click(function() {
			jQuery.colorbox.close();
		});
		
	});



	jQuery('#edit-field-localisations-new input.geofield_wkt').each(function() {
	    var element = jQuery(this);
	    var value = element.val();

	    setInterval(function() {
	        if (value != element.val()) {
	            value = element.val();
	            element.trigger('change')
	        }
	    },100);

	    element.change(function(){
	    	var coord = value.split(" ");  
	    	var lat = coord[0].split('(');
	    	lat = lat[1];
	    	var lon = coord[1].split(")");
	    	lon = lon[0];  

	    	jQuery('#edit-field-coordonnees-new input.geofield-lat').val(lon);
	    	jQuery('#edit-field-coordonnees-new input.geofield-lon').val(lat);
		})


	});

	//Mettre la crayon comme outil par défault:
	setTimeout(function(){

		// L'instance de OpenLayers.Map
		var olMap = jQuery('.openlayers-map').data('openlayers').openlayers;
		
		//la toolbar
		var toolbar = olMap.controls[0];
		
		//on active l'autre control
		toolbar.activateControl(olMap.controls[2]);
		

	},500);
		

	//Charger automatiquement le point sur la carte a partir des coordonnées
	jQuery('.btnMajMap').click(function() {

		var lat = jQuery('#edit-field-coordonnees-new input.geofield-lat').val();
		var lon = jQuery('#edit-field-coordonnees-new input.geofield-lon').val();

		if(lon != '' && lat != ''){

		// L'instance de OpenLayers.Map
		var olMap = jQuery('.openlayers-map').data('openlayers').openlayers;

		// Le layer vecteur :
		var layer = olMap.getLayersBy('drupalID', 'openlayers_behavior_geofield')[0];

		//Le control

		// la feature
		var f = new OpenLayers.Feature.Vector(new OpenLayers.Geometry.Point(lon, lat).transform(olMap.displayProjection, olMap.projection));
		layer.addFeatures([f]);
		}else{

			alert('Veuillez entrez des coordonées pour mettre à jour la carte');

		}

	});

	// Mettre la bonne langue en fonction de la langue en cours
	if(language == 'en'){
		
		jQuery('select#edit-language option[value=und]').attr('selected','selected');
		jQuery('div#edit-field-heure-debut-new span.fieldset-legend').text('Starting time *');
		jQuery('div#edit-field-heure-fin-new span.fieldset-legend').text('Ending time *');
		jQuery('div#edit-field-zone-observation-new label').text('Name of the site');
		jQuery('div#edit-field-note-new label').text('Any comments on the survey (abundance, environmental conditions...)');
		jQuery('div#edit-field-zone-observation-new p.help-block').text('Name of the beach, ...');
		jQuery('div#edit-field-point-de-repere-new label').text('Landmarks');
		jQuery('div#edit-field-point-de-repere-new p.help-block').text('Lighthouse, parking...');
		jQuery('div#edit-field-coordonnees-new span.fieldset-legend').text('Coordinates');
		jQuery('div#edit-field-coordonnees-new div.fieldset-description').html('<center>If you have a GPS, please give your position. <br/><br/>( Example : 43.17)</center>');
		



		jQuery('div.alert.alert-block.alert-error li').each(function() {

			//alert(jQuery( this ).html());
			if(jQuery( this ).html() == 'Nom du site field is required.' ) jQuery( this ).html('Name of the site is required.');
			else if(jQuery( this ).html() == 'Photo du site field is required.' ) jQuery( this ).html('Picture of the landscape is required.');
			else if(jQuery( this ).html() == 'Espèces observées * field is required.' ) jQuery( this ).html('Pictures of the suspected non native species is required.');
			

		});

	}
	else jQuery('select#edit-language option[value=und]').attr('selected','selected');


</script>

