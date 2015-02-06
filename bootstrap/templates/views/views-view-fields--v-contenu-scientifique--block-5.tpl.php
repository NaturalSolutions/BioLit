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
 global $base_path, $base_url,$user,$language;
                                              ///TEMPLATE FOR PLANETE MER
?>  

<?php foreach ($fields as $id => $field): ?>

<?php if ($id == 'title') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $title = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php endforeach; ?>

<?php if($language->language == 'fr'): ?>


  <div class="row-fluid">
    <div class="span12"><h1 class='page-header labeLikeH3'><?php echo $title; ?></h1></div>
  </div>

  <div class="row-fluid">
      
      <!-- Colone de texte -->
      <div class="span12">
          
          <p class="article"><a href='http://www.planetemer.org/' target="_blank" alt='Planète Mer' title='Planète Mer'>Planète Mer</a> est une association créée en 2007 qui a pour objectif la préservation de la vie marine et des activités humaines qui en dépendent. Elle a pour mission de :</p>

          <p>
            <ul>
            <li>pérenniser la ressource et l'emploi par une exploitation durable du milieu marin ;</li>
            <li>repenser les activités humaines à la lumière des nouveaux savoirs sur la biodiversité, pour protéger, gérer, ou réparer les écosystèmes qui les nourrissent ;</li>
            <li>grâce à l'information et la connaissance, donner à chacun les moyens d'agir en conscience sur son environnement.</li>
            </ul>
          </p>

          <p class="article">C’est dans le cadre de ce troisième pilier que Planète Mer et ses partenaires ont lancé en 2010 BioLit - un programme national de science collaborative sur la biodiversité littorale. Cette initiative est mise en œuvre par une équipe pluridisciplinaire :</p>

          <p>
            <ul>
            <li><b>Laurent Debas</b>, responsable de programme ;</li>
            <li>Le volet scientifique est assuré par <b>Ondine Cornubert</b>, chargée d’études scientifiques détachée au <a href='https://www.mnhn.fr/fr' target="_blank" title='Muséum national d’Histoire naturelle' alt='Muséum national d’Histoire naturelle'>Muséum national d’Histoire naturelle</a> (MNHN) pour BioLit. Ondine est sous la responsabilité conjointe d'Eric Feunteun, professeur au MNHN et Directeur du CRESCO (Service des stations Marines) à Dinard et de Frédéric Ysnel, maître de conférence à l'université de Rennes 1 et directeur du laboratoire Biodiversité et gestion des territoires ;</li>
            <li><b>Tristan Diméglio</b>, chargé de mission d’animation du réseau français BioLit Atlantique – Manche et Mer du Nord ;</li>
            <li><b>Lilita Vong</b>, chargée de mission d’appui aux programmes, pour BioLit Méditerranée et transfrontalier.</li>
            </ul>
          </p>

            <p><a href='http://www.planetemer.org/' alt='Planète Mer' target="_blank" title='Planète Mer'>Site internet de Planète Mer </a></p>
            <p><a href='http://www.planetemer.org/' alt='Planète Mer' target="_blank" title='Planète Mer'>Consulter et s’inscrire aux Newsletters de Planète Mer</a></p>
          

    
      </div>
  </div>
        
<?php else: ?>

  
  <div class="row-fluid">
    <div class="span12"><h1 class='page-header labeLikeH3'>Planète Mer</h1></div>
  </div>

  <div class="row-fluid">
      
      <!-- Colone de texte -->
      <div class="span12">
          
          <p class="article"><a href='http://www.planetemer.org/' target="_blank" alt='Planète Mer' title='Planète Mer'>Planète Mer</a> is an association created in 2007 with the aim of preserving marine life and the human activities that depend on it. It mission is to</p>

          <p>
            <ul>
            <li>maintain resources and employment through sustainable use of the marine environment; </li>
            <li>rethink human activities in the light of new knowledge about biodiversity, in order to protect, care for, or repair the ecosystems that support them; </li>
            <li>give everyone the means—thanks to information and knowledge—to act ethically towards their environment. </li>
            </ul>
          </p>

          <p class="article">Planète Mer and its partners launched BioLit in 2010 as part of the framework of this third strand. It is a national collaborative science program on coastline biodiversity. This initiative is implemented by a multidisciplinary team: </p>

          <p>
            <ul>
            <li><b>Laurent Debas</b>, program director;</li>
            <li>The scientific component is the responsibility of <b>Ondine Cornubert</b>, in charge of scientific studies, who is working for BioLit via the <a href='https://www.mnhn.fr/fr' target="_blank" title='Muséum national d’Histoire naturelle' alt='Muséum national d’Histoire naturelle'>Muséum national d’Histoire naturelle</a> (MNHN). Ondine works under the joint direction of Eric Feunteun, a professor at MNHN and Director of CRESCO (Service des stations Marines) in Dinard, and of Frédéric Ysnel, master of conferences at the université de Rennes 1 and director of the laboratoire Biodiversité et gestion des territoires;</li>
            <li><b>Tristan Diméglio</b>, responsible for running the BioLit Atlantique – Manche et Mer du Nord [Atlantic – Channel and North Sea] french network;</li>
            <li><b>Lilita Vong</b>, responsible for program support for BioLit Méditerranée and the international program.</li>
            </ul>
          </p>

            <p><a href='http://www.planetemer.org/' alt='Planète Mer' target="_blank" title='Planète Mer'>Planète Mer website</a></p>
            <p><a href='http://www.planetemer.org/' alt='Planète Mer' target="_blank" title='Planète Mer'>Read and subscribe to Planète Mer Newsletters</a></p>
          

    
      </div>
  </div>


<?php endif; ?>
