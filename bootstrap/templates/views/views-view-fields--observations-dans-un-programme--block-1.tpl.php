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
<?php  global $base_path, $base_url,$user, $language; ?>
                                                        
 

<?php foreach ($fields as $id => $field): ?>

  <?php if (!empty($field->content)): ?>
    <?php if ($id == 'field_photo_especes' || $id == 'field_photo_especes_libre' || $id == 'field_photo_especes_saisons' || $id == 'field_photo_especes_new' || $id == 'field_photo_especes_flore' || $id == 'field_photo_especes_dechet') : ?>
    <?php $labelOfType = $id; ?>
    <?php $photoEspece = $field->content; ?>    
    <?php endif; ?>
  <?php endif; ?>  

    <?php if ($id == 'title') : ?>
    <?php if (!empty($field->content)): ?>
      <?php $title = $field->content; ?>
    <?php endif; ?>
  <?php endif;?> 

  <?php if ($id == 'nid') : ?>
    <?php if (!empty($field->content)): ?>
      <?php $nid = $field->content; ?>
    <?php endif; ?>
  <?php endif;?> 

<?php endforeach; ?>

  <?php if( isset($photoEspece) ): ?>

    <?php $tabOfUrlPic = explode('.', $photoEspece); ?>
    <?php $url_pic = $tabOfUrlPic[count($tabOfUrlPic) - 2]; ?>  

    <?php $tabOfUrlPic = explode('/', $url_pic); ?>
    <?php $url_pic = $tabOfUrlPic[count($tabOfUrlPic) - 1]; ?>  

    <?php $tabOfUrlPic = explode('?', $url_pic); ?>
    <?php $url_pic = $tabOfUrlPic[count($tabOfUrlPic) - 1]; ?>  

    <?php $url_pic = md5($url_pic); ?>


    


<!-- 
Faut aller chercher le nom de l espece validé : 
  - chercher entity id de la photo courante 
  - si id est valide 
  - Aller chercher le nom cummum de cet id
