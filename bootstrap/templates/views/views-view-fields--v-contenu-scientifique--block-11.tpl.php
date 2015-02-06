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
  <div class="span12"><h1 class='page-header labeLikeH3'><?php echo 'Des menaces <br/>pour la biodiversité du littoral'; ?></h1></div>
</div>

<div class="row-fluid">
    
    <!-- Colone de texte -->
    <div class="span12">
     
    <strong>La biodiversité du littoral</strong>

    <p class="article">Par « biodiversité », on désigne la diversité naturelle des organismes vivants. La notion de biodiversité regroupe plusieurs niveaux d’organisation du vivant, en passant du « gène » pour la diversité génétique, aux « espèces » pour la diversité spécifique et aux « écosystèmes » pour la diversité écologique. La biodiversité du littoral mérite aujourd’hui toute notre attention car nous ne la connaissons que trop peu et les informations sur la faune et la flore manquent pour les structures qui étudient, protègent et gèrent le littoral.</p>

    <strong>De nombreuses menaces</strong>
    <p class="article">Les zones côtières concentrent près de deux tiers de la population mondiale. En France métropolitaine, on considère que ce sont 6 millions de personnes qui résident sur la bande littorale. La densité de population y est d’ailleurs supérieure à la moyenne nationale. De fait, les pressions qui s’exercent sur ces milieux, entre terre et mer, sont considérables et croissent d’année en année. Au titre des principales pressions et menaces, figurent :</p>

    <p class="article">
      <ul>
      <li>L’artificialisation du littoral. Souvent désignée comme le « bétonnage » des côtes, les différents aménagements côtiers, ont eu des impacts majeurs au cours de ces dernières décennies sur les écosystèmes littoraux et provoqué la disparition d’habitats essentiels à la vie de nombreuses espèces.</li>
      <li>La pollution d’origine terrestre est aussi l’une des grandes menaces qui pèse sur la vie littorale. La pollution par l’excès de phosphates et de nitrates est désormais bien identifiée pour ses effets sur les épisodes d’algues vertes qui couvrent des plages entières en Bretagne chaque année.</li>
      <li>La pollution par les hydrocarbures, en cas notamment de catastrophe pétrolière ou de déballastages intempestifs au large des côtes, reste une menace importante et tout particulièrement en Méditerranée sur laquelle 30% du pétrole mondial transite chaque année.</li>
      <li>La pollution par les « macro déchets » flottants ou déposés sur les fonds marins : sacs plastiques, canettes de boisson, filets de pêches, mégots de cigarette etc. sont déversés par millions chaque jour dans les océans, ultimes et discrets réceptacles des rejets de l’activité humaine. Le littoral est ainsi profondément affecté par ces déchets mais aussi par les mesures (ramassage mécanique) prises pour les retirer.</li>
      <li>Plus discrètes, les espèces potentiellement invasives peuvent elles aussi représenter des menaces pour l’équilibre de la vie littorale et marine. Elles peuvent aussi être le signe du changement climatique.</li>
      <li>Le changement climatique justement, dont les impacts, en plus de celui mentionné ci-dessus, peut revêtir de multiples formes en modifiant les conditions des milieux mais aussi en augmentant la fréquence et l’intensité des épisodes climatiques extrêmes, provoquant entre autres, une érosion accrue du trait de côte par endroit, et une montée du niveau de la mer.</li>
      <li>Etc...</li>
      </ul>
    </p>
     
    </div>
</div>

<?php else: ?>

<div class="row-fluid">
  <div class="span12"><h1 class='page-header labeLikeH3'><?php echo 'Threats to <br/>coastline biodiversity'; ?></h1></div>
</div>

<div class="row-fluid">
    
    <!-- Colone de texte -->
    <div class="span12">
     
    <strong>Coastline biodiversity</strong>

    <p class="article">“Biodiversity” refers to the natural diversity of living organisms. The concept of biodiversity brings together several ways of organizing what is living, going from the “gene” for genetic biodiversity, to “species” for species diversity to “ecosystems” for ecological diversity. Today, coastline biodiversity merits all our attention because we know too little about it, and the agencies that are studying, protecting, and managing the coastline, lack data about its flora and fauna. </p>

    <strong>A number of threats</strong>
    <p class="article">Close to two thirds of the world’s population is concentrated in coastal zones. In mainland France, 6 million people are considered to live in the coastal band. Its population density is also higher than the national average. In fact, the pressures on this environment, between the land and the sea, are considerable, and are growing year on year. The main pressures and threats include:</p>

    <p class="article">
      <ul>
      <li>Artificialization of the coastline. Often referred to as coastal “development” a range of coastal development projects, have had a major impact on coastline ecosystems over the course of the last decades, and have caused the disappearance of habitats that are essential to the life of many species. </li>
      <li>Pollution that originates on land is also one of the great threats weighing on coastline life. Pollution from an excess of phosphates or nitrates can also be identified due to its impact on the episodes of green algae that cover entire beaches in Brittany each year.</li>
      <li>Hydrocarbon pollution, including petrol disasters or unwanted offshore ballast tanks, remains a key threat, particularly in the Mediterranean, through which 30% of the world’s petrol travels each year. </li>
      <li>Pollution by “solid waste”, which is floating or deposited on the seabed: millions of plastic bags, beverage cans, cigarette stubs etc. are dumped in the oceans every day – the final and discreet receptacle of the waste of human activity. The coastline is deeply affected by this waste but also by the measures taken to retrieve it (mechanical collection). </li>
      <li>[Although] less obvious, potentially invasive species can also represent one of the threats to the stability of coastline and marine life: they can also be a sign of climate change.</li>
      <li>The impacts of climate change, in addition to those mentioned above, can take many forms, changing the conditions of environments, but also increasing the frequency and severity of extreme weather conditions, causing, among other things, increased erosion of the coastline in places, and a rise in sea level. </li>
      <li>Etc...</li>
      </ul>
    </p>
     
    </div>
</div>


<?php endif; ?>
      
