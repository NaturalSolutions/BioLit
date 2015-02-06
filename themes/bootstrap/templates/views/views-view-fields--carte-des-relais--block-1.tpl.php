<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php  global $base_path, $base_url,$user; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'title') : ?>
  	<?php $title = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'body') : ?>
  	<?php $body = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>


<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'field_nom_relais') : ?>
  	<?php $name = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'field_image_relais') : ?>
  	<?php $image = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'field_facade_du_relais') : ?>
  	<?php $facade = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>




<div class='row-fluid'> <!-- colone generale-->
	<div class='span12'> <!-- ligne generale-->
		
		<div class='row-fluid'><!-- une ligne -->
			<div class='span4'>
				<?php echo $image; ?>
			</div>
			<div class='span8'>
				<h4><a href='?q=contact'><?php echo $title; ?></a></h4>
				<p><?php echo $body; ?></p>
			</div>
		</div>
		
	</div>
</div>
