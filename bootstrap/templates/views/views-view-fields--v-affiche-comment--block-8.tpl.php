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
global $base_path, $base_url,$user;


            // THIS IS A TEMPLATE FOR AFFICHE COMMENT OF OBS FLORE

?>  


<?php foreach ($fields as $id => $field): ?>

<?php if ($id == 'name') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $name = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'picture') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $picture = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'comment_body') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $comment_body = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'field_com_nom_photo_flore') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_com_nom_photo = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'delete_comment') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $delete_comment = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'created') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $created = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'edit_comment') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $edit_comment = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php endforeach; ?> 

<div class="row-fluid <?php echo $field_com_nom_photo; ?> lineOfComId" id='containerOfViewComment'>
  <div class="span12">
  
    <div class="row-fluid">
      
      <div class="span2">     
      <p class='firstLine'><?php if(isset($picture)) echo $picture; else echo "<div class='defaultImageProfile'></div>"; ?></p>
      </div>

      <div class="span10">
        <p class='name'><?php echo $name; ?></p>
        <p class='timeAgo'><?php echo $created; ?></p>
      

      <?php if(isset($comment_body)): ?>
        <p class='bodyComment'><?php echo $comment_body; ?></p>
      <?php endif; ?>
    </div>
    </div>


    <?php  $myCurrentUser = $user->roles; ?>
    <?php if(isset($myCurrentUser[3]) && $myCurrentUser[3] == 'Modérateur' ): ?> 
      <p><?php echo $edit_comment; ?>&nbspou&nbsp<?php echo $delete_comment; ?></p>
    <?php endif; ?>

    
  </div>
</div>



