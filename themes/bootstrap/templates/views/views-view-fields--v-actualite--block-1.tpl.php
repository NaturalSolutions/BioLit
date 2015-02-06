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

<?php if ($id == 'title') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $title = $field->content; ?>
  <?php endif; ?>
<?php endif;?>


<?php if ($id == 'body') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $body = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'field_image_actu') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $image = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'nid') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $nid = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'created') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $created = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php endforeach; ?>

		

<div class="row-fluid uneActu">

<?php if($nid == 246): ?>

<div class="span3 hasImage">
    <?php echo "<span id='imgNew5'>$image</span>"; ?><small class='specialLegendNew5'> L’Institut Universitaire Européen de la Mer <br/>© IUEM </small>
</div>
<div class="span9">
    <h4><?php echo $title; ?></h4>
    <i><?php echo $created; ?></i>
    <strong>L’université de Bretagne Occidentale tient forum</strong>
    <br/>
    <br/>
    <p>
      C’est à Plouzané, dans le Finistère, les 23 et 24 avril derniers, que s’est tenu le forum "Observations participatives en science de la mer et du littoral", organisé par L'Institut Universitaire Européen de la Mer. La table ronde intitulée « Les artisans et animateurs de l’observation participative en science de la mer et du littoral » a réuni quatre programmes : Phénomer (suivi des eaux colorées en mer liées aux floraisons de phytoplancton), Ecoflux (qualité des eaux de rivières), Apecs (suivi des populations de raies et de requins), et BioLit (pour son suivi des ceintures algales sur l’estran Atlantique-Manche-Mer du Nord), chacun représenté par un binôme composé d’un animateur de projet et d’un scientifique. <br/>L’association Planète Mer et Eric Feunteun (Professeur au Muséum national d’Histoire naturelle et Responsable scientifique du programme BioLit), ont partagé leur expérience avec la salle. Bilan positif pour deux bonnes journées placées sous le signe du partage d’expérience !
    </p>
</div>


<?php elseif($nid == 245): ?>


<div class="span9">
    <h4><?php echo $title; ?></h4>
    <i><?php echo $created; ?></i>
    <strong>Les Charentais deviennent BioLitiens !</strong>
    <br/>
    <br/>
    <p>
      Le 2 mai, Estelle Gironnet, chargée de projet au Parc de l'Estuaire, relais du réseau BioLit en Charente Maritime, donnait rendez-vous à 15 participants sur le thème « Observer et protéger le littoral estuarien ». Cette sortie sur le terrain aux abords de la pointe de Vallières, sur la commune de Saint-Georges-de-Didonne (17), co-organisée et animée par Planète Mer a été l’opportunité pour des observations intéressantes … il n'y avait quasiment pas de gastéropodes sur l’estran ! Et c’est un résultat ! A l’issue de cette journée, 9 nouvelles fiches d’observations dûment complétées par de bonnes prises de vue, sont donc venues compléter les 300 fiches déjà acquises sur les littoraux de l'Atlantique, de la Manche et de la Mer du Nord.
    </p>
  </div>

<div class="span3 hasImage">
    <?php echo "<span id='imgNew4'>$image</span>"; ?><small class='specialLegendNew4'> Retrouvez le Parc de l’Estuaire sur <a href='http://www.leparcdelestuaire.com/' target='_blank' title="vers le site du parc de l'esturaire" alt="vers le site du parc de l'esturaire">son site</a><br/>© Parc de l’Estuaire </small>
</div>
  

<?php elseif($nid == 244): ?>

  <div class="span3 hasImage">
    <?php echo "<span id='imgNew3'>$image</span>"; ?><small class='specialLegendNew3'>Ouverture de la saison du Parc de l’Estuaire <br/> © Planète Mer </small>
</div>
<div class="span9">
    <h4><?php echo $title; ?></h4>
    <i><?php echo $created; ?></i>
    <strong>Les étudiants sur l’estran de l'Ile de Bailleron</strong>
    <br/>
    <br/>
    <p><?php //echo $body; ?>
    Les étudiants en Licence 2 à l'Université de Vannes ont participé durant le mois d'avril aux observations BioLit sur l'Ile de Bailleron, une Station Marine de l'Université de Rennes 1 qui se situe au fond du Golfe du Morbihan.
    <br/>
    <br/>
    Quatre groupes d'étudiants se sont ainsi relayés pendant une semaine sur l'estran situé au nord-ouest de l'ile afin d'observer les grandes algues brunes et les gastéropodes associés, à travers le protocole réservé aux plus expérimentés, le protocole de niveau 3.
    <br/>
    <br/>
    Merci pour leur participation et leur engagement dans BioLit !
    </p>
  </div>

