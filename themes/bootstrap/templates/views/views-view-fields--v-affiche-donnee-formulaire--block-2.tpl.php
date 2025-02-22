<?php
/**
 * @file views-view-fields.tpl.php
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


            // THIS IS A TEMPLATE FOR AFFICHE DATA OF FORM  : Saisons de la Mer

?>  




<?php foreach ($fields as $id => $field): ?>

<?php if ($id == 'picture') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $avatar = $field->content; ?>
  <?php endif; ?>
<?php endif;?>


<?php if ($id == 'name') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $name = $field->content; ?>
  <?php endif; ?>
<?php endif;?>  


<?php if ($id == 'name_1') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $name_1 = $field->content; ?>
  <?php endif; ?>
<?php endif;?>  

<!-- Champs localisation Carte vers Carte -->
<?php if ($id == 'field_localisations_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $localisation = $field->content; ?>
  <?php endif; ?>
<?php endif;?>  

<!-- Champs localisation Carte vers coordonées GPS -->
<?php if ($id == 'field_localisations_saisons_1') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $coordoneeGPS = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<!-- Champs Coordonnées GPS vers MAP -->
<?php if ($id == 'field_coordonnees_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $coordoneeGPSuser = $field->content; ?>
    <?php else: ?>
      <?php $coordoneeGPSuser = ''; ?>
  <?php endif;?> 
<?php endif;?> 

<!-- Champs Coordonnées GPS vers GPS -->
<?php if ($id == 'field_coordonnees_saisons_1') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $coordoneeGPSuser1 = $field->content; ?>
<?php endif;?> 
<?php endif;?> 

<?php if ($id == 'field_point_de_repere_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $pointRepere = $field->content; ?>
   <?php else: ?>
      <?php $pointRepere = ''; ?>
  <?php endif;?> 
<?php endif;?> 

<?php if ($id == 'field_zone_observation_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $pointObs = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'field_date_observation_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $date = $field->content; ?>
  <?php endif; ?>
<?php endif;?>  

<?php if ($id == 'field_date_observation_saisons_1') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $date1 = $field->content; ?>
  <?php endif; ?>
<?php endif;?>  

<?php if ($id == 'field_note_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $note = $field->content; ?>
  <?php else: ?>
      <?php $note = ''; ?>
  <?php endif;?> 
<?php endif;?> 

<?php if ($id == 'field_heure_debut_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $hd = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'field_heure_fin_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $hf = $field->content; ?>
  <?php endif; ?>
<?php endif;?> 

<?php if ($id == 'field_photo_lieu_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $lieu_obs = $field->content; ?>   
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'field_laisse_saisons') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $laisse = $field->content; ?>   
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'uid') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $uid = $field->content; ?>   
  <?php endif; ?>
<?php endif;?>

<?php endforeach; ?> 



<div class='row-fluid' id='contentOfViewDataForm'>

  <div class='span6'>
    <div class='row-fluid'>
    <div class='span12'>
    <?php foreach ($fields as $id => $field): ?>
    <?php if ($id == 'field_photo_especes_saisons') : ?>
      <?php if (!empty($field->content)): ?>



          <?php $urlOfField_photo_lieu = explode(',',$field->content); ?>
            
        <div id="galleria"> 
          <?php for ($i=0;$i<count($urlOfField_photo_lieu);$i++): ?>
            <?php echo "<a href='".$urlOfField_photo_lieu[$i]."'><img src='".$urlOfField_photo_lieu[$i]."' alt='' title='' data-big='".$urlOfField_photo_lieu[$i]."' /></a>"; ?>
          <?php endfor; ?>      
          </div> <!-- FIN Galleria -->     

        <?php endif; ?>
      <?php endif;?>
    <?php endforeach; ?> 
    </div>

    <div class='span12'>
        <div id='socialZone'>

        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_preferred_4"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_counter addthis_bubble_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = {data_track_address_bar: false,data_track_clickback: false };</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52f11cb3439d368f"></script>
        <!-- AddThis Button END -->

        </div>
    </div>


    </div>
  </div>

  <div class='span6'>

    <!-- 1er fold de droite => Carte -->
    <div class='row-fluid'>
    <div class='span12'>
    <div id="zoneMap">
      <?php echo $coordoneeGPSuser; ?>
        <p>
        <?php $GPS = explode(',', $coordoneeGPSuser1); ?>
        <?php echo "<span id='coordGPS'>Lat: ".number_format($GPS[0],2); ?>
        <?php echo ", Long: ".number_format($GPS[1],2)."</span>"; ?>
        </p>   
    </div>
    </div>
    </div>

    <!-- 2eme fold de droite => Données sous la carte -->
    <div class='row-fluid' id='secondLineOfRightBloc'>
    <div class='span12'>
        
      <div class="row-fluid">
        <div class="span10">
          <div class="row-fluid">
          <?php $hd_temp = explode('-', $hd); ?>
          <?php $hd = $hd_temp[3]; ?>
          <?php $hf_temp = explode('-', $hf); ?>
          <?php $hf = $hf_temp[3]; ?>
            <div class="span12"><p id='justeAFullLine'>Observation faite par <i><?php echo $name; ?></i> le <?php echo $date; ?> de <?php echo $hd; ?> à <?php echo $hf; ?></p></div>
            
            <?php if(isset($laisse)): ?>

            <div class="row-fluid">
              <div class="span3"><?php echo $lieu_obs; ?><p><b><?php echo $pointObs."<br/></b>".$pointRepere; ?></p></div>
              <div class="span9"><?php echo $laisse; ?><p><i><small>Laisse de mer</small></i></p></div>
            </div>
            
            <?php else: ?>
            
            <div class="row-fluid"><div class="span12"><?php echo $lieu_obs; ?></div></div>
            <div class="row-fluid"><div class="span12"><p><b><?php echo $pointObs."<br/></b>".$pointRepere; ?></p></div></div>
          
            <?php endif;  ?>
          </div>
        </div>

        <div class="span2">
            <div id='zoneAvatar'>
            <div id="avatar"><?php if(isset($avatar)) echo $avatar; else echo "<a href='$base_url/user/$uid' alt='lien vers le profile'><div class='defaultImageProfileInObs'></div></a>"; ?></div>   
            <p id="name"><b><?php echo $name; ?></p></b>
            </div>
        </div>
      </div>
       

    </div>
    </div> <!-- fin secondLineOfRightBloc-->
  </div> <!-- fin span6 de droite-->

  <div class='row-fluid'>
    <div class='span12'>
      <div id='noteZone'>
      <?php if($note != ''): ?>
      <p><b>Mes remarques et suggestions sur la sortie : </b><br/><?php echo $note; ?></p>
      <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span12">
      <a class='toutesLesObs' href="../carte-des-observations" alt='Voir toutes les observations'>Toutes les observations</a>
    </div>
  </div>
  
</div>