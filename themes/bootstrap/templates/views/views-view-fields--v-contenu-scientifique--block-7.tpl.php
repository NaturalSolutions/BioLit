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
                                              ///TEMPLATE FOR LE LITTORAL
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
        
      <strong>Le littoral, un espace à plusieurs définitions</strong>

      <p class="article">Le littoral est le lieu de rencontre de la Terre et de la Mer et le définir n’est pas simple. En écologie, on le désigne comme étant un « écotone », c’est-à-dire une zone de transition entre l’écosystème terrestre et l’écosystème marin, tout en soulignant la diversité de la faune et flore que l’on y trouve et la fragilité de ses richesses biologiques. En géographie, le littoral correspond à la zone d’influence de la Mer sur la Terre mais également de la Terre sur la Mer... En droit, le littoral n’a pas de définition consacrée mais correspond à un espace juridiquement intéressant avec l’application de tous les droits.</p>

      <p class="article">La notion de littoral peut donc revêtir plusieurs définitions selon les approches et le regard que l’on y porte. Sa délimitation physique reste en pratique très floue et n’a sans doute pas de sens, dans la mesure où le littoral est un espace à dimensions multiples. La meilleure façon de connaître le littoral (et de trouver sa propre définition), c’est de prendre le temps de l’observer. Espace fragile, en évolution constante, le littoral attire et révèle toute sa poésie aux plus attentifs observatrices et observateurs. Avant de vous évader dans ses paysages terrestres et sous-marins saisissants, découvrez ici quelques informations utiles pour organiser votre sortie.</p>
      
      <strong>Un découpage du littoral par les biologistes</strong>

      <p class="article">Les biologistes définissent plusieurs étages (ou plusieurs zones) successifs sur le littoral en raison des différentes conditions de vie qui déterminent la répartition des organismes vivants sur le littoral. Quelle que soient la morphologie et la nature de la côte, on peut retrouver de manière théorique 5 étages littoraux. Sur le terrain, il est parfois difficile de bien les discerner.</p>

      <p class="article">En partant de la Terre vers la Mer, on rencontre :<br/>
      <ul>
      <li>l’étage <b>halophile</b> qui est entièrement continental, mais influencé par les embruns qui sont des courants d’air chargé de gouttelettes d’eau salée et qui apportent donc « sels » et « humidité ». Cet étage est occupé par des plantes à fleurs, adaptées à ces contraintes. La présence de vent, généralement important sur le littoral, peut façonner la tenue de la végétation, orientée alors dans le sens du vent,</li>
      <li>l’étage <b>adlittoral</b> correspond au dernier étage continental, où les conditions plus extrêmes (c’est-à-dire avec de plus fortes variations des paramètres physico-chimiques) ne permettent l’installation que de quelques espèces, tels que les lichens ou la salicorne,</li>
      <li>l’étage <b>supra-littoral</b> est le premier étage marin. Il n’est jamais immergé, même à marée haute, mais reste cependant fortement humidifié par les embruns. L’importance de cet étage dépend fortement de la force des vagues : plus elles sont nombreuses et puissantes, plus l’étage est étendu. On peut y retrouver les lichens, mais également des cyanobactéries qui vont être broutés par des petits mollusques marins appelés <i>« littorines »</i>, des crustacés etc.</li>
      <li>l’étage <b>médio-littoral</b> est submergé à chaque marée haute et découvert lors des marées basses. Cet étage est soumis à la contrainte des vagues et des marées. Cet étage est peuplé par des organismes plus polyvalents qui supportent des périodes prolongées d’immersion et de sécheresse. On parle alors d’espèces résistantes, à forte capacité d’adaptation, mais aussi d’espèces compétitrices. De façon générale la limite de cet étage est sous influence de facteurs physico-chimiques tandis que la limite inférieure est contrainte par des facteurs de compétition pour l’espace entre les espèces,</li>
      <li>Puis, l’étage <b>infra-littoral</b> qui reste totalement immergé, même à marée basse. La limite inférieure de cet étage correspond à la limite de pénétration de la lumière, et de la capacité des espèces à réaliser la photosynthèse (entre 30 et 40 mètres de profondeur),</li>
      <li>Au-delà, il s’agit de l’étage <b>circalittoral</b>.</li>
      </ul>
      </p>

      <p class="article">Dans le cadre de BioLit, nous nous intéressons essentiellement au supra-littoral, médio-littoral et infra-littoral.</p>

    </div>
