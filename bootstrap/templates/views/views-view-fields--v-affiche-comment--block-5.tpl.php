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


            // THIS IS A TEMPLATE FOR AFFICHE IDENT OF OBS saisons

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

<?php if ($id == 'field_com_nom_photo_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_com_nom_photo = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'field_com_identification_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_com_identification = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'field_com_nom_scientifique_saiso') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_com_nom_scientifique = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'field_com_lien_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_com_lien = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'field_com_isvalidate_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_com_isvalidate = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'delete_comment') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $delete_comment = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'edit_comment') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $edit_comment = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'created') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $created = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'cid') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $cid = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php endforeach; ?> 


<?php if($field_com_isvalidate == 'Identification validée'): ?>
	<div class="row-fluid <?php echo $field_com_nom_photo; ?> lineOfComId itsIdentifier" id='containerOfViewIdent' title='identification validé'>
<?php else: ?> 
	<div class="row-fluid <?php echo $field_com_nom_photo; ?> lineOfComId" id='containerOfViewIdent' title='identification non-validé'>
<?php endif;?> 

	<div class="span12">
  
    <div class="row-fluid">
      <div class="span2">     
      <p class='firstLine'><?php if(isset($picture)) echo $picture; else echo "<div class='defaultImageProfile'></div>"; ?></p>
      </div>
      <div class="span10">
        <p class='name'><?php echo $name; ?></p>
        <p class='timeAgo'><?php echo $created; ?></p>
      

        <?php if(isset($field_com_identification)): ?>
          <p class='ident_nom_com' id="<?php echo $field_com_nom_photo; ?>" data-value-nom-commum="<?php echo $field_com_identification; ?>" data-value-nom-scientifique="<?php if(isset($field_com_nom_scientifique)) echo $field_com_nom_scientifique; else echo 'SP'; ?>"><strong><?php echo $field_com_identification; ?></strong></p>
        <?php endif; ?>

        <?php if(isset($field_com_nom_scientifique)): ?>
          <p class='ident_nom_scient'><i><?php echo $field_com_nom_scientifique; ?></i></p>
         <?php endif; ?>
        

        <?php if(isset($field_com_lien)): ?>    
        <?php $linkTab = explode('//', $field_com_lien); ?>

          <?php if($linkTab[0] == 'http:'): ?>
              <a class='ref' href="<?php echo $field_com_lien; ?>" target='_blank'><?php echo $field_com_lien; ?></a>    
            <?php else: ?>
              <p class='ref'><?php echo $field_com_lien; ?></p>
          <?php endif; ?>

        <?php endif; ?>  

      </div>
    </div>






    
      
    <?php  $myCurrentUser = $user->roles; ?>
    <?php if(isset($myCurrentUser[3]) && $myCurrentUser[3] == 'Modérateur' ): ?> 
      <p><?php echo $field_com_isvalidate; ?></p>
    

      <?php if($field_com_isvalidate != 'Identification validée'): ?>

        <form name="input" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
        <input type="submit" value="Valider l'identification">
        <input style='visibility:hidden;' type="text" name="ValidThisIdent" value="<?php echo $cid; ?>"><br/>
        </form> 
      
      <?php else: ?>
        
        <form name="input" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
        <input type="submit" value="Supprimer la validation">
        <input style='visibility:hidden;' type="text" name="SupprValidThisIdent" value="<?php echo $cid; ?>"><br/>
        </form> 
      
      <?php endif; ?> <!-- fin si identification non-validé -->

      <p><?php echo $edit_comment; ?>&nbspou&nbsp<?php echo $delete_comment; ?></p>
      
    <?php endif; ?>


	</div>
</div>