-->      
  <?php if($labelOfType == 'field_photo_especes'): ?>        
  

   
   <?php //On va chercher entity id de la photo courante
   $nomCommum = '';

    $query = db_select('field_data_field_com_nom_photo','f')
           ->condition('f.field_com_nom_photo_value', $url_pic, '=')
           ->fields('f', array('entity_id'));

             $result = $query->execute();

    //On va voir si l'id trouvé est un commentaire validé
    while($record = $result->fetchAssoc()) {
        //print($record['entity_id']);
        $query1 = db_select('field_data_field_com_isvalidate','n')
       ->condition('n.field_com_isvalidate_value', '1', '=')
       ->condition('n.entity_id', $record['entity_id'], '=')
       ->fields('n', array('entity_id'));

       $result1 = $query1->execute();
            //On va chercher le nom commum de cet id
           while($record1 = $result1->fetchAssoc()) {
              
              $query2 = db_select('field_data_field_com_identification','b')
               ->condition('b.entity_id', $record1['entity_id'], '=')
               ->fields('b', array('field_com_identification_value'));
                $result2 = $query2->execute();
               
              while($record2 = $result2->fetchAssoc()) {
               $nomCommum = $record2['field_com_identification_value'];
              } 
              //On va chercher le nom scientifique de cet id
              $query3 = db_select('field_data_field_com_nom_scientifique','b')
             ->condition('b.entity_id', $record1['entity_id'], '=')
             ->fields('b', array('field_com_nom_scientifique_value'));
              $result3 = $query3->execute();

             
              while($record3 = $result3->fetchAssoc()) {
               $nomSci = $record3['field_com_nom_scientifique_value'];
              } 
          
            }
      } 
     
    ?>  

    <div class="view view-first <?php if($nomCommum != '') echo 'isIdent'; ?>">        
  
      <img src="<?php echo $photoEspece; ?>" />

      <div class="mask"> 

          <?php if(!isset($nomSci)): ?>
           <?php $nomSci = ''; ?>
          <?php endif; ?>
          
          <?php if( $nomCommum != '' || $nomSci != ''): ?>

            <?php //On affiche le nom commun nomCommum
                $nomCommum = (strlen($nomCommum) > 13) ? substr($nomCommum,0,15).'...' : $nomCommum;
                $nomSci = (strlen($nomSci) > 13) ? substr($nomSci,0,15).'...' : $nomSci;
                print('<h2>'.$title.'<i>'.$nomCommum.'</i><i class="labelScientifique">'.$nomSci.'</i></h2>'); 
                
            ?>

          <?php else: ?>

            <?php print('<h2>'.$title.'<i>Non-Identifiée</i></h2>'); ?>

          <?php endif; ?>
   
          <a href="<?php echo url('node/'.$nid, array('query' => array('pic' => $url_pic))); ?>" class="info">En savoir+</a> 
      </div>  
    </div>  
   
  <?php elseif($labelOfType == 'field_photo_especes_libre'): ?>

   <?php //On va chercher entity id de la photo courante
   $nomCommum = '';

    $query = db_select('field_data_field_com_nom_photo_libre','f')
           ->condition('f.field_com_nom_photo_libre_value', $url_pic, '=')
           ->fields('f', array('entity_id'));

             $result = $query->execute();

    //On va voir si l'id trouvé est un commentaire validé
    while($record = $result->fetchAssoc()) {
        //print($record['entity_id']);
        $query1 = db_select('field_data_field_com_isvalidate_libre','n')
       ->condition('n.field_com_isvalidate_libre_value', '1', '=')
       ->condition('n.entity_id', $record['entity_id'], '=')
       ->fields('n', array('entity_id'));

       $result1 = $query1->execute();
            //On va chercher le nom commum de cet id
           while($record1 = $result1->fetchAssoc()) {

            
              $query2 = db_select('field_data_field_com_identification_libre','b')
               ->condition('b.entity_id', $record1['entity_id'], '=')
               ->fields('b', array('field_com_identification_libre_value'));
                $result2 = $query2->execute();

               
              while($record2 = $result2->fetchAssoc()) {
               $nomCommum = $record2['field_com_identification_libre_value'];
              }
              //On va chercher le nom scientifique de cet id
              $query3 = db_select('field_data_field_com_nom_scientifique_libre','b')
              ->condition('b.entity_id', $record1['entity_id'], '=')
              ->fields('b', array('field_com_nom_scientifique_libre_value'));
              $result3 = $query3->execute();

               
              while($record3 = $result3->fetchAssoc()) {
                $nomSci = $record3['field_com_nom_scientifique_libre_value'];
              }  
          
            }
      } 
     
    ?>  


    <div class="view view-first <?php if($nomCommum != '') echo 'isIdent'; ?>">        
  
      <img src="<?php echo $photoEspece; ?>" />

      <div class="mask green"> 

          <?php if(!isset($nomSci)): ?>
           <?php $nomSci = ''; ?>
          <?php endif; ?>

          <?php if($nomCommum != ''): ?>

            <?php //On affiche le nom commun nomCommum
                $nomCommum = (strlen($nomCommum) > 13) ? substr($nomCommum,0,15).'...' : $nomCommum;
                $nomSci = (strlen($nomSci) > 13) ? substr($nomSci,0,15).'...' : $nomSci;
                print('<h2>'.$title.'<i>'.$nomCommum.'</i><i class="labelScientifique">'.$nomSci.'</i></h2>'); 
            ?>

          <?php else: ?>

            <?php print('<h2>'.$title.'<i>Non-Identifiée</i></h2>'); ?>

          <?php endif; ?>
   
          <a href="<?php echo url('node/'.$nid, array('query' => array('pic' => $url_pic))); ?>" class="info">En savoir+</a> 
      </div>  
    </div>  


 <?php elseif($labelOfType == 'field_photo_especes_saisons'): ?>

   <?php //On va chercher entity id de la photo courante
   $nomCommum = '';

    $query = db_select('field_data_field_com_nom_photo_saisons','f')
           ->condition('f.field_com_nom_photo_saisons_value', $url_pic, '=')
           ->fields('f', array('entity_id'));

             $result = $query->execute();

    //On va voir si l'id trouvé est un commentaire validé
    while($record = $result->fetchAssoc()) {
        //print($record['entity_id']);
        $query1 = db_select('field_data_field_com_isvalidate_saisons','n')
       ->condition('n.field_com_isvalidate_saisons_value', '1', '=')
       ->condition('n.entity_id', $record['entity_id'], '=')
       ->fields('n', array('entity_id'));

       $result1 = $query1->execute();
            //On va chercher le nom commum de cet id
           while($record1 = $result1->fetchAssoc()) {

              $query2 = db_select('field_data_field_com_identification_saisons','b')
              ->condition('b.entity_id', $record1['entity_id'], '=')
              ->fields('b', array('field_com_identification_saisons_value'));
              $result2 = $query2->execute();

               
              while($record2 = $result2->fetchAssoc()) {
               $nomCommum = $record2['field_com_identification_saisons_value'];
              } 
              //On va chercher le nom scientifique de cet id
              $query3 = db_select('field_data_field_com_nom_scientifique_saiso','b')
              ->condition('b.entity_id', $record1['entity_id'], '=')
              ->fields('b', array('field_com_nom_scientifique_saiso_value'));
              $result3 = $query3->execute();

                 
              while($record3 = $result3->fetchAssoc()) {
                $nomSci = $record3['field_com_nom_scientifique_saiso_value'];
              }  
          
            }
      } 
     
    ?>  


    <div class="view view-first <?php if($nomCommum != '') echo 'isIdent'; ?>">        
  
      <img src="<?php echo $photoEspece; ?>" />

      <div class="mask blue"> 

          <?php if(!isset($nomSci)): ?>
          <?php $nomSci = ''; ?>
          <?php endif; ?>
          
          <?php if($nomCommum != ''): ?>

            <?php //On affiche le nom commun nomCommum
                $nomCommum = (strlen($nomCommum) > 13) ? substr($nomCommum,0,15).'...' : $nomCommum;
                $nomSci = (strlen($nomSci) > 13) ? substr($nomSci,0,15).'...' : $nomSci;
                print('<h2>'.$title.'<i>'.$nomCommum.'</i><i class="labelScientifique">'.$nomSci.'</i></h2>'); 
            ?>

          <?php else: ?>

            <?php print('<h2>'.$title.'<i>Non-Identifiée</i></h2>'); ?>

          <?php endif; ?>
   
          <a href="<?php echo url('node/'.$nid, array('query' => array('pic' => $url_pic))); ?>" class="info">En savoir+</a> 
      </div>  
    </div>  


  

  <?php elseif($labelOfType == 'field_photo_especes_new'): ?>

   <?php //On va chercher entity id de la photo courante
   $nomCommum = '';

    $query = db_select('field_data_field_com_nom_photo_new','f')
           ->condition('f.field_com_nom_photo_new_value', $url_pic, '=')
           ->fields('f', array('entity_id'));

             $result = $query->execute();

    //On va voir si l'id trouvé est un commentaire validé
    while($record = $result->fetchAssoc()) {
        //print($record['entity_id']);
        $query1 = db_select('field_data_field_com_isvalidate_new','n')
       ->condition('n.field_com_isvalidate_new_value', '1', '=')
       ->condition('n.entity_id', $record['entity_id'], '=')
       ->fields('n', array('entity_id'));

       $result1 = $query1->execute();
            //On va chercher le nom commum de cet id
           while($record1 = $result1->fetchAssoc()) {

              $query2 = db_select('field_data_field_com_identification_new','b')
              ->condition('b.entity_id', $record1['entity_id'], '=')
              ->fields('b', array('field_com_identification_new_value'));
              $result2 = $query2->execute();

               
              while($record2 = $result2->fetchAssoc()) {
                $nomCommum = $record2['field_com_identification_new_value'];
              } 

              //On va chercher le nom scientifique de cet id
              $query3 = db_select('field_data_field_com_nom_scientifique_new','b')
              ->condition('b.entity_id', $record1['entity_id'], '=')
              ->fields('b', array('field_com_nom_scientifique_new_value'));
              $result3 = $query3->execute();

                   
              while($record3 = $result3->fetchAssoc()) {
                $nomSci = $record3['field_com_nom_scientifique_new_value'];
              }  
          
            }
      } 
     
    ?>  


    <div class="view view-first <?php if($nomCommum != '') echo 'isIdent'; ?>">        
  
      <img src="<?php echo $photoEspece; ?>" />

      <div class="mask pink"> 
          
          <?php if(!isset($nomSci)): ?>
          <?php $nomSci = ''; ?>
          <?php endif; ?>

          <?php if($nomCommum != ''): ?>

            <?php //On affiche le nom commun nomCommum
                $nomCommum = (strlen($nomCommum) > 13) ? substr($nomCommum,0,15).'...' : $nomCommum;
                $nomSci = (strlen($nomSci) > 13) ? substr($nomSci,0,15).'...' : $nomSci;
                if($language->language == 'en') print('<h2>The new arrivals<i>'.$nomCommum.'</i><i class="labelScientifique">'.$nomSci.'</i></h2>'); 
                else print('<h2>'.$title.'<i>'.$nomCommum.'</i><i class="labelScientifique">'.$nomSci.'</i></h2>'); 
            ?>

          <?php else: ?>

            <?php 
            if($language->language == 'en') print('<h2>The new arrivals<i>unknown species</i></h2>');
            else print('<h2>'.$title.'<i>Non-Identifiée</i></h2>');
            ?>
            

          <?php endif; ?>

         <!-- <?php //if($language->language == 'en') : ?> <a href="<?php //echo url('node/'.$nid, array('query' => array('pic' => $url_pic))); ?>" class="info">Get more</a> 
          <?php //else: ?> <a href="<?php //echo url('node/'.$nid, array('query' => array('pic' => $url_pic))); ?>" class="info">En savoir+</a> 
          <?php //endif; ?> -->

          <?php if($language->language == 'en') : ?>
            <a href="node/<?php echo $nid.'&pic='.$url_pic; ?>" class="info">Get more</a> 
          <?php else: ?>
            <a href="node/<?php echo $nid.'&pic='.$url_pic; ?>" class="info">En savoir+</a> 
          <?php endif; ?>

          
      
      </div>  
    </div>  


  

  <?php elseif($labelOfType == 'field_photo_especes_flore'): ?>

   <?php //On va chercher entity id de la photo courante
   $nomCommum = '';

    $query = db_select('field_data_field_com_nom_photo_flore','f')
           ->condition('f.field_com_nom_photo_flore_value', $url_pic, '=')
           ->fields('f', array('entity_id'));

             $result = $query->execute();

    //On va voir si l'id trouvé est un commentaire validé
    while($record = $result->fetchAssoc()) {
        //print($record['entity_id']);
        $query1 = db_select('field_data_field_com_isvalidate_flore','n')
       ->condition('n.field_com_isvalidate_flore_value', '1', '=')
       ->condition('n.entity_id', $record['entity_id'], '=')
       ->fields('n', array('entity_id'));

       $result1 = $query1->execute();
            //On va chercher le nom commum de cet id
           while($record1 = $result1->fetchAssoc()) {

              $query2 = db_select('field_data_field_com_identification_flore','b')
              ->condition('b.entity_id', $record1['entity_id'], '=')
              ->fields('b', array('field_com_identification_flore_value'));
              $result2 = $query2->execute();

               
              while($record2 = $result2->fetchAssoc()) {
                $nomCommum = $record2['field_com_identification_flore_value'];
              } 

              //On va chercher le nom scientifique de cet id
              $query3 = db_select('field_data_field_com_nom_scientifique_flore','b')
              ->condition('b.entity_id', $record1['entity_id'], '=')
              ->fields('b', array('field_com_nom_scientifique_flore_value'));
              $result3 = $query3->execute();

                   
              while($record3 = $result3->fetchAssoc()) {
                $nomSci = $record3['field_com_nom_scientifique_flore_value'];
              }  
          
            }
      } 
     
    ?>  


    <div class="view view-first <?php if($nomCommum != '') echo 'isIdent'; ?>">        
  
      <img src="<?php echo $photoEspece; ?>" />

      <div class="mask flore"> 
          
          <?php if(!isset($nomSci)): ?>
          <?php $nomSci = ''; ?>
          <?php endif; ?>

          <?php if($nomCommum != ''): ?>

            <?php //On affiche le nom commun nomCommum
                $nomCommum = (strlen($nomCommum) > 13) ? substr($nomCommum,0,15).'...' : $nomCommum;
                $nomSci = (strlen($nomSci) > 13) ? substr($nomSci,0,15).'...' : $nomSci;
                print('<h2>'.$title.'<i>'.$nomCommum.'</i><i class="labelScientifique">'.$nomSci.'</i></h2>'); 
            ?>

          <?php else: ?>

            <?php print('<h2>'.$title.'<i>Non-Identifiée</i></h2>'); ?>

          <?php endif; ?>
   
          <a href="<?php echo url('node/'.$nid, array('query' => array('pic' => $url_pic))); ?>" class="info">En savoir+</a> 
      </div>  
    </div>  


  <?php elseif($labelOfType == 'field_photo_especes_dechet'): ?>

   <?php //On va chercher entity id de la photo courante
   $nomCommum = '';

    $query = db_select('field_data_field_com_nom_photo_dechet','f')
           ->condition('f.field_com_nom_photo_dechet_value', $url_pic, '=')
           ->fields('f', array('entity_id'));

             $result = $query->execute();

    //On va voir si l'id trouvé est un commentaire validé
    while($record = $result->fetchAssoc()) {
        //print($record['entity_id']);
        $query1 = db_select('field_data_field_com_isvalidate_dechet','n')
       ->condition('n.field_com_isvalidate_dechet_value', '1', '=')
       ->condition('n.entity_id', $record['entity_id'], '=')
       ->fields('n', array('entity_id'));

       $result1 = $query1->execute();
            //On va chercher le nom commum de cet id
           while($record1 = $result1->fetchAssoc()) {

              $query2 = db_select('field_data_field_com_identification_dechet','b')
              ->condition('b.entity_id', $record1['entity_id'], '=')
              ->fields('b', array('field_com_identification_dechet_value'));
              $result2 = $query2->execute();

               
              while($record2 = $result2->fetchAssoc()) {
                $nomCommum = $record2['field_com_identification_dechet_value'];
              } 

              //On va chercher le nom scientifique de cet id
              $query3 = db_select('field_data_field_com_nom_scientifique_deche','b')
              ->condition('b.entity_id', $record1['entity_id'], '=')
              ->fields('b', array('field_com_nom_scientifique_deche_value'));
              $result3 = $query3->execute();

                   
              while($record3 = $result3->fetchAssoc()) {
                $nomSci = $record3['field_com_nom_scientifique_deche_value'];
              }  
          
            }
      } 
     
    ?>  


    <div class="view view-first <?php if($nomCommum != '') echo 'isIdent'; ?>">        
  
      <img src="<?php echo $photoEspece; ?>" />

      <div class="mask dechet"> 
          
          <?php if(!isset($nomSci)): ?>
          <?php $nomSci = ''; ?>
          <?php endif; ?>

          <?php if($nomCommum != ''): ?>

            <?php //On affiche le nom commun nomCommum
                $nomCommum = (strlen($nomCommum) > 13) ? substr($nomCommum,0,15).'...' : $nomCommum;
                $nomSci = (strlen($nomSci) > 13) ? substr($nomSci,0,15).'...' : $nomSci;
                print('<h2>'.$title.'<i>'.$nomCommum.'</i><i class="labelScientifique">'.$nomSci.'</i></h2>'); 
            ?>

          <?php else: ?>

            <?php print('<h2>'.$title.'</h2>'); ?>

          <?php endif; ?>
   
          <a href="<?php echo url('node/'.$nid, array('query' => array('pic' => $url_pic))); ?>" class="info">En savoir+</a> 
      </div>  
    </div>  


  

  <?php endif; ?>
  <?php endif; ?>