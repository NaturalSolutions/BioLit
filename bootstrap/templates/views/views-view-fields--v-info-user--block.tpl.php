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

    <?php if ($id == 'picture') : ?>
    <?php if (!empty($field->content)): ?>
      <?php $picture = $field->content; ?>
    <?php endif; ?>
  <?php endif;?> 

  <?php if ($id == 'name') : ?>
    <?php if (!empty($field->content)): ?>
      <?php $name = $field->content; ?>
    <?php endif; ?>
  <?php endif;?> 

  <?php if ($id == 'field_biographie') : ?>
    <?php if (!empty($field->content)): ?>
      <?php $bio = $field->content; ?>
    <?php endif; ?>
  <?php endif;?> 


  <?php if ($id == 'login') : ?>
    <?php if (!empty($field->content)): ?>
      <?php $login = $field->content; ?>
    <?php endif; ?>
  <?php endif;?> 

  <?php if ($id == 'created') : ?>
    <?php if (!empty($field->content)): ?>
      <?php $created = $field->content; ?>
    <?php endif; ?>
  <?php endif;?> 

<?php endforeach; ?>



<div class="row-fluid avatarUserBlock">  
  <div class="span12">
    <?php if(isset($picture)) echo $picture; ?>
  </div>
</div>


<div class="row-fluid nameUserBlock">
  <div class="span12">
    <?php echo $name; ?>
  </div>
</div>



<div class="row-fluid bioUserBlock">
  <div class="span12">
    <?php if(isset($bio)) echo $bio; ?>    
  </div>
</div>


<div class="row-fluid lastConnectUserBlock">
  <div class="span12">
    <i>Dernière connexion : </i><?php echo $login; ?>     
  </div>
</div>


<div class="row-fluid dateCreateUserBlock">
  <div class="span12">
    <i>Inscrit le : </i><?php echo $created; ?>    
  </div>
</div>


