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
<?php  global $base_path, $base_url; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'field_avatar_du_programme') : ?>
  	<?php $avatar = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'field_description_programme') : ?>
  	<?php $descro = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'field_especes_phares_programme') : ?>
  	<?php $especePhares = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'title') : ?>
  	<?php $title = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
    <?php if ($id == 'field_facade_programme') : ?>
    <?php $facade = $field->content; ?>    
    <?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
    <?php if ($id == 'field_difficulte_programme') : ?>
    <?php $difficulte = $field->content; ?>    
    <?php endif; ?>
  <?php else: ?>
  <?php $difficulte = ''; ?>  
<?php endif; ?>
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
    <?php if ($id == 'nid') : ?>
    <?php $nid = $field->content; ?>    
    <?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
    <?php if ($id == 'field_thematique_programme') : ?>
    <?php $thematique = $field->content; ?>    
    <?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>


<?php global $language; ?>
<?php if($language->language == 'fr'): ?>

  <div class='span4 just1blocAction' id="just1blocActionWithColorOf<?php echo $nid; ?>">

      <div class="forHide comingSoonMessage<?php echo $nid; ?>">
          <p>Prochainement disponible !</p>
      </div>

    <div class="container4just1blocAction<?php echo $nid; ?>">

    <div class='row-fluid'>
    	<div class='span7'>
    	<?php if($nid == 65): ?> <a href="<?php echo $base_url; ?>/a-vos-observations"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/sliderObsLibre_0.jpg" width="450" height="450" alt=""></a> <?php else: echo $avatar; endif; ?> 
    	</div>  

    <?php if($difficulte == ''): ?>
    <?php $difficulte = 'Très Facile' ?>
    <?php endif; ?>
      
    	<div class='span5'>
        <!-- Ligne picto du programme-->
        <!-- <div class='row-fluid'><div class='span12'><?php //echo "<img src='http://82.96.149.133".$thematique."' class='iconThematique'><br/>"; ?></div></div> -->
        <div class='row-fluid'><div class='span12' id='iconThematique'><?php echo $thematique; ?></div></div>
         <!-- Ligne difficulté -->
        <div class='row-fluid lineLevel'><div class='span12'><?php if($difficulte == 'Facile'){echo "<div class='iconLevelOfDifficulty'></div>"; }elseif($difficulte == 'Très Facile'){echo "<div class='iconLevelOfDifficulty0'></div>";}elseif($difficulte == 'Moyenne'){echo "<div class='iconLevelOfDifficulty1'></div>";}; ?><p id='labelLevel'><?php echo $difficulte; ?></p></div></div>
        <!-- Ligne localité -->
        <div class='row-fluid lineLocalite'><div class='span12'><?php echo "<div class='iconLocalite'></div><p id='labelLocalite'>".$facade; ?></p></div></div>     
      </div> 

    </div>

    <div class='row-fluid' id='secondLineOfjust1Bloc'>
      
      <div class='span12'>
        <h3 class='titleOfBlocAction'><?php echo $title; ?></h3>
    		<p class='descroOf1blocAction'><?php echo $descro; ?> </p>
      </div>

      <div class='span12'>
    		<?php $oneImg = explode(",", $especePhares); ?>
        <div id="miniatureOfBestTaxon">
    		<?php for ($i=0;$i<count($oneImg);$i++): ?>

            <?php $val = $oneImg[$i]; ?>
            <?php $tabOflink = explode('+o+', $val); ?>

            <?php echo "<a class='gallery".$nid."' title='".$tabOflink[count($tabOflink) - 1]."' href='".$tabOflink[count($tabOflink) - 2]."'><img src='".$tabOflink[count($tabOflink) - 2]."' alt='miniature of taxon Biolit' title='' /></a>"; ?>
    		
        <?php endfor; ?>     
    		</div> <!-- FIN miniatureOfBestTaxon -->   
      </div>

     </div>

    </div>

  </div>


