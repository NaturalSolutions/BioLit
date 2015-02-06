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
 global $base_path, $base_url,$user, $language;
                                              ///TEMPLATE FOR MENACES
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
  <div class="span12"><h1 class='page-header labeLikeH3'>Les espèces non-indigènes</h1></div>
</div>

<div class="row-fluid">
    
    <!-- Colone de texte -->
    <div class="span12">
     
    
    <p class="article">Une espèce non-indigène est une espèce animale ou végétale qui, pour une raison naturelle ou par le biais des activités humaines, est observée hors de son aire de répartition. Ces espèces sont intéressantes à repérer sur le littoral, et à signaler aux scientifiques et aux pouvoirs publics. Leur vitesse de progression et leur(s) nouvelle(s) aire(s) de répartition nous intéressent donc ! </p>

    <p class="article">
      <strong>Pourquoi ?</strong>
      <ul>
      <li>1 - Parce que parmi ces espèces, certaines (pas toutes) sont « invasives », c’est-à-dire qu’elles prolifèrent rapidement : leur aire de répartition s’étend rapidement et/ou le nombre de végétaux ou d’animaux augmente rapidement. Et l’installation d’une espèce invasive dans un nouvel environnement n’est pas sans conséquence pour l’écosystème d’accueil ! En Méditerranée, peut-être avez-vous entendu parler à ce sujet de deux algues que sont <i/>Caulerpa taxifolia</i> et <i>Caulerpa racemosa</i> ? En Atlantique ou en Manche – Mer du Nord, connaissez-vous la crépidule <i>Crepidula fornicata</i> ?</li>
      <li>2 – Parce que partir à la recherche des nouveaux arrivants permet aussi de détecter des zones privilégiées et plus vulnérables au démarrage d’invasions biologiques (zones à proximité de certains ports par exemple... ). Les activités humaines touchant à l’importation de la faune et de la flore, ou la navigation et les rejets associés d’eaux de ballasts ... peuvent en effet être à l’origine d’une partie de ces introductions d’espèces animales ou végétales. </li>
      <li>3 – Et parce l’étude des cas d’installation d’espèce « nouvelle arrivante » dans un nouvel environnement, invasive ou non, sur le littoral et surtout dans le milieu marin reste très pauvre par rapport au domaine terrestre : les informations sur le littoral manquent ! Les espèces ne connaissent nos frontières administratives, et signaler ces espèces, du local au national ou en international, à l’échelle d’une mer, a du sens pour les Etats européens maritimes engagés à travailler ensemble pour la protection du milieu marin (Directive européenne Cadre Stratégie Milieu Marin).</li>
      </ul>
    </p>
    

      <p class='article'>
      <strong>Quand et où ?</strong>
      <ul><li>Toute l’année !  Et sur tout le littoral, qu’on soit en balade sur les sentiers littoraux ou le nez sous l’eau !</li></ul>
      </ul>
      </p>
     
    </div>
</div>


<?php else : ?> 

<div class="row-fluid">
  <div class="span12"><h1 class='page-header labeLikeH3'>Non-native species</h1></div>
</div>

<div class="row-fluid">
    
    <!-- Colone de texte -->
    <div class="span12">
     
    
    <p class="article">A non native species is an animal or plant species which is recorded outside its distribution area, due to a natural reason or due to human activities. This species are interesting to spot on the coast, and to report to scientists and public authorities. Their progression rate of and new area(s) of occurrence provide really important informations to help to control and manage them !</p>

    <p class="article">
      <strong>Why ?</strong>
      <ul>
      <li>1 - Because among these species, some (not all) are "invasive“. That means they can proliferate rapidly : their distribution area can expand widely and/or the abundance of plants or animals increases rapidly . And so, the installation of an invasive species in a new environment may have impacts for the hosting ecosystem ! In the Mediterranean, you may have heard about the two algaes <i> Caulerpa racemosa </i> and <i> Caulerpa taxifolia </i> ? In the Atlantic and North Sea, do you know the slipper limpet <i> Crepidula fornicata </i>?</li>
      <li>2 – Because looking for helps us to identify the most sensitive zones which may be more affected by biological introductions (for example, some zones next to some harbours...). Human activites dealing with the importation of non-native species, or shipping with the associated releases of ballast waters ... can explain some cases of introduction of non-native species. </li>
      <li>3 – And because the studies of biological introductions of a “new immigrant" species, invasive or not, in coastal areas and the sea are scarce compared to the terrestrial habitats, there is a lack of data ! Species doesn’t care about our administrative boundaries, and reporting about these species in new areas helps to understand the spreading routes and mechanisms, from local to international scales, and makes sense for maritime European countries working together for the protection of the marine environment (Marine Framework Strategy Directive).</li>
      </ul>
    </p>
    

      <p class='article'>
      <strong>When and where ?</strong>
      <ul><li>Everywhere, all year long !  Make your observations along your coasts, walking, shipping or by scuba diving !</li></ul>
      </ul>
      </p>
     
    </div>
</div>

<?php endif; ?>  
