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



<?php foreach ($fields as $id => $field): ?>

<?php if ($id == 'field_doc_biolitheque') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $doc = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php endforeach; ?>


    <div class="row-fluid">
      <div class="span12">
		    
        <p class='moreFicheEspeceLine'><b class='moreButton'>Fiches espèces</b>  <b class='zipButton'><?php echo "<a class='downloadZipDocs' title='Télécharger toutes les fiches espèces (zip)' href=".$doc."></a>"; ?></b></p>

      </div>
    </div> 
