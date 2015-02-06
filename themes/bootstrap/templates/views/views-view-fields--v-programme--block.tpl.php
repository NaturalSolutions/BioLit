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
  	<?php if ($id == 'title') : ?>
  	<?php $title = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'field_description_du_programme') : ?>
  	<?php $fullDescroProg = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'field_avatar_du_programme') : ?>
  	<?php $avatar = $field->content; ?>  	
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
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
    <?php if ($id == 'field_protocole_version_pdf') : ?>
    <?php $protocole_pdf = $field->content; ?>    
    <?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
    <?php if ($id == 'field_capture_fiche_espece_phare') : ?>
    <?php $captureEspecesPhare = $field->content; ?>    
    <?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
    <?php if ($id == 'field_capture_fiche_espece_phar2') : ?>
    <?php $captureEspecesPhare2 = $field->content; ?>    
    <?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>


<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
    <?php if ($id == 'field_comment_participer') : ?>
    <?php $commentParticiper = $field->content; ?>    
    <?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>
<!--

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'field_especes_phares_programme') : ?>
  	<?php $especePhares = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>
-->
<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
    <?php if ($id == 'field_description_pdf') : ?>
    <?php $ficheEspecePharesPDF = $field->content; ?>   
    <?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
  	<?php if ($id == 'field_description_pdf_2') : ?>
  	<?php $ficheEspecePharesPDF2 = $field->content; ?>  	
  	<?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->content)): ?>
    <?php if ($id == 'nid') : ?>
    <?php $nid = $field->content; ?>   
    <?php endif; ?>
  <?php endif; ?>  
<?php endforeach; ?>

<br/>
<!-- Le titre -->
<div class='row-fluid' id='firstBandeauOnProgPage'>
  <div class='span12'>
  
    <div class='span8' id='imageAvatarOnProgPage' style="<?php if($nid == 65){ echo 'background-position: 100% 50%;'; } ?>background-image:url(<?php echo $avatar; ?>);">
    <?php if($nid == 65): ?>
      <p>Laurent DEBAS – Littoral du Golfe de Saint-Florent en Corse</p>
      <?php elseif($nid == 7): ?>
      <p>Adrien WECQUEL – Le crabe Sally pied léger (<i>Percnon gibbesi</i>)</p>
      <?php elseif($nid == 247): ?>
      <p>Adrien WECQUEL – The Sally Lightfoot crab (<i>Percnon gibbesi</i>)</p>
      <?php elseif($nid == 8): ?>
      <p>Frédéric BASSEMAYOUSSE – La barque de Saint Jean (<i>Velella velella</i>)</p>
      <?php elseif($nid == 10): ?>
      <p>Laurent DEBAS – Méli-mélo d’algues brunes</p>
      <?php elseif($nid == 9): ?>
      <p>Bernadette HUYNH-TAN – Astérolide maritime (<i>Pallenis maritima</i>)</p>
      <?php elseif($nid == 11): ?>
      <p>Laurent DEBAS – Macro-déchets rejetés par les vagues sur la plage du Prado, après tempête.</p>
    <?php endif; ?>
    </div>
    
    <div class='span4' id="blocColorInProg<?php echo $nid; ?>">
        <div class='row-fluid'>
          <div class='span12'>
          <h1 id='titleOfProgPage' class="page-header">
            <?php if($nid == 9){ echo "Chlorophylle<br/>Mania"; }
            elseif($nid == 11){echo "Attention,<br/>menace ?"; }
            elseif($nid == 10){echo "Algues brunes et<br/>bigorneaux"; }
            elseif($nid == 7){echo "Les nouveaux<br/>arrivants"; }
            elseif($nid == 247){echo "The new arrivals"; }
            elseif($nid == 8){echo "Les saisons<br/>de la Mer "; } 
            elseif($nid == 65){echo "À vos <br/> observations !"; } ?>
          </h1>
        </div>
      </div>
      
     

      <!-- Les Icon -->
      <div class='row-fluid' id='lesIconInProg'>
        <center>

        <div class="span4">
          

          <?php if($_SESSION['language'] = 'en'): ?>
            <?php if($nid == 247) $facade = "Atlantic, English Channel and North Sea, Mediterranean Sea"; ?>
          <?php endif; ?>

          <div class="iconLocalite"></div>&nbsp&nbsp&nbsp<?php echo $facade; ?>   
        </div>

        <div class='span4'>
          
          <?php if(!isset($difficulte)): ?> 
          
            <div class='iconLevelOfDifficulty0'></div>&nbsp&nbsp&nbsp<?php echo 'Très Facile'; ?>  
          
          <?php elseif($difficulte == 'Moyenne' || $difficulte == 'Medium'): ?>

            <div class='iconLevelOfDifficulty1'></div>&nbsp&nbsp&nbsp<?php echo $difficulte; ?>
          
          <?php elseif($difficulte == 'Facile'): ?>
      
            <div class='iconLevelOfDifficulty'></div>&nbsp&nbsp&nbsp<?php echo $difficulte; ?>

          <?php endif; ?>   
          
        </div> 

        <div class='span4' id="specialPositioningForThisSpan<?php echo $nid; ?>">
         <?php echo $thematique; ?>
        </div> 

        </center>
      </div>
    </div>

  </div>
</div>



<br/>

<div class='row-fluid' id='zoneDescroProg'>
	<div class='span12' id='contentOfDescroProg'>
		<?php echo $fullDescroProg; ?>
	</div>
</div>

 <!-- <?php //echo $commentParticiper; ?> -->
<?php if($nid == 10): ?>
  <div class='row-fluid' id='lineWithstepInProg'>
    <div class='span12'>
      <center>
      <div class='span2 offset1'>
        <div class='iconStepInProg' id='step1inprog10'></div>
        <p>Préparez votre sortie en étudiant les photos des six algues brunes que vous allez devoir reconnaître sur le terrain (ci-dessous).</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step2inprog10'></div>
       <p>Rendez-vous sur la portion du littoral rocheux et couvert d’algues brunes que vous souhaitez explorer et notez l’heure d’arrivée sur le site. Si possible, notez le coefficient de marée et l’heure de marée basse.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step3inprog10'></div>
        <p>Notez le nom du site et un point de repère, puis prenez une photo du paysage vu de la terre vers la mer.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step4inprog10'></div>
        <p>Dès que vous pensez apercevoir une des algues brunes étudiées, prenez en photo chaque coquillage sur cette algue (couple algue - coquillage).</p>
      </div>
      <div class='span2'>
        <div class='iconStepInProg' id='step5inprog10'></div>
        <p>Notez l’heure de fin d’observation et, de retour à la maison, cliquez sur le bouton ci-dessous pour enregistrer vos données !</p>
      </div>
      </center>
    </div>
  </div>
<?php endif;?>
<?php if($nid == 11): ?>
  <div class='row-fluid' id='lineWithstepInProg'>
    <div class='span12'>
      <center>
      <div class='span2 offset1'>
        <div class='iconStepInProg' id='step1inprog11'></div>
        <p>Rendez-vous sur le littoral et notez l’heure d’arrivée sur le site d’observation.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step2inprog11'></div>
       <p>Notez le nom du site et un point de repère (parking, phare, pointe rocheuse, etc.).</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step3inprog11'></div>
        <p>Photographiez le paysage en vous tournant vers la Mer si vous êtes à pied ou vers la Terre si vous êtes dans l’eau.</p>
      </div> 
      <div class='span2'>
        <div class='iconStepInProg' id='step4inprog11'></div>
        <p>Photographiez ce que vous considérez comme étant une menace.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step5inprog11'></div>
        <p>Notez l’heure de fin d’observation et, de retour à la maison, cliquez sur le bouton ci-dessous pour enregistrer vos observations et écrire vos commentaires !</p>
      </div>  
      </center>
    </div>
  </div>
<?php endif;?><!-- Les saisons de la mer-->
<?php if($nid == 8): ?>
  <div class='row-fluid' id='lineWithstepInProg'>
    <div class='span12'>
      <center>
      <div class='span2 offset1'>
        <div class='iconStepInProg' id='step1inprog8'></div>
        <p>Préparez votre sortie en étudiant les fiches des espèces à reconnaître sur le littoral (ci-dessous).</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step2inprog8'></div>
        <p>Rendez-vous sur la portion du littoral que vous souhaitez explorer et notez l’heure d’arrivée sur le site.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step3inprog8'></div>
        <p>Notez le nom du site et un point de repère, puis prenez une photo du paysage vu de la terre vers la mer. Si possible, photographiez la <strong>laisse de mer.</strong></p>
      </div> 
      <div class='span2'>
        <div class='iconStepInProg' id='step4inprog8'></div>
        <p>Photographiez chaque espèce échouée proposée dans la liste ci-dessous, n’hésitez pas à nous en suggérer de nouvelles.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step5inprog8'></div>
        <p>Notez l’heure de fin d’observation et, de retour à la maison, cliquez sur le bouton ci-dessous pour enregistrer vos données !</p>
      </div>  
      </center>
    </div>
  </div>
<?php endif;?>
<!-- NOUVEAUX ARRIVANTS-->
<?php if($nid == 7): ?>
  <div class='row-fluid' id='lineWithstepInProg'>
    <div class='span12'>
      <center>
      <div class='span2 offset1'>
        <div class='iconStepInProg' id='step1inprog7'></div>
        <p>Préparez votre sortie en étudiant les fiches des nouveaux arrivants à reconnaître sur le littoral (ci-dessous).</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step2inprog7'></div>
        <p>Rendez-vous sur la portion du littoral que vous souhaitez explorer et notez l’heure d’arrivée sur le site.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step3inprog7'></div>
        <p>Notez le nom du site et un point de repère, puis prenez une photo du paysage en vous tournant vers la Mer si vous êtes à pied ou vers la Terre si vous êtes dans l’eau.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step4inprog7'></div>
        <p>Photographiez chaque espèce rencontrée proposée dans la liste ci-dessous, n’hésitez pas à nous en suggérer de nouvelles.</p>
      </div>
      <div class='span2'>
        <div class='iconStepInProg' id='step5inprog7'></div>
        <p>Notez l’heure de fin d’observation et, de retour à la maison, cliquez sur le bouton ci-dessous pour enregistrer vos données !</p>
      </div> 
      </center>
    </div>
  </div>
<?php endif;?>
<!-- NOUVEAUX ARRIVANTS VERSION ENGLAIS-->
<?php if($nid == 247): ?>
  <div class='row-fluid' id='lineWithstepInProg'>
    <div class='span12'>
      <center>
      <div class='span2 offset1'>
        <div class='iconStepInProg' id='step1inprog7'></div>
        <p>Prepare your field trip by studying the description of new introduced species (below).</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step2inprog7'></div>
        <p>Go to the shore and note the date and time you start your observation.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step3inprog7'></div>
        <p>Note the name of the observation site and any landmark. Then take a picture of the seascape: look at the sea if you are on land or turn to land if you are at sea.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step4inprog7'></div>
        <p>Take pictures for each <a href="<?php echo $base_url; ?>/espece-non-indigene?language=en">non-native species.</a></p>
      </div>
      <div class='span2'>
        <div class='iconStepInProg' id='step5inprog7'></div>
        <p>Note the time you ended your survey. Back at home, click the button below to save your observations!</p>
      </div> 
      </center>
    </div>
  </div>
<?php endif;?>
<?php if($nid == 9): ?> <!-- Chlorophylle-mania -->
  <div class='row-fluid' id='lineWithstepInProg'>
    <div class='span12'>
      <center>
      <div class='span2'>
        <div class='iconStepInProg' id='step1inprog9'></div>
        <p>Préparez votre sortie en étudiant les fiches des nouveaux arrivants à reconnaître sur le littoral (ci-dessous).</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step2inprog9'></div>
       <p>Rendez-vous sur la portion du littoral que vous souhaitez explorer et notez l’heure d’arrivée sur le site.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step3inprog9'></div>
        <p>Notez le nom du site et un point de repère, puis prenez une photo du paysage en vous tournant vers la Mer si vous êtes à pied ou vers la Terre si vous êtes les pieds dans l’eau.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step4inprog9'></div>
        <p>Photographiez chaque espèce rencontrée proposée dans la liste ci-dessous (1 photo d’ensemble, et 1 ou 2 photos de feuilles et de fleurs ), n’hésitez pas à nous suggérer de nouvelles espèces.</p>
      </div> 
      <div class='span2'>
        <div class='iconStepInProg' id='step5inprog9'></div>
        <p>Notez à chaque fois, le long de votre parcours, le lieu le plus précis possible où vous avez pris les photos pour pouvoir l’indiquer ensuite.</p>
      </div> 
      <div class='span2'>
        <div class='iconStepInProg' id='step6inprog9'></div>
        <p>Notez l’heure de fin d’observation et, de retour à la maison, cliquez sur le bouton ci-dessous pour enregistrer vos données !</p>
      </div> 
      </center>
    </div>
  </div>