<?php else : ?>

  <div class='span4 just1blocAction' id="just1blocActionWithColorOf<?php echo $nid; ?>">

      <div class="forHide comingSoonMessage<?php echo $nid; ?>">
          <p>Prochainement disponible !</p>
      </div>

    <div class="container4just1blocAction<?php echo $nid; ?>">

    <div class='row-fluid'>
      <div class='span7'>
      <?php if($nid == 65): ?> <a href="<?php echo $base_url; ?>/a-vos-observations"><img src="<?php echo $base_url; ?>/sites/all/themes/bootstrap/images/sliderObsLibre_0.jpg" width="450" height="450" alt=""></a> <?php else: echo $avatar; endif; ?> 
      </div>  

    <?php if($difficulte == ''): ?>
    <?php $difficulte = 'Très Facile' ?>
    <?php endif; ?>
      
      <div class='span5'>
        <!-- Ligne picto du programme-->
        <!-- <div class='row-fluid'><div class='span12'><?php //echo "<img src='http://82.96.149.133".$thematique."' class='iconThematique'><br/>"; ?></div></div> -->
        <div class='row-fluid'><div class='span12' id='iconThematique'><?php echo $thematique; ?></div></div>
        
        <!-- Ligne difficulté -->
        <div class='row-fluid lineLevel'><div class='span12'><?php if($difficulte == 'Facile'){echo "<div class='iconLevelOfDifficulty'></div>"; }elseif($difficulte == 'Très Facile'){echo "<div class='iconLevelOfDifficulty0'></div>";}elseif($difficulte == 'Moyenne'){echo "<div class='iconLevelOfDifficulty1'></div>";}; ?>
          <p id='labelLevel'>
          <?php switch ($difficulte) {
              case 'Très Facile':
               echo 'Very easy';
              break;
              case 'Facile':
                echo 'Easy';
              break;
              case 'Moyenne':
                echo 'Medium';
              break;
              case 'Difficile':
                echo 'Difficult';
              break;
            
              default:
              # code...
              break;
          } ?>
          </p></div>
        </div>

        <!-- Ligne localité -->
        <div class='row-fluid lineLocalite'><div class='span12'><?php echo "<div class='iconLocalite'></div><p id='labelLocalite'>"; 
        switch ($facade) {
          case 'Méditerranée':
              echo 'Mediterranean';
          break;
          case 'Atlantique, Manche et Mer du Nord':
            echo 'Atlantic, Channel and North Sea';
          break;
          case 'Atlantique':
            echo 'Atlantic';
          break;
          case 'Atlantique, Manche et Mer du Nord, Méditerranée':
            echo 'Atlantic, Channel and North Sea, Mediterranean';
          break;
          
          default:
            # code...
            break;
        }
        ?></p></div></div>     
      </div> 

    </div>

    <div class='row-fluid' id='secondLineOfjust1Bloc'>
      
      <div class='span12'>
        <!-- titre traduit en js -->
        <h3 class='titleOfBlocAction'><?php if($nid == 7) echo "<a href=$base_url/the-new-arrivals?language=en>The new arrivals</a>"; else echo $title; ?></h3>

        <p class='descroOf1blocAction'><?php switch ($nid) {
            case 65:
            echo "Through your walks or dives, tell us about the biodiversity of your coastline. Be a witness of the seaside’s biological treasures with your camera.";
            break;
            case 11:
            echo "Do you love your coastline? Of all the activities and events that happen there, what do you consider to be a real threat? We are interested in YOUR VIEWS. Take a photo and tell us in a few words what, in your opinion, might put the biodiversity of the coastline in danger.";
            break;
            case 10:
            echo "Found on rocky coasts, where the sea rises and recedes, brown algae and their inhabitants: an extraordinary world that is also under pressure. Is it in danger?";
            break;
            case 9:
            echo "Start with the discovery of protected species, species that are characteristic of your coastline paths. A mix of scents, colors, and forms – vegetation forms the landscape and evolves over time. We are following the distribution of (ground-level) coastline vegetation.";
            break;
            case 8:
            echo "The sea also has seasons. Revealed by indicators that the waves deposit on the coastline, might these also be affected by climate change?";
            break;
            case 7:
            echo "“Accidently” introduced to our coasts, some species can proliferate and disrupt coastline life, while others do not. So to monitor them closely:  Let’s focus on these new arrivals!";
            break;
          
          default:
            # code...
            break;
        } ?> </p>
      </div>

      <div class='span12'>
        <?php $oneImg = explode(",", $especePhares); ?>
        <div id="miniatureOfBestTaxon">
        <?php for ($i=0;$i<count($oneImg);$i++): ?>

            <?php $val = $oneImg[$i]; ?>
            <?php $tabOflink = explode('+o+', $val); ?>

            <?php echo "<a class='gallery".$nid."' title='".$tabOflink[count($tabOflink) - 1]."' href='".$tabOflink[count($tabOflink) - 2]."'><img src='".$tabOflink[count($tabOflink) - 2]."' alt='thumbnails of taxon Biolit' title='' /></a>"; ?>
        
        <?php endfor; ?>     
        </div> <!-- FIN miniatureOfBestTaxon -->   
      </div>

     </div>

    </div>

  </div>

<?php endif; ?>
<!--
<div class='span4'>bloc</div>
<div class='span4'>bloc</div> -->