</div>
      
<?php else: ?>

<div class="row-fluid">
  <div class="span12"><h1 class='page-header labeLikeH3'>The coastline</h1></div>
</div>

<div class="row-fluid">
    
    <!-- Colone de texte -->
    <div class="span12">
        
      <strong>The coastline, a space with many definitions</strong>

      <p class="article">The coastline is the place where the land and sea meet and it is not easy to define. In Ecology it is described as a “ecotone”, that is a transitional zone between the terrestrial and marine ecosystems, while also highlighting the diversity of the fauna and flora that is found there, and the fragility of these biological riches. In Geography, the coastline corresponds to the zone of the sea’s influence on the land, but also that of the land on the sea... In Law, the coastline does not have an enshrined definition but it is a space that is interesting in legal terms, and all rights apply to it.</p>

      <p class="article">The concept of the coastline can then take on many definitions, depending on the views and approaches that we bring to it. In practice, its physical boundaries remain very tricky to judge and probably cannot be grasped, to the degree to which the coastline is a space of multiple dimensions.</p>
      
      <p class="article">The best way to get to know the coastline (and to find a way to define it), is to take the time to observe it. A fragile space, that is constantly evolving, the coastline charms, and reveals all its poetry to the most attentive observers. Before you head off into these striking terrestrial and underwater landscapes, you can discover some useful information here to help you to organize your sortie. </p>
      
      <strong>How biologists divide the coastline</strong>

      <p class="article">Biologists define several successive stages (or zones) along the coastline, due to the varied living conditions that determine the distribution of living organisms along its length. Whatever the morphology and nature of the coast, it can be divided theoretically into 5 coastline stages, even though it is often difficult to discern them in the field.</p>

      <p class="article">Moving from the land towards the sea, we encounter: <br/>
      <ul>
      <li>The <b>halophile</b> stage, which is composed entirely of mainland, but which is influenced by the sprays composed of currents of air charged with droplets of salt water, which therefore carry “salts” and “humidity”. This stage is occupied by flowering plants that are adapted to these conditions. The presence of the wind, which is generally important on the coastline, can shape the vegetation’s hold, as it leans according to the direction of the wind, </li>
      <li>The <b>adlittoral</b> stage corresponds to the last stage of the mainland, or to the most extreme conditions (with the greatest variations in physicochemical parameters), which only allows a few species, such as lichens or salicorn <i>[salicornia]</i> to gain a foothold. </li>
      <li>The <b>supralittoral</b> stage is the first marine stage. It is never submerged, even at high tide, but is always subject to high levels of dampening by the sea spray. The importance of this stage is highly dependent on the strength of the waves: the more frequent and stronger the waves are, the more this stage extends. You can find lichens here, but also cyanobacteria that are grazed on by small marine mollusks called “winkles <i>[littorina]</i>”, plus crustaceans, etc.</li>
      <li>The <b>mediolittoral</b> stage is submerged at each high tide and exposed during low tides. This stage is submerged depending on the waves and tides. It is inhabited by the more adaptive organisms, which can tolerate long periods of immersion and dryness. We can refer to resistant species, which have a strong capacity to adapt, but also to competitive species. In general, the boundaries of this stage depend on physicochemical factors, which at the lower limit are constrained by competition for space between species,</li>
      <li>Then, there is the <b>infralittoral</b> stage, which remains totally submerged, even at low tide. The lower limit of this stage corresponds to the light’s penetration limit, and to species’ ability to realize photosynthesis (between 30 and 40 meters’ depth), </li>
      <li>Beyond that is the <b>circalittoral</b> stage.</li>
      </ul>
      </p>

      <p class="article">Within the framework of BioLit, we are essentially interested in the supralittoral, mediolittoral and infralittoral stages. </p>

    </div>
</div>
 

<?php endif; ?>
