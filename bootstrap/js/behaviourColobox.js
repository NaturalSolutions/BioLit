Drupal.behaviors.context = {
  attach: function (context, settings) {

  		 

  		//Desactive le lien dans le footer
  		jQuery('.link2Cancel').click(function(e) {
  			
		    e.preventDefault();
		    //do other stuff when a click happens
		});

  		//Pour activer colorbox dans la page actions
		if (jQuery('#miniatureOfBestTaxon img').length) {

			jQuery('a.gallery7').colorbox({rel:"groupir7"});
			jQuery('a.gallery8').colorbox({rel:"groupir8"});
			jQuery('a.gallery9').colorbox({rel:"groupir9"});
			jQuery('a.gallery10').colorbox({rel:"groupir10"});
			jQuery('a.gallery11').colorbox({rel:"groupir11"});
			jQuery('a.gallery65').colorbox({rel:"groupir65"});
		}
		
		////Hover boutons (filtres) actions		
		jQuery('#edit-field-facade-programme-value input:checked,section#contentOflisteRelais input:checked').parent().css('background-color','#0590a2');
		
		//Lors clics sur labels bouton page liste actions
		jQuery('#edit-field-facade-programme-value label,section#contentOflisteRelais label').click(function() {
			
			jQuery(this).css('background-color','#0590a2');
			
			//traduction
			if(language == 'en'){
		
		        setTimeout(function(){

			        jQuery('#edit-field-facade-programme-value label[for="edit-field-facade-programme-value-atlantique"]').html('<input class="bef-select-as-radios form-radio" type="radio" id="edit-field-facade-programme-value-atlantique" name="field_facade_programme_value" value="atlantique">Atlantic');
			        jQuery('#edit-field-facade-programme-value label[for="edit-field-facade-programme-value-manche"]').html('<input class="bef-select-as-radios form-radio" type="radio" id="edit-field-facade-programme-value-manche" name="field_facade_programme_value" value="manche">Channel and North Sea');
			        jQuery('#edit-field-facade-programme-value label[for="edit-field-facade-programme-value-med"]').html('<input class="bef-select-as-radios form-radio" type="radio" id="edit-field-facade-programme-value-med" name="field_facade_programme_value" value="med">Mediterranean');
			      	
			      	jQuery('.container4just1blocAction65 h3.titleOfBlocAction a').text('Start your observations!');
			        jQuery('.container4just1blocAction10 h3.titleOfBlocAction a').text('Brown algae and winkles');
			        jQuery('.container4just1blocAction9 h3.titleOfBlocAction a').text('Chlorophyll-mania');
			        jQuery('.container4just1blocAction7 h3.titleOfBlocAction a').text('The new arrivals');
			        jQuery('.container4just1blocAction8 h3.titleOfBlocAction a').text('Seasons of the sea');
			        jQuery('.container4just1blocAction11 h3.titleOfBlocAction a').text('Look out, threat?');
			        
		        }, 500);
			}
		});

		//Hover page actions
		jQuery('.just1blocAction').hover(
			function() {
				jQuery(this).find('h3.titleOfBlocAction a').css('color','#fff');
			},
			function() {
				jQuery(this).find('h3.titleOfBlocAction a').css('color','#333333');
			}
		);

		//Pour ajouter le timbre par défaut
		if(language == 'en' && !jQuery('#just1blocActionWithColorOf0').length) jQuery('.view-v-liste-actions .view-content').prepend("<div><div class='span4 just1blocAction' id='just1blocActionWithColorOf0'><div class='row-fluid'><div class='span12'><div id='earth'></div></div></div><div class='row-fluid'><div class='span12'><h3 class='titleOfBlocAction'><a href='l-observatoire-biolit'>Actions BioLit</a></h3><p>Help us to <b>monitor</b> your coastline’s state of health by volunteering to collect data:</p><br/><br/><li>Select your activity : the level, the region, and the text description are there to help you!</li><li>Click on that action’s title and follow the data-collection instructions</li><li>Send on collected data to scientists by recording them on this site.</li></div></div></div></div>");
		else if(language == 'fr' && !jQuery('#just1blocActionWithColorOf0').length) jQuery('.view-v-liste-actions .view-content').prepend("<div><div class='span4 just1blocAction' id='just1blocActionWithColorOf0'><div class='row-fluid'><div class='span12'><div id='earth'></div></div></div><div class='row-fluid'><div class='span12'><h3 class='titleOfBlocAction'><a href='l-observatoire-biolit'>Les actions BioLit</a></h3><p>Aidez-nous à suivre l’état de santé de votre littoral en participant à une action de collecte des données :</p><br/><br/><li>Sélectionnez votre action : le niveau, la façade et la description sont là pour vous aider !</li><li>Cliquez sur le titre de cette action et suivez les instructions pour collecter les données</li><li>Transmettez les données collectées aux scientifiques en les enregistrant sur ce site.</li></div></div></div></div>");
		
		
		//Pour altrer quelques label de bouton dans les formulaires
		jQuery("#programme-n1-node-form button[value='Retirer']").text("Supprimer");
		jQuery("#programme-n1-node-form button[value='Transférer']").hide();

		//Pour altrer quelques label de bouton dans les formulaires
		jQuery("#programme-obs-libre-node-form button[value='Retirer']").text("Supprimer");
		jQuery("#programme-obs-libre-node-form button[value='Transférer']").hide();

		//Pour altrer quelques label de bouton dans les formulaires
		jQuery("#programme-saisons-node-form button[value='Retirer']").text("Supprimer");
		jQuery("#programme-saisons-node-form button[value='Transférer']").hide();

		//Pour altrer quelques label de bouton dans les formulaires
		jQuery("#programme-new-node-form button[value='Retirer']").text("Supprimer");
		jQuery("#programme-new-node-form button[value='Transférer']").hide();
		
		//Pour altrer quelques label de bouton dans les formulaires
		if(typeof language !== 'undefined' && language == 'en') jQuery("#programme-new-node-form button[value='Retirer']").text("Delete");
		else jQuery("#programme-new-node-form button[value='Retirer']").text("Supprimer");
		
		jQuery("#programme-new-node-form button[value='Upload']").hide();

		//Pour altrer quelques label de bouton dans les formulaires
		jQuery("#programme-dechet-node-form button[value='Retirer']").text("Supprimer");
		jQuery("#programme-dechet-node-form button[value='Transférer']").hide();

		//Pour bouton transpher automatiquement l'image selectionné
		jQuery('.form-item input.form-file', context).change(function() {
		
			$parent = jQuery(this).closest('.form-item');
	        //setTimeout to allow for validation
	        //would prefer an event, but there isn't one
	        setTimeout(function() {	        
	            
	            if(typeof language !== 'undefined' && language == 'en') jQuery("button[value='Upload']", $parent).mousedown();	        
	            else jQuery("button[value='Transférer']", $parent).mousedown();
	        
	        }, 100);
		});

		// Alterer les labels Englais sur la restitution fiche obs
		if(language == 'en'){

			jQuery('div#edit-field-com-identification-new--2 label').text('Common name');
			jQuery('div#edit-field-com-nom-scientifique-new--2 label').text('scientific name');
			jQuery('div#edit-field-com-lien-new--2 label').text('External link');
			jQuery('div#edit-field-com-lien-new--2 p.help-block').text('Link to Doris, Wikipédia, Google...');
			
		}




}
};