<?php endif;?>
<?php if($nid == 65): ?><!-- Obs libres -->
  <div class='row-fluid' id='lineWithstepInProg'>
    <div class='span12'>
      <center>
      <div class='span2 offset1'>
        <div class='iconStepInProg' id='step1inprog65'></div>
        <p>Rendez-vous sur le littoral et notez l’heure d’arrivée sur le site d’observation.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step2inprog65'></div>
       <p>Notez le nom du site et un point de repère (parking, phare, pointe rocheuse, etc.).</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step3inprog65'></div>
        <p>Photographiez le paysage en vous tournant vers la Mer si vous êtes à pied ou vers la Terre si vous êtes dans l’eau.</p>
      </div>  
      <div class='span2'>
        <div class='iconStepInProg' id='step4inprog65'></div>
        <p>Photographiez les espèces animales ou végétales rencontrées (vivantes ou échouées).</p>
      </div>
      <div class='span2'>
        <div class='iconStepInProg' id='step5inprog65'></div>
        <p>Notez l’heure de fin d’observation et, de retour à la maison, cliquez sur le bouton ci-dessous pour enregistrer vos observations !</p>
      </div> 
      </center>
    </div>
  </div>
<?php endif;?>

<div class='row-fluid'>
  <div class="span12" id=''>


    <br/>
     <?php if(isset($protocole_pdf) && $protocole_pdf != ''): ?>
      <p class='labelProtocoleADL'>NB: la <a href="<?php echo $protocole_pdf; ?>" alt='protocole au format PDF' class='linkLabelProtocoleADL'>fiche de terrain</a> peut vous guider lors de votre sortie.</p>
    <?php endif; ?>
  </div>  
</div>
<br/>




<div class='row-fluid'>
  <?php if($user->uid): ?>
    <?php 
    switch($nid):  
    case 10:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/node/add/programme-n1'>J’enregistre mes observations</a></h3></center>";
    break;
    case 65:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/node/add/programme-obs-libre'>J’enregistre mes observations</a></h3></center>";
    break;
    case 8:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/node/add/programme-saisons'>J’enregistre mes observations</a></h3></center>";
    break;
    case 7:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/node/add/programme-new?language=fr'>J’enregistre mes observations</a></h3></center>";
    break;
    case 247:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/node/add/programme-new?language=en'>Save my observations</a></h3></center>";
    break;
    case 9:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/node/add/programme-flore'>J’enregistre mes observations</a></h3></center>";
    break;
    case 11:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/node/add/programme-dechet'>J’enregistre mes observations</a></h3></center>";
    break;
    endswitch;
    ?>
  <?php else: ?>
    <?php 
    switch($nid):  
    case 10:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/user/login?&destination=node/add/programme-n1'>J’enregistre mes observations</a></h3></center>";
    break;
    case 65:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/user/login?&destination=node/add/programme-obs-libre'>J’enregistre mes observations</a></h3></center>";
    break;
    case 8:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/user/login?&destination=node/add/programme-saisons'>J’enregistre mes observations</a></h3></center>";
    break;
    case 7:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/user/login?language=fr&destination=node/add/programme-new'>J’enregistre mes observations</a></h3></center>";
    break;
    case 247:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/user/login?language=en&destination=node/add/programme-new'>Save my observations</a></h3></center>";
    break;
    case 9:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/user/login?&destination=node/add/programme-flore'>J’enregistre mes observations</a></h3></center>";
    break;
    case 11:
      echo "<center><h3 class='span12'><a class='link2saisieDonnee".$nid."' href='".$base_url."/user/login?&destination=node/add/programme-dechet'>J’enregistre mes observations</a></h3></center>";
    break;
    endswitch;
    ?>
  <?php endif; ?>
 </div>

