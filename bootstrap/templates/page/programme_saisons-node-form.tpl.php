
<?php  global $base_path, $base_url; ?>


<div id='breadcrumPersoN8'>
	<a href="<?php echo $base_url; ?>" alt=''>Accueil</a> > <a href="<?php echo $base_url; ?>/liste-actions" alt=''>Actions</a> > <a href="<?php echo $base_url; ?>/saisons-de-la-mer" alt=''>Les saisons de la Mer !</a> > Saisie des données
</div>


<div class='container contentOfEditFormN8'>

	<div class='row-fluid' id='fold1InEditFormN8'>
		<div class='span12'>			
			<?php print drupal_render($form['field_date_observation_saisons']); ?>
			<?php print drupal_render($form['field_heure_debut_saisons']); ?>
			<?php print drupal_render($form['field_heure_fin_saisons']); ?>
		</div>
	</div>

	<br/>

	<div class='row-fluid'>
		
		<div class='span4' id='leftColOnFold2OfEditFormN8'>
			<div class='row-fluid'>			
			<div class='span12'>
			<legend id='fieldPointRepere'><span class="fieldset-legend">Site d'observation</span></legend>
			<?php print drupal_render($form['field_zone_observation_saisons']); ?>
			</div>
			</div>

			<div class='row-fluid'>	
			<div class='span12'>
			<?php print drupal_render($form['field_point_de_repere_saisons']); ?>
			</div>
			</div>

			<div class='row-fluid'>	
			<div class='span12' id='fieldLocalistaion'>
			<div id='traitBlanc'></div>
			<label class='control-label'>Localisation du site *</label>
			<!-- <legend>Localisation du site *</legend>-->
			<p id='normal'>Veuillez positionner le pointeur sur la carte ou renseigner les coordonnées géographiques en cliquant sur le "+" en bas à droite de la carte</p>

			<!-- <i><p id='small'>Après avoir séléctionné l'outil "crayon", déplacez-vous sur la carte en restant appuyé sur le bouton gauche de la souris.<br/>Zoomez sur la carte en utilisant le (+). Soyez le plus précis possible dans la localisation en zoomant le plus possible<br/>Positionnez le pointeur sur le site d’observation et cliquez pour valider votre position exacte. Recommencez si vous vous êtes trompés.</p></i>			</div>-->
			<i><p id='small'>Positionnez le pointeur sur le site d’observation et utiliser le zoom pour plus de précision.</p></i>			</div>
			</div>
		</div>

		<div class='span8'>
			<?php print drupal_render($form['field_localisations_saisons']); ?>
		</div>

	</div>

	<div id='clickme2add' title='Afficher les coordonnées'></div>
	<div id='clickme2reduce' title='Cacher les coordonnées'></div>

	<div class='row-fluid' id='foldCoord'>	
	<div class='span8 offset4' id='fieldCoord'>
		<?php print drupal_render($form['field_coordonnees_saisons']); ?>
		<div class='btnMajMap' title='Afficher les coordonnées sur la carte'></div>
	</div>
	</div>


<div class='row-fluid' id='mesPhotos'>
	<div class='span12'>
	<legend id='titleOfMyPictureZone'>Photos</legend>
	<div class='row-fluid' id='foldOfPhotoSiteEditFormN8'>
		<div class='span12'>
		<p class='labelOfPicturesEditForm'>Une photo générale du paysage vu de la terre vers la mer *</p>
		<?php print drupal_render($form['field_photo_lieu_saisons']); ?>
		</div>
	</div>

	<div class='row-fluid' id='foldOfPhotoLaisseEditFormN8'>
		<div class='span12'>
		<p class='labelOfPicturesEditForm'>Une photo de la laisse de Mer</p>
		<?php print drupal_render($form['field_laisse_saisons']); ?>
		</div>
	</div>

	<div class='row-fluid' id='foldOfPhotoEspeceEditFormN8'>
		<div class='span12'>
		<p class='labelOfPicturesEditForm'>Photos des espèces rencontrées lors de votre sortie *</p>
		<?php print drupal_render($form['field_photo_especes_saisons']); ?>
		</div>
	</div>
	</div>
</div>

	<div class='row-fluid' id='foldOfNoteEditFormN8'>
		<div class='span8'>
		<?php print drupal_render($form['field_note_saisons']); ?>
		</div>

		<div class='span4'>
			<a class='inline' href="#inline_content"><?php print drupal_render($form['actions']); ?></a>
			<?php print drupal_render($form['additional_settings']); ?>
			<?php print drupal_render_children($form); ?>
		</div>
	</div>

	<div class='row-fluid' id='lastSentence'>
		<div class="span12"><p>Les champs obligatoires sont signalés par un astérisque (*)</p></div>
	</div>

	<div style='display:none'>
		<div id="inline_content">
			<div class="row-fluid">
			<div class="span12">
				<h4>Etes vous sûr que vos informations sont correctes ?</h4>
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

jQuery("#clickme2add").click(function() {
	jQuery("#fieldCoord").slideDown( "slow", function() {
		jQuery('div.contentOfEditFormN8 div#foldCoord').animate({paddingBottom:'16px'});
		jQuery('#clickme2reduce').show("slow");
		jQuery('#clickme2add').hide("slow");
	

	});
});

jQuery("#clickme2reduce").click(function() {
		
	jQuery("#fieldCoord").slideUp( "slow", function() {
		jQuery('div.contentOfEditFormN8 div#foldCoord').animate({paddingBottom:'0px'});
		jQuery('#clickme2reduce').hide("slow");
		jQuery('#clickme2add').show("slow");
		
	});
});


jQuery('h1.page-header').text("Les saisons de la Mer");
jQuery('#field-date-saisons-add-more-wrapper label').text("Date d'observation*");
jQuery('.contentOfEditFormN8 button#edit-submit').text("Transmettre ma fiche d’observation");
jQuery('body.page-node-edit.node-type-programme-saisons #edit-submit').text("Enregistrer les modifications");
jQuery('#edit-title').val('Les saisons de la Mer');


jQuery('.contentOfEditFormN8 button#edit-submit').click(function(event) {
	event.preventDefault();
	//gestion message - boite de dioalogue
	jQuery('.inline').colorbox({inline:true, width:"30%"});
	

	jQuery('#yesBtn').click(function() {
		jQuery('form.node-form.node-programme_saisons-form').submit();
	});
	jQuery('#noBtn').click(function() {
		jQuery.colorbox.close();
	});
	
});



jQuery('#edit-field-localisations-saisons input.geofield_wkt').each(function() {
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

    	jQuery('#edit-field-coordonnees-saisons input.geofield-lat').val(lon);
    	jQuery('#edit-field-coordonnees-saisons input.geofield-lon').val(lat);
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

	var lat = jQuery('#edit-field-coordonnees-saisons input.geofield-lat').val();
	var lon = jQuery('#edit-field-coordonnees-saisons input.geofield-lon').val();

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


</script>

