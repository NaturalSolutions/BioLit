<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */


		/*
		* Template du champ photo espece
		* Objectif : tester si le output est une image == du champ com_nom_photo, pr n'afficher que celle ci 
		*/
		global $base_url;
?>
<!-- On recupere le nid de la node -->
<?php $nid = $view->style_plugin->rendered_fields[$view->row_index]['nid']; ?>
<?php $nomCommum = $view->style_plugin->rendered_fields[$view->row_index]['nothing']; ?>

<!-- Aller checher la valeur d'un autre champs, le nom MD5 de la photo valide -->
<?php if($view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo'] != ''): ?>
	<?php $nom_photo = $view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo']; ?>
<?php elseif($view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo_saisons'] != ''): ?>
	<?php $nom_photo = $view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo_saisons']; ?>
<?php elseif($view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo_libre'] != ''): ?>
	<?php $nom_photo = $view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo_libre']; ?>
<?php elseif($view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo_new'] != ''): ?>
	<?php $nom_photo = $view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo_new']; ?>
<?php elseif($view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo_flore'] != ''): ?>
	<?php $nom_photo = $view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo_flore']; ?>
<?php elseif($view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo_dechet'] != ''): ?>
	<?php $nom_photo = $view->style_plugin->rendered_fields[$view->row_index]['field_com_nom_photo_dechet']; ?>
<?php endif; ?>

<!-- Decouper output pr connaitre le nb d'images -->
<?php $image = explode('","', $output); ?>
<?php $image = explode(',', $image[0]); ?>


<!-- On parcour toutes les images -->
<?php for($i = 0; $i < count($image) ; $i++): ?>

	<?php $urlOfimage = explode('img src="', $image[$i]); ?>	
	<?php $urlOfimage = explode('" width=', $urlOfimage[1]); ?>
	<?php $urlOfimage = explode('public/', $urlOfimage[0]); ?>
	<?php $urlOfimage = explode('?', $urlOfimage[1]); ?>
	<?php $urlOfimage = explode('.', $urlOfimage[0]); ?>
	<?php $urlOfimageMD5 = md5($urlOfimage[0]); ?>
	
	<?php if($urlOfimageMD5 == $nom_photo): ?>
	
		<a href="<?php echo $base_url; ?>/sites/default/files/<?php echo $urlOfimage[0]; ?>.<?php echo $urlOfimage[1]; ?>" class="colorbox init-colorbox-processed cboxElement" title="<?php echo $nomCommum; ?>" rel="ni"><img src="<?php echo $base_url; ?>/sites/default/files/styles/50_par_50/public/<?php echo $urlOfimage[0]; ?>.<?php echo $urlOfimage[1]; ?>" width="50" height="50" alt="" title=""></a>

	<?php //print $output; ?>
	<?php endif; ?>
	

<?php endfor; ?>