<br/>
<br/>
<br/>
<br/>
<!-- Fiche Autres Immigrants pour version EN -->
<?php if($nid == 247 || $nid == 7): ?>
<div class="row-fluid inRowDLpdfEspecePhare">
  


<div class="row-fluid">
  <h3 class="span12 labelLikeH3"><?php if($nid == 247) echo "Atlantic, English Channel and North Sea <a href='$base_url/sites/all/themes/bootstrap/images/MMdN_GG_ANG.pdf' class='link2DlOtherFichesTax' title='List of other immigrant species' alt='List of other immigrant species'><div id='iconDLmeNAEN'>See more non-native species</div></a>"; elseif($nid == 7) echo "Atlantique, Manche et Mer du Nord <a href='$base_url/sites/all/themes/bootstrap/images/MMdN_GG_FR.pdf' class='link2DlOtherFichesTax' title=\"Liste d'autres espèces non-indigènes\" alt='Liste des autres espèces non-indigènes'><div id='iconDLmeNAEN'>Plus d'espèces non-indigènes</div></a>"; ?></h3>
</div>

  <?php if(isset($ficheEspecePharesPDF2) || isset($captureEspecesPhare2)): ?>
  <?php $onePDF2 = explode(",", $ficheEspecePharesPDF2); ?>
  <?php $oneCapturePDF2 = explode(",", $captureEspecesPhare2); ?>
  <?php $cpt2 = count($onePDF2); ?>

    <div class="row-fluid foldSlideShowOf<?php echo $nid; ?>">
    <div class='span12'>
    <div class="row-fluid flexslider2">
      <ul class='slides'>
      <?php for ($i=0;$i<$cpt2;$i++): ?>
        <?php $justTheName2 = explode("/", $oneCapturePDF2[$i]); ?>
        <?php $justTheName2 = explode("?", $justTheName2[count($justTheName2) -1 ]); ?>
        <?php $justTheName2 = explode(".", $justTheName2[count($justTheName2) - 2 ]); ?>
        <li>
          <div class="span12">

            <a class='galleryOfScreenPdf2' title="<?php echo urldecode($justTheName2[count($justTheName2) - 2 ]); ?>" href="<?php echo $oneCapturePDF2[$i]; ?>"><img src="<?php echo $oneCapturePDF2[$i]; ?>" title='fiche espèce - BioLit' rel='gal2' alt=''/>
            <p><?php if($nid == 247){
                 $tmp = urldecode($justTheName2[count($justTheName2) - 2 ]); 
                 $tmp = explode('_', $tmp);
                 if(count($tmp) > 1) echo $tmp[ count($tmp) - 2 ];
                 else echo urldecode($justTheName2[count($justTheName2) - 2 ]);

            }elseif($nid == 7){
                 $tmp = urldecode($justTheName2[count($justTheName2) - 2 ]); 
                 $tmp = explode('_', $tmp);
                 if(count($tmp) > 1) echo $tmp[ count($tmp) - 2 ];
                 else echo urldecode($justTheName2[count($justTheName2) - 2 ]);
            }
            ?></p>
            </a>

            <a href="<?php echo $onePDF2[$i]; ?>" <?php if($nid == 10): ?> download="<?php echo $justTheName2[count($justTheName2) - 2 ]; ?>" <?php endif; ?>class='link2PdfEspecePhare' id="link2PdfEspecePhare<?php echo $i; ?>" alt='protocole au format PDF'></a>
            

          </div>
        </li>
      <?php endfor; ?> 
      </ul>
    </div> <!-- fin flexslider2 -->
    </div>
    </div>
    </div>
<br/>
<br/>
<br/>
<?php endif; ?>
<?php endif; ?>