<?php elseif($nid == 243): ?>


  <div class="span10">
    <h4><?php echo $title; ?></h4>
    <i><?php echo $created; ?></i>
    <strong>Un nouveau territoire à explorer pour BioLit ! </strong>
    <br/>
    <br/>
    <p><?php //echo $body; ?>
    A l'appel des associations Hirondelle et CPIE Loire Océanes, 6 structures (Loire Océane Environnement - Les alguistes du Castelli - Bretagne Vivante SEPNB - LPO44 - DECOS - La Huppe du Paradou) s'étaient donné rendez-vous fin mars à Préfailles, à l'embouchure de la Loire, pour une session d'information et de formation autour de la thématique de suivi des algues brunes, animée par Planète mer. 
    <br/>
    <br/>
    La forte régression des fucales observée par les chercheurs, -40% entre 1980 et 2004, a été pour ces associations un élément de motivation supplémentaire à participer au programme BioLit. 
    <br/>
    <br/>
    Les observations des futurs biolitiens confirmeront-elles cette tendance ? Quelles peuvent en être les causes et les conséquences sur les communautés de gastéropodes ?
    <br/>
    <br/>
    <i>Planète Mer remercie chaleureusement la mairie de Préfailles pour son accueil ainsi que les structures présentes !</i>
    </p>
  </div>
  <div class="span2 hasImage">
    <?php echo "<span id='imgNew4'>$image</span>"; ?><small class='specialLegendNew4'>cartographie de la couverture algale par image satellite - Pointe de saint Gildas - commune de Préfailles (44) <br/> © Bio – Littoral </small>
  </div>


<?php elseif($nid == 89): ?>

  <div class="span9">
    <h4><?php echo $title; ?></h4>
    <i><?php echo $created; ?></i>
    <strong>Université de La Rochelle et de Guingamp </strong>
    <br/>
    <br/>
    <p><?php //echo $body; ?>
    Une soixantaine d’étudiants de l’université de La Rochelle et de l’université de Guingamp se sont prêtés à un exercice demandé par leur professeur, les menant jusqu’au littoral Atlantique. 
    <br/>
    <br/>
    Leur mission ? Récupérer un grand nombre d’observations sur l’état de la biodiversité côtière. En suivant le guide du protocole BioLit, élaboré par Planète Mer, ils ont collecté des informations et des photographies des espèces marines. 
    <br/>
    <br/>
    Les sorties BioLit sont à la fois enrichissantes pour ces étudiants qui mettent en pratique leurs cours théoriques, et à la fois précieuses pour les chercheurs qui cherchent à mieux comprendre le milieu pour le protéger. A terme, une douzaine de laboratoires de la région seront impliqués dans l’organisation de ces sorties.
    </p>
  </div>
  <div class="span3 hasImage">
    <?php echo "<span id='imgLastNew'>$image</span>"; ?><small>© Planète Mer </small>
  </div>

<?php else: ?>

  <div class="span3 hasImage">
    <?php echo $image; ?><small>© Planète Mer</small>
    
  </div>

  <div class="span9">
    <h4><?php echo $title; ?></h4>
    <i><?php echo $created; ?></i>
    <strong>2 500m² dédiés à la nature </strong>
    <br/>
    <br/>
    <p><?php //echo $body; ?>
    Les 7, 8 et 9 février 2014, Planète Mer était présente au côté des 70 exposants réunis, à Saint Brieuc, pour le 9ième festival Natur’Armor, organisé par l'association Vivarmor Nature. Le Palais des Congrès, qui abritait l’exposition, s’est transformé en un véritable espace naturel, propice aux échanges entre les exposants et les quelques 7 500 participants venus des quatre coins de Bretagne.
    <br/>
    <br/>
    L’équipe de Planète Mer a présenté son programme de science participative sur la biodiversité littorale (BioLit), en offrant la possibilité aux visiteurs de s'essayer à l'identification des bigorneaux de l'estran sous la forme d'un jeu quizz et mettant à disposition du public ses fiches espèces et une reproduction du milieu dans un aquarium. 
    <br/>
    <br/>
    Planète Mer remercie les visiteurs qui sont passés sur le stand et leur donne rendez-vous sur le site <a href='http://www.biolit.fr/' alt='BioLit' title='BioLit'> BioLit.fr </a>, dont une nouvelle version sera mise en ligne le 1ier avril.
    </p>
  </div>

<?php endif; ?>

</div>
	