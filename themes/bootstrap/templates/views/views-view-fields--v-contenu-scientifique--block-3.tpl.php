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
                                              ///TEMPLATE FOR LES Vos données d’observation
?>  

<?php foreach ($fields as $id => $field): ?>

<?php if ($id == 'title') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $title = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'field_image_content_scient') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_content_scient1 = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'field_image_content_scient2') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_content_scient2 = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'field_image_content_scient3') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_content_scient3 = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'field_image_content_scient4') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_content_scient4 = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'field_image_content_scient5') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_content_scient5 = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'field_image_content_scient6') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_content_scient6 = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php endforeach; ?>

<?php if($language->language == 'fr'): ?>

<div class="row-fluid">
  <div class="span12"><h1 class='page-header labeLikeH3'><?php echo $title; ?></h1></div>
</div>

<div class="row-fluid">
    
    <!-- Colone de texte -->
    <div class="span8">
    <p class='article'>Les petits ruisseaux font les grandes rivières. Chacune de vos données va venir grossir le flot de la connaissance et participer à la compréhension d’un processus ou d’un événement. C’est pour cela que votre rôle est essentiel.</p>
    
    <h2>Comprendre une donnée d’observation</h2>
    <strong>Qu’est-ce qu’une donnée d’observation ?</strong>
    <p>Dans le programme BioLit, votre donnée d’observation va correspondre <i>a minima</i> à :</p>
    <ul>
    <li class='specialPuce'><p>une photographie d’un animal ou d’un végétal observé sur le littoral. Cette photographie permettra, autant que possible, de faire identifier l’espèce par d’autres observateurs, et de valider par la suite l’identification,</p></li>
    <li class='specialPuce'><p>une localisation la plus précise possible du site d’observation (photographie du littoral, en regardant la Mer ou en regardant vers la Terre),</p></li>
    <li class='specialPuce'><p>une date,</p></li>
    <li class='specialPuce'><p>et votre nom et prénom d’observateur.</p></li>
    </ul>

    <p class="article">Pour que votre observation photographique ait tout son sens et qu’elle puisse rejoindre les bases de données, être traitée et interprétée à sa juste valeur, elle doit comporter un certain nombre d’informations complémentaires. Savoir par exemple qu’une espèce de crabe a pu être observée, c’est intéressant, ... mais cela ne suffit pas : il faut en effet savoir « où » et « quand » cette espèce a été observée (une photographie du paysage littoral est demandée pour localiser votre site d’observation), « dans quelles conditions » (après une tempête ? lors d’une grande marée ? ...), et « par qui » (pour pouvoir recontacter si besoin les observateurs pour demander d’autres précisions). Fournir ces d’éléments descriptifs, c’est permettre de contextualiser votre photographie, et de délivrer ainsi des clés de compréhension et d’interprétation aux gestionnaires et aux scientifiques.</p>
    
    <br/>
    <strong>Pourquoi faut-il de nombreuses données d’observation ?</strong>
    <p class="article">Il n’est pas possible pour les gestionnaires ou les scientifiques de parcourir tout le littoral pour observer la biodiversité. Et pourtant, plus les données d’observation seront nombreuses, plus il sera possible de bien connaître la biodiversité d’aujourd’hui, et de la comparer à celle demain. Votre participation en tout lieu et en tout temps est donc précieuse ! <br/>
    Des observations bien réparties géographiquement sur tout le littoral français et disponibles sur du long terme offriront une bonne vision. N’hésitez pas à revenir régulièrement sur un même site d’observation, au cours d’une année, puis au cours des années suivantes.
    </p>
    
    <br/>
    <strong>Ce que l’on peut scientifiquement comprendre à partir des données d’observation</strong>
    <p class="article">A partir de l’ensemble des données d’observation, il est possible de : </p>
    <ul>
    <li><p>Connaître la répartition d’une espèce, et de suivre son évolution (maintien, vitesse de régression ou d’extension)</p></li>
    <li><p>De faire des découvertes fortuites d’espèces protégées, ou d’espèces potentiellement invasives</p></li>
    </ul>

    <br/>
    <strong>Ce que l’on ne peut pas expliquer à partir des données d’observation</strong>
    <p class="article">Si les données d’observation permettent de faire état, en toute objectivité d’une situation réelle, elles ne permettent cependant pas de conduire à tout type d’interprétation et de délivrer n’importe quelle conclusion.</p>
    <p class="article">Ainsi, à partir de vos observations, il n’est par exemple pas possible :</p>
    <ul>
    <li><p>d’identifier systématiquement l’espèce photographiée. En effet, la photographie peut ne pas permettre la visualisation de certains critères morphologiques nécessaires pour la détermination d’une espèce. Et pour d’autres espèces, l’identification nécessite par exemple l’utilisation d’un microscope ou d’une approche génétique,</p></li>
    <li><p>déterminer les causes directes expliquant la régression ou l‘extension d’une aire de répartition d’une espèce : il faudra croiser d’autres données, faire d’autres analyses pour arriver à de telles conclusions,</p></li>
    <li><p>d’anticiper l’évolution de la biodiversité du littoral, exercice scientifiquement complexe et pour le moins hasardeux,</p></li>
    </ul>
    
    <br/>
    <h2>Que vont devenir vos données d’observation ?</h2>
    <strong>Circuit suivi par une donnée d’observation</strong>
    <!-- <p class="article">Les photos et les données enregistrées sur le site BioLit.fr vont être utilisées par les gestionnaires et les scientifiques via une base de données « connectée » avec différents systèmes qui ont pour objectif de partager la donnée sur la biodiversité. Les informations serviront par exemple à l’Inventaire National sur le Patrimoine Naturel (INPN), porté par le Muséum national d’Histoire naturelle, mais également au Système d’Information sur la Nature et les Paysages (SINP), porté par le Ministère en charge de l’Environnement. Elles serviront à des gestionnaires d’espaces naturels pour mieux anticiper certains phénomènes et gérer le territoire, les habitats et les espèces dont ils ont la responsabilité. Planète Mer et tous les participants de ce programme s’engagent à ne pas utiliser les données à des fins commerciales. Les droits d’auteurs des photographes seront respectés. Consultez notre <a href='sites/all/themes/bootstrap/images/charte.pdf'>Charte d’Utilisation du site et des données</a> (à télécharger) pour plus de détails.</p> -->
    <p class="article">Que devient votre observation une fois que vous l’avez renseignée ? Comment va-t-elle être utilisée ?</p>
    <br/>
    <p>Réponse :</p>
    <ul>
    <li><p><b>VOTRE DONNEE EST PARTAGEE :</b> Vous transmettez votre donnée d’observation sur <a href='<?php echo $base_url; ?>' alt='Vers le site BioLit.fr' title='Vers le site BioLit.fr' >www.biolit.fr</a> : votre donnée est ainsi consultable par tous ( Menu : Onglet <a href='carte-des-observations' alt='Vers la carte des observations' title='Vers la carte des observations'>Observations</a> ). Vous pouvez également la partager sur d’autres réseaux sociaux (Facebook, Google+...).</p></li>
    <li><p><b>PHASE D’IDENTIFICATION DE L’ESPECE :</b> Sur la page « Observations », identifier, c’est-à-dire nommer chacune des espèces que vous avez photographiées, et que d’autres BioLitien(ne)s ont également rapportées. Plusieurs naturalistes passionnés, amateurs ou confirmés, peuvent intervenir. De plus, l’équipe de Planète Mer invite en parallèle un réseau d’experts naturalistes et scientifiques à participer sur le site. Cette phase d’identification peut durer plusieurs mois, pour laisser le temps aux discussions, aux interrogations... voire au débat ! <br/> Dans ce cas : la photo reste étiquetée « NON-IDENTIFIEE » (même si plusieurs propositions ont pu être faites).</p></li>
    <li><p><b>VOTRE DONNEE EST VALIDEE : </b> Lorsque votre observation est validée scientifiquement par l’intervention d’un expert, alors votre donnée est administrativement validée. Cela signifie que votre photo n’est plus étiquetée « non-identifiée ». Le nom d’espèce validé apparaît directement. Votre donnée intègre ainsi la base de données finale de l’association Planète Mer.</p></li>
    <li><p><b>VOTRE DONNEE SERA TRANSMISE : </b> (1) aux bases de données des scientifiques partenaires de BioLit (2) et aux bases de données et plateformes d’échanges de données sur la biodiversité telles que : l’INPN (Inventaire National sur le Patrimoine Naturel) du Muséum national d’Histoire naturelle, le SINP (Système d’Information sur la Nature et les Paysages) porté par le Ministère en charge de l’Environnement.</p></li>
    </ul>
    
    <br/>
    <strong>Comment vos observations seront-elles utilisées ?</strong>
    <p>Elles vont être utilisées :</p>
    <ul>
    <li><p>par les scientifiques</p></li>
    <li><p>par les gestionnaires d’espaces protégés et de ressources naturelles pour mieux anticiper certains phénomènes biologiques, appréhender certaines pressions humaines et gérer le territoire, les habitats et les espèces dont ils ont la responsabilité</p></li>
    <li><p>et pour certains clichés, et avec l’accord du photographe, par Planète Mer pour communiquer et promouvoir le programme BioLit.</p></li>
    </ul>
    
    <br/>
    <p class="article">Planète Mer et tous les participants de ce programme s’engagent à ne pas utiliser les données à des fins commerciales. Les droits d’auteurs des photographes seront respectés. Consultez notre <a href='sites/all/themes/bootstrap/images/charte.pdf'>Charte d’Utilisation du site et des données</a> (à télécharger) pour plus de détails.</p>

    </div>
    
    <div class="span4">
            
    <p style='margin-top:58px;' class='hasImage'><?php echo $field_content_scient1; ?><small>Etoile de mer rouge ( <i>Echinaster sepositus</i> ) dans son environnement  – Sandrine RUITTON</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient2; ?><small>Fond coloré de Méditerranée – Sandrine RUITTON</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient3; ?><small>Organisme zooplanctonique dans les eaux de surface – Sandrine RUITTON</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient4; ?><small>Tapis d’algue rouge appelée <i>Womersleyella setacea</i> – Sandrine RUITTON</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient5; ?><small>La méduse <i>Cotylorhiza tuberculata</i> en Méditerranée  - Sandrine RUITTON</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient6; ?><small>L’algue saisonnière <i>Rissoella verruculosa</i> – Sandrine RUITTON</small></p>

    </div>


</div>
      
<?php else: ?>


<div class="row-fluid">
  <div class="span12"><h1 class='page-header labeLikeH3'>Your observation data</h1></div>
</div>

<div class="row-fluid">
    
    <!-- Colone de texte -->
    <div class="span8">
    <p class='article'>Little streams make great rivers. Each part of your data will swell the flood of knowledge and can contribute to the understanding of a process or event. That is why your role is essential. </p>
    
    <h2>Understanding observation data</h2>
    <strong>What is observation data?</strong>
    <p>In the BioLit program, your observation data at minimum, must be equivalent to:</p>
    <ul>
    <li class='specialPuce'><p>a photograph of an animal or a plant observed on the coastline. As far as possible this photograph will allow the species to be identified by other observers, and then have its identification validated. </p></li>
    <li class='specialPuce'><p>the most precise possible localization of the observation site (a photograph of the coastline, looking out to sea, and then looking towards the land),</p></li>
    <li class='specialPuce'><p>a date,</p></li>
    <li class='specialPuce'><p>and your surname and first name as an observer.</p></li>
    </ul>

    <p class="article">So that your photographic observation can be meaningful, fit to join the database, and achieve its full potential during processing and interpretation, it needs to include a number of additional pieces of information. It is interesting, for example, to know that a particular species of crab has been observed, but it is not enough: we need to know “when” and “where” this species was observed (a photograph of the coastline landscape is needed to localize your observation site), “in what conditions” (after a storm? At high tide? ...), and “by whom” ( so that observers can contact you if needed, to ask for further details). Providing these descriptive elements, allows your photography to be put into context, and they then provide the administrators and scientists with keys to understanding and interpretation.</p>
    
    <br/>
    <strong>Why must there be so much observation data?</strong>
    <p class="article">It is not possible for administrators or scientists to cover the whole coastline to observe biodiversity. Also, the more observation data is available the easier it will be to understand today’s biodiversity and to compare it with tomorrow’s. That is why your participation in all places and at all times is so valuable!<br/>
    Observations that are well distributed geographically over the French coastline and available long-term will give a good overview. Do visit the observation site regularly over the year, and over the years ahead. 
    </p>
    
    <br/>
    <strong>What it is possible to know scientifically based on the observation data?</strong>
    <p class="article">Starting from the whole observation data, we can:</p>
    <ul>
    <li><p>Get to understand a species’ distribution, and follow its evolution (stability, speed of decline, or spread)</p></li>
    <li><p>Make useful discoveries of protected species, or potentially invasive species.</p></li>
    </ul>

    <br/>
    <strong>What observation data cannot explain</strong>
    <p class="article">If observation data allow us to report a real situation objectively, they do not, however, allow us to carry out every type of interpretation or to deliver any type of conclusion. </p>
    <p class="article">So, based on your observations, it is not possible, for example, to:</p>
    <ul>
    <li><p>systematically identify the species photographed. Photography, in effect, does not allow for the visualization of certain morphological criteria that are needed to determine a species. As far as other species are concerned, the use of a microscope or a genetic approach is needed for identification,</p></li>
    <li><p>determine the direct causes of the decline or spread of a species’ distribution area: cross-references need to be made to other data, and additional analyses need to be made to arrive at those types of conclusions, </p></li>
    <li><p>predict the evolution of coastline biodiversity, as this is a more complex and quite hazardous scientific exercise.</p></li>
    </ul>
    
    <br/>
    <h2>What will become of your observation data?</h2>
    <strong>Lifecycle of a piece of observation data</strong>
    <!-- <p class="article">Les photos et les données enregistrées sur le site BioLit.fr vont être utilisées par les gestionnaires et les scientifiques via une base de données « connectée » avec différents systèmes qui ont pour objectif de partager la donnée sur la biodiversité. Les informations serviront par exemple à l’Inventaire National sur le Patrimoine Naturel (INPN), porté par le Muséum national d’Histoire naturelle, mais également au Système d’Information sur la Nature et les Paysages (SINP), porté par le Ministère en charge de l’Environnement. Elles serviront à des gestionnaires d’espaces naturels pour mieux anticiper certains phénomènes et gérer le territoire, les habitats et les espèces dont ils ont la responsabilité. Planète Mer et tous les participants de ce programme s’engagent à ne pas utiliser les données à des fins commerciales. Les droits d’auteurs des photographes seront respectés. Consultez notre <a href='sites/all/themes/bootstrap/images/charte.pdf'>Charte d’Utilisation du site et des données</a> (à télécharger) pour plus de détails.</p> -->
    <p class="article">What happens to your observation once you have sent it in? How will it be used?</p>
    <br/>
    <p>Answer: </p>
    <ul>
    <li><p><b>YOUR DATA IS SHARED:</b> You send in your observation data via <a href='<?php echo $base_url; ?>' alt='Vers le site BioLit.fr' title='Vers le site BioLit.fr' >www.biolit.fr</a>: your data can then be looked it by everyone (Menu: <a href='carte-des-observations' alt='Vers la carte des observations' title='Vers la carte des observations'>Onglet Observations</a>). You can also share it on other social networks (Facebook, Google+...).</p></li>
    <li><p><b>SPECIES IDENTIFICATION PHASE: </b>The “Observations” page is to identify, that is name, each of the species that you have photographed and that other BioLitians have also reported. Several passionate naturalists, both amateur and professional, can contribute. Moreover, the Planète Mer team is inviting a parallel network of naturalists and scientists to participate on the site. This identification phase could last several months, to give enough time for discussions, questions...even debate!<br/>In this case: the photo remains labeled as “NOT-IDENTIFIED” (even if several proposals have been put forward).</p></li>
    <li><p><b>YOUR DATA IS VALIDATED:</b> As soon as an expert validates your observation scientifically your data will be validated administratively. This means that your photograph is no longer labeled as “not-identified.” The valid species name will appear directly. Your data is also then integrated into the final Planète Mer association database.</p></li>
    <li><p><b>YOUR DATA WILL THEN BE SENT ON:</b> (1) to BioLit’s scientific partners’ databases (2) and to databases and exchange platforms on biodiversity such as: the Muséum national d’Histoire naturelle’s l’INPN (Inventaire National sur le Patrimoine Naturel), and SINP (Système d’Information sur la Nature et les Paysages) supported by the Ministère en charge de l’Environnement. </p></li>
    </ul>
    
    <br/>
    <strong>How will your observations be used?</strong>
    <p>They will be used:</p>
    <ul>
    <li><p>by scientists,</p></li>
    <li><p>by managers of protected spaces and natural resources to better anticipate certain biological phenomena, grasp some human pressures, and care for the territory, habitats and species for which they are responsible,</p></li>
    <li><p>with the photographer’s agreement, some shots will be used by Planète Mer for the wider communication and promotion of the BioLit program.</p></li>
    </ul>
    
    <br/>
    <p class="article">Planète Mer and all project participants agree not to use data for commercial ends. Photographers’ rights in their photographs will be respected. Consult our downloadable <a href='sites/all/themes/bootstrap/images/charte.pdf'>Charte d’Utilisation du site et des données</a> for more details.</p>

    </div>
    
    <div class="span4">
            
    <p style='margin-top:58px;' class='hasImage'><?php echo $field_content_scient1; ?><small>Red starfish (<i>Echinaster sepositus</i>) in its environment – Sandrine RUITTON</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient2; ?><small>Colorful benthic life of the Mediterranean Sea </small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient3; ?><small>Zooplankton in surface seawaters – Sandrine RUITTON</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient4; ?><small>Floor of red algae called <i>Womersleyella setacea</i> – Sandrine RUITTON</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient5; ?><small>The jellyfish <i>Cotylorhiza tuberculata</i> in the Mediterranean Sea  - Sandrine RUITTON</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient6; ?><small>The seasonal algae <i>Rissoella verruculosa</i> – Sandrine RUITTON</small></p>

    </div>


</div>

<?php endif; ?>