<!-- DL PDF FICHE ESPECE-->
<div class='row-fluid inRowDLpdfEspecePhare'>
  <?php if(isset($ficheEspecePharesPDF) || isset($captureEspecesPhare)): ?>
  <?php $onePDF = explode(",", $ficheEspecePharesPDF); ?>
  <?php $oneCapturePDF = explode(",", $captureEspecesPhare); ?>
  
  <?php $cpt = count($onePDF); ?>
    

    <div class='row-fluid'>
      <h3 class="span12"><?php if($nid == 10) echo 'Les algues à reconnaître'; elseif($nid == '247') echo "Mediterranean Sea<a href='$base_url/sites/all/themes/bootstrap/images/MO_ANG.pdf' class='link2DlOtherFichesTax' title='List of other immigrant species' alt='List of other immigrant species'><div id='iconDLmeNAEN'>See more non-native species</div></a>"; elseif($nid == '7') echo "Mer méditerranée<a href='$base_url/sites/all/themes/bootstrap/images/MO_FR.pdf' class='link2DlOtherFichesTax' title=\"Liste d'autres espèces non-indigènes\" alt=\"Liste d'autres espèces non-indigènes\"><div id='iconDLmeNAEN'>Plus d'espèces non-indigènes</div></a>"; else echo 'Fiches espèces'; ?></h3>  
    </div>
  
    <div class="row-fluid foldSlideShowOf<?php echo $nid; ?>">
    <div class='span12'>
    <div class="row-fluid flexslider">
      <ul class='slides'>
      <?php for ($i=0;$i<$cpt;$i++): ?>
        <?php $justTheName = explode("/", $oneCapturePDF[$i]); ?>
        <?php $justTheName = explode("?", $justTheName[count($justTheName) -1 ]); ?>
        <?php $justTheName = explode(".", $justTheName[count($justTheName) - 2 ]); ?>
        <li>
          <div class="span12">

          <a class='galleryOfScreenPdf' title="<?php echo urldecode($justTheName[count($justTheName) - 2 ]); ?>" href="<?php echo $oneCapturePDF[$i]; ?>"><img src="<?php echo $oneCapturePDF[$i]; ?>" rel='gal' alt=''/>
          <?php if($nid == 10 || $nid == 7 || $nid == 247 || $nid == 9): ?>
            <p>
            <?php

            $tmp = urldecode($justTheName[count($justTheName) - 2 ]); 
            $tmp = explode('_', $tmp);
            
            if( $tmp[ count($tmp) - 2 ] == '') echo urldecode($justTheName[count($justTheName) - 2 ]); 
            else echo $tmp[ count($tmp) - 2 ];

            ?></p>
          <?php elseif($nid == 8): ?>
            <?php if($i < $cpt - 3) echo "<p class='spring_icon'>Printemps</p>"; else echo "<p class='spring_summer_icon'>Printemps - été</p>"; ?>
          <?php endif; ?></a>

          <a href="<?php echo $onePDF[$i]; ?>" <?php if($nid == 10): ?> download="<?php echo $justTheName[count($justTheName) - 2 ]; ?>" <?php endif; ?>class='link2PdfEspecePhare' id="link2PdfEspecePhare<?php echo $i; ?>" alt='protocole au format PDF'></a>

          </div>
        </li>
      <?php endfor; ?> 
      </ul>
    </div>
    </div>
    </div>


    
  <?php endif; ?> 

</div>


<br/>
<br/>
<br/>


<?php if($nid == 10): ?>

<!-- Ajout de la div contenant le ptit text a main leve -->
<?php echo '<div id="containerOflabelWithPen"><div id="labelWithPenFR"></div></div>'; ?>

<div class='row-fluid'>
  <h3 class="span12 labeLikeH3">Dernières observations</h3>  
</div>

<!-- NOUVEAUX ARRIVANTS-->
<div class="rown-fluid">

  <!-- Affichage des photos d'obs -->
  <div class="span9" id='photosZoneII'><?php print views_embed_view('observations_dans_un_programme','block_1','programme_n1'); ?></div>
  <!-- Affichage de la carte -->
  <div class="span3"><?php print views_embed_view('observations_dans_un_programme','block_3','programme_n1'); ?></div>

</div>

<?php elseif($nid == 65): ?>

  <!-- Ajout de la div contenant le ptit text a main leve -->
<?php echo '<div id="containerOflabelWithPen"><div id="labelWithPenFR"></div></div>'; ?>

<div class='row-fluid'>
  <h3 class="span12 labeLikeH3">Dernières observations</h3>  
</div>

<!-- NOUVEAUX ARRIVANTS-->
<div class="rown-fluid">

  <!-- Affichage des photos d'obs -->
  <div class="span9" id='photosZoneII'><?php print views_embed_view('observations_dans_un_programme','block_1','programme_obs_libre'); ?></div>
  <!-- Affichage de la carte -->
  <div class="span3"><?php print views_embed_view('observations_dans_un_programme','block_3','programme_obs_libre'); ?></div>

</div>

<?php elseif($nid == 8): ?>

<!-- Ajout de la div contenant le ptit text a main leve -->
<?php echo '<div id="containerOflabelWithPen"><div id="labelWithPenFR"></div></div>'; ?>

<div class='row-fluid'>
  <h3 class="span12 labeLikeH3">Dernières observations</h3>  
</div>

<!-- NOUVEAUX ARRIVANTS-->
<div class="rown-fluid">

  <!-- Affichage des photos d'obs -->
  <div class="span9" id='photosZoneII'><?php print views_embed_view('observations_dans_un_programme','block_1','programme_saisons'); ?></div>
  <!-- Affichage de la carte -->
  <div class="span3"><?php print views_embed_view('observations_dans_un_programme','block_3','programme_saisons'); ?></div>

</div>

<?php elseif($nid == 7 || $nid == 247): ?>

<!-- Ajout de la div contenant le ptit text a main leve -->
<?php if($language->language == 'en') echo '<div id="containerOflabelWithPen"><div id="labelWithPen"></div></div>'; else echo '<div id="containerOflabelWithPen"><div id="labelWithPenFR"></div></div>'; ?>


<div class='row-fluid'>  
  <h3 class="span12 labeLikeH3"> <?php if($nid == 7) echo 'Dernières observations'; else echo 'Last observations'; ?></h3>  
</div>

<!-- NOUVEAUX ARRIVANTS-->
<div class="rown-fluid">

  <!-- Affichage des photos d'obs -->
  <div class="span9" id='photosZoneII'><?php print views_embed_view('observations_dans_un_programme','block_1','programme_new'); ?></div>
  <!-- Affichage de la carte -->
  <div class="span3"><?php print views_embed_view('observations_dans_un_programme','block_3','programme_new'); ?></div>

</div>

<?php elseif($nid == 9): ?>

<!-- Ajout de la div contenant le ptit text a main leve -->
<?php echo '<div id="containerOflabelWithPen"><div id="labelWithPenFR"></div></div>'; ?>

<div class='row-fluid'>
  <h3 class="span12 labeLikeH3">Dernières observations</h3>  
</div>

<!-- Chlorophyle mania -->
<div class="rown-fluid">

  <!-- Affichage des photos d'obs -->
  <div class="span9" id='photosZoneII'><?php print views_embed_view('observations_dans_un_programme','block_1','programme_flore'); ?></div>
  <!-- Affichage de la carte -->
  <div class="span3"><?php print views_embed_view('observations_dans_un_programme','block_3','programme_flore'); ?></div>

</div>

<?php elseif($nid == 11): ?>

  <!-- Ajout de la div contenant le ptit text a main leve -->
<?php echo '<div id="containerOflabelWithPen"><div id="labelWithPenFR"></div></div>'; ?>

<div class='row-fluid'>
  <h3 class="span12 labeLikeH3">Dernières observations</h3>  
</div>

<!-- DECHETS -->
<div class="rown-fluid">

  <!-- Affichage des photos d'obs -->
  <div class="span9" id='photosZoneII'><?php print views_embed_view('observations_dans_un_programme','block_1','programme_dechet'); ?></div>
  <!-- Affichage de la carte -->
  <div class="span3"><?php print views_embed_view('observations_dans_un_programme','block_3','programme_dechet'); ?></div>

</div>

<?php endif; ?>
