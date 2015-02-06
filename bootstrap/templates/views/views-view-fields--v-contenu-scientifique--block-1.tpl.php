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
                                            ///TEMPLATE FOR LES OBSERVATOIRE BIOLIT /  QUI  NOUS SOMMES
?>  

<?php foreach ($fields as $id => $field): ?>

<?php if ($id == 'title') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $title = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php if ($id == 'field_image_content_scient') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $field_content_scient = $field->content; ?>
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

<?php if ($id == 'body') : ?>
  <?php if (!empty($field->content)): ?>
    <?php $body = $field->content; ?>
  <?php endif; ?>
<?php endif;?>

<?php endforeach; ?>

<?php if($language->language == 'fr'): ?>


<div class="row-fluid">
  <div class="span12"><h1 class='page-header labeLikeH3'><?php echo $title; ?></h1></div>
</div>

<div class="row-fluid">
  <div class="span12">
    <strong>Parlez-moi de BioLit</strong>
    <p class='article'><b>Objectif : prendre le pouls du littoral</b> - Lieu de rencontre entre la Terre et la Mer, le littoral est une zone riche en termes de biodiversité, mais également très fragile du fait des nombreuses pressions qui pèsent sur ce milieu (pollutions, aménagement et artificialisation du littoral, changement climatique, montée du niveau de la mer ...). Le littoral, très fréquenté, attire de plus en plus. Aujourd’hui, il est plus que nécessaire de tous se mobiliser pour suivre son état de santé et pouvoir aider les pouvoirs publics à agir en conséquence. Or, prendre soin de son littoral, c’est commencer par bien le connaître et bien le faire connaître. Les informations descriptives sur l’état de la biodiversité manquent sur nos 3800 km de côtes françaises ! Prendre le pouls du littoral à partir de la mobilisation d’un large public constitue l’un des objectifs majeurs de BioLit.</p>
    <p class='article'><b>A la fois « Science collaborative » et « Observatoire participatif du littoral »</b> - BioLit est un programme de science collaborative sur la Biodiversité du Littoral. Créé et porté par l’association Planète Mer, il est mené sous la responsabilité scientifique de la station marine du Museum national d’Histoire naturelle (MNHN) de Dinard, avec le soutien d’un conseil scientifique, et en partenariat avec des structures d’éducation à l’environnement et au développement durable, des collectivités territoriales, des services de l’Etat, et des gestionnaires d’espaces protégés et de ressources naturelles. La forte implication des citoyennes et des citoyens est la clé pour que BioLit s’engage à suivre l’état de santé du littoral, et devienne ainsi un observatoire national participatif du littoral qui contribue à l’identification et au développement d’indicateurs de suivi de la qualité des milieux littoraux.</p>
  </div>
</div>

<br/>

<div class="row-fluid">
  
  <div class="span8">

    <h2>Un choix d’actions dans BioLit</h2>
    <p class='article'>BioLit (BioLit = BIOdiversité du LITtoral) a été conçu pour permettre de répondre à des préoccupations scientifiques et environnementales sur l’évolution des habitats et des espèces du littoral. Le changement climatique et les pressions anthropiques telles que les différentes pollutions, l’artificialisation du littoral, le rejet de CO2 et l’acidification conséquente des océans, ou encore l’augmentation des cas d’introduction d’espèces non-indigènes... sont autant de facteurs de modification de la vie du littoral, qui nous interpellent et rendent nécessaire la mise en place de différents suivis littoraux, à long terme et sur une large couverture géographique. BioLit a été créé pour permettre ainsi à chacun d’entre vous de participer, en vous impliquant dans un réseau de surveillance et d’alerte éco-citoyen. Les scientifiques et les structures impliquées dans la protection du patrimoine littoral et dans la sensibilisation du public ont besoin de vous !</p>
    
    <br/>
    <strong>Choisissez votre action</strong>
    <p class='article'>Afin de répondre à certaines problématiques qui peuvent se présenter sur la biodiversité du littoral, le programme s’organise autour de différentes « Actions ». Chaque action correspond à une thématique de suivi à long terme de la biodiversité terrestre et marine du littoral, ou des pressions qui s’y exercent. Par conséquent, à chaque « Action », une question ou un enjeu bien défini(e) !</p>
    <br/>
    <b>Des actions pour valoriser en couleur la biodiversité du littoral</b>
    <ul>
    <li><p class='article'>«<a href="a-vos-observations" alt="Vers l'action 'A vos observations !'" title="Vers l'action 'A vos observations !'"> A vos observations ! </a>» a pour objectif de dresser un portrait de la biodiversité littorale dans son ensemble. Chacune de vos observations est une touche de couleur qui viendra le composer. Tous les groupes taxonomiques sont ici concernés : algues, mammifères, oiseaux, poissons, crustacés ... Certaines de vos observations pourront alerter les autorités et structures compétentes (exemple : échouage de dauphins pour le Réseau National d’Echouage ...).</p></li>
    </ul>

    <b>Des actions pour créer un réseau d’alerte et de surveillance du littoral</b>
    <ul>
    <li><p class='article'>« <a href="saisons-de-la-mer" alt="Vers l'action 'Les saisons de la Mer'" title="Vers l'action 'Les saisons de la Mer'">Saisons de la Mer</a> » s’intéresse à ce que la mer dépose sur le rivage, au gré des marées et des tempêtes, dans ce qu’on appelle « la laisse de mer »... et ceci, avec un rythme saisonnier à suivre sur du long terme. La pontes de certains céphalopodes, l’arrivée des olives de posidonies ou encore des vélelles seront ainsi scrutées et attendues et permettront de mesurer un éventuel changement des cycles biologiques naturels, année après année,</p></li>
    <li><p class='article'>« <a href="les-nouveaux-arrivants" alt="Vers l'action 'Nouveaux arrivants'" title="Vers l'action 'Nouveaux arrivants'">Nouveaux arrivants </a>» contribue à un réseau d’alerte et de suivi des espèces marines et littorales introduites, dont certaines peuvent être invasives, c’est-à-dire proliférer au détriment d’espèces locales. Ce suivi vise à contribuer notamment aux outils de protection de l’environnement marin, partagés par les Etats membres de l’Union Européenne (Directive Cadre Stratégie Milieu Marin ...),</p></li>
    <li><p class='article'>« <a href="chlorophylle-mania" alt="Vers l'action 'Végétation du littoral'" title="Vers l'action 'Végétation du littoral'">Végétation du littoral </a>» permet de suivre des espèces d’intérêt, identifiées par le Conservatoire Botanique de Porquerolles. Certaines sont des espèces protégées, d’autres, plus communes, sont des indicatrices de qualité du milieu ou de dégradation du milieu,</p></li>
    <li><p class='article'>« <a href="attention-menace" alt="Vers l'action 'Attention, menace ?'" title="Vers l'action 'Attention, menace ?'">Attention, menace ? </a>» cible tout ce qui ne relève pas du vivant ! Les déchets plastiques, les mégots de cigarette, certaines activités (quads, scooters etc.), ou éléments d’artificialisation (bétonnage de certains endroits, mouillages etc.) viennent perturber ou dégrader la vie littorale. C’est votre avis qui nous intéresse. Par vos observations, dites-nous ce qui, selon vous peut impacter la biodiversité du littoral.</p></li>
    </ul>

    <b>Des actions pour répondre à des interrogations scientifiques</b>
    <ul>
    <li><p class='article'>L’Action « <a href="algues-brunes-et-bigorneaux" alt="Vers l'action 'Algues brunes et bigorneaux'" title="Vers l'action 'Algues brunes et bigorneaux'">Algues brunes et bigorneaux</a> » a été initié faisant le constat de la disparition des algues brunes des estrans rocheux. L’observation conjointe des algues et des gastéropodes (coquillages marins) associés permettra de mieux comprendre les facteurs à l’origine de cette disparition et les effets sur l’écosystème des estrans. Trois niveaux d’accessibilité de cette thématique permettent à tout à chacun de participer. Y compris les scolaires grâce au protocole proposé par Vigie-Nature Ecole.</p></li>
    </ul>
    
    <br/>
    <p class="article">L’ensemble de ces différentes « Actions » contribuent à différents niveaux à suivre l’état de santé du littoral. Si certaines problématiques littorales et marines vous tiennent à cœur, n’hésitez pas à contacter Planète Mer pour développer avec nous, d’autres nouvelles « Actions ».</p>


    </div>
  <div class="span4">
    
    <p style='margin-top:58px;' class='hasImage'><?php echo $field_content_scient; ?><small>Calanque de Sugiton du Parc National des Calanques – Crédit photo : Lilita Vong</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient3; ?><small>Sortie BioLit organisée par l’association IODDE d’éducation à l’environnement  – Association IODDE</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient2; ?><small>Participation à un BioLit Junior en test, par des collégiens pour le programme BioLit Junior - Laurent Wenk</small></p>
  </div>
</div>

<!--   <div class="row-fluid">
    <div class="span12">
      <strong>Les différentes actions de BioLit</strong>
      <p class='article'>Afin de répondre aux différentes problématiques qui peuvent se présenter sur le littoral, le programme s’organise autour de différentes Actions qui visent un suivi à long terme de la biodiversité terrestre et marine du littoral, ainsi qu’à l’évaluation des activités humaines. Chaque Action répond à un enjeu bien défini, et est ensuite déclinée en tenant compte des spécificités de chaque façade (façade Atlantique, façade Manche-Mer du Nord, ou façade de la Méditerranée). Retrouvez aujourd’hui les actions « Algues brunes et bigorneaux », « Cherchez l’intrus ! », « Saisons de la Mer », « Végétation du littoral », « Activités humaines ». Et n’hésitez pas à contacter Planète Mer pour développer de nouvelles actions.</p>
    </div>
  </div>
    
 -->
<br/>
<br/>

<span class='linePointille'></span>

<br/>
<br/>

<div class="row-fluid">

  
  <div class="span8">
    <h2>Tout le monde peut participer</h2>

    <strong>BioLit, c’est gratuit</strong>
    <p class='article'>BioLit, c’est gratuit et ouvert à tous. Aucune commercialisation des outils de BioLit n’est réalisée par Planète Mer, association qui œuvre pour l’intérêt général. <br/>Tous les outils mis à disposition peuvent donc librement être utilisés par les structures d’éducation à l’environnement ou les gestionnaires d’espaces protégés et de ressources naturelles.</p>
    <br/>
    
    <strong>Seul(e) ou accompagné(e)</strong>
    <p class='article'>BioLit permet plusieurs modes d’observation sur le terrain. <br/>
    Les modes d’emploi de niveau 1 permettent à ceux qui le souhaitent de partir seul(e) ou en famille, sans besoin d’être accompagné(e). <br/>
    Les modes d’emploi de niveau 2 nécessitent d’être accompagné(e) par un relai local de BioLit. <br/>
    Les modes d’emploi de niveau 3 sont réservés aux universités, aux chercheurs réalisant des travaux pratiques avec des étudiants en biologie mais également à des gestionnaires d’espaces protégés.
    </p>
    <br/>
    
    <strong>Du néophyte au spécialiste : à chacun son mode d’emploi</strong>
    <p class='article'>Pour le suivi des « <a href="algues-brunes-et-bigorneaux" alt="Vers l'action 'Algues brunes et bigorneaux'" title="Vers l'action 'Algues brunes et bigorneaux'">Algues brunes et Bigorneaux</a> », trois niveaux de difficulté sont disponibles : retrouver sur ce site le <a href="algues-brunes-et-bigorneaux" alt="Vers l'action 'Algues brunes et bigorneaux'" title="Vers l'action 'Algues brunes et bigorneaux'">niveau 1</a>, et retrouver sur <a href='http://www.vigienature-ecole.fr/' alt='vers site de Vigie Nature Ecole' title='vers site de Vigie Nature Ecole'>Vigie Nature Ecole </a> le niveau 2. Le niveau 3, réservé aux scientifiques, est accessible par simple <a href="contact" alt="Vers la page contact'" title="Vers la page contact'">demande</a>. <br/>
      Pour les autres suivis, retrouvez tous les niveaux 1 sur ce <a href="liste-actions" alt="Vers la liste des actions BioLit" title="Vers la liste des actions BioLit">site</a>. 
    </p>

    <strong>BioLit Junior</strong>
    <p class='article'>Un BioLit Junior, c’est offrir la possibilité de s’impliquer dès le plus jeune âge, de donner aux nouvelles générations l’occasion de construire un contact privilégié avec la nature, et de les sensibiliser sur les comportements et les bonnes attitudes à adopter pour protéger le littoral. Pour toutes ces raisons, nombre d’enseignants et d’associations ont montré un intérêt marqué pour BioLit. Retrouvez désormais BioLit Junior dans <a href='http://www.vigienature-ecole.fr/' alt='vers site de Vigie Nature Ecole' title='vers site de Vigie Nature Ecole'>Vigie Nature Ecole</a>.</p>

  </div>
  <div class="span4" >    
    
    <p style='margin-top:100px;' class='hasImage'><?php echo $field_content_scient4; ?><small>Plongeur réalisant une observation – Sandrine RUITTON</small></p>
  </div>

</div>

<?php else: ?>

  <div class="row-fluid">
  <div class="span12"><h1 class='page-header labeLikeH3'>The BioLit observatory</h1></div>
</div>

<div class="row-fluid">
  <div class="span12">
    <strong>Tell me about BioLit!</strong>
    <p class='article'><b>Aim: to take the pulse of the coastline</b> - The place where the land and sea meet—the coastline—is a zone rich in terms of biodiversity, but also fragile, due to the many pressures that weigh on this environment (pollution, development and artificialization of the coastline, climate change, rising sea levels…). The coastline is very popular and is attracting more and more people. Today there is a pressing need to rally everyone to monitor its state of health and to help public agencies to act accordingly. However, the starting point for taking care of the coastline is getting to know it well and making it well known. Descriptive information on the state of biodiversity is lacking for 3800 km of our French coasts! One of BioLit’s main aims is to take the pulse of the coastline through mobilization of the general public.</p>
    <p class='article'><b>Both “Citizen science” and “Participatory observatory of the coastline”</b> - BioLit is a collaborative citizen science program focused on Coastline Biodiversity. Created and supported by the Planète Mer association, the Marine Station of Dinard (Museum national d’Histoire naturelle) is responsible for its development, with the support of a scientific council in partnership with environmental and sustainable development education structures, and with local authorities, government departments, and managers of protected spaces and natural resources. Strong citizen involvement is key as BioLit gets involved with monitoring the coastline’s health, and also becomes a national participative coastline-monitoring project that contributes to the identification and development of indicators for monitoring the quality of coastal environments.</p>
  </div>
</div>

<br/>

<div class="row-fluid">
  
  <div class="span8">

    <h2>Choice of actions within BioLit</h2>
    <p class='article'>BioLit (BioLit = BIOdiversité du LITtoral [Coastline Biodiversity]) was conceived of as a response to scientific and environmental concerns about the evolution of coastline habitats and spaces. Climate change and human pressures such as different forms of pollution, CO2 emissions that result in the oceans becoming more acidic, or even the increase in the introduction of non-native species…are among the many factors that change the life of the coastline, which call out to us and make it necessary to put different types of long-term coastline monitoring in place across a wide geographic area.<br/>
    BioLit was also created to allow all of you to participate, through involving you in a network of eco-citizen monitoring and alerts. Scientists and agencies involved in the protection of coastline heritage, and in raising public awareness need you!
    </p>
    
    <br/>
    <strong>Choose your action</strong>
    <p class='article'>In order to respond to some of the issues that can arise when dealing with coastline biodiversity, the program is organized around different “actions”. Each action corresponds to a theme that is part of the long-term monitoring of terrestrial and marine coastline biodiversity, or to the pressures bearing on it. So, each action has a well-defined related question or issue!</p>
    <br/>
    <b>Actions to promote coastline biodiversity in color</b>
    <ul>
    <li><p class='article'>“Start your observations!” aims to draw a picture of coastline biodiversity as a whole. Each of your observations is a touch of color that will make up the composition. All taxonomic groups are included: algae, mammals, birds, fish, crustaceans…Some of your observations could alert the authorities and relevant agencies (for example stranded dolphins for the Réseau National d’Echouage …).</p></li>
    </ul>

    <b>Actions to create a network of coastline alerts and monitoring</b>
    <ul>
    <li><p class='article'>“Seasons of the Sea” looks at what the sea deposits on the shore, in the wake of sea tides and storms, on what is called the “foreshore”…following seasonal rhythms over the long term. The egg clutches of certain cephalopods, the arrival of Posidonia fruits or even velella [Purple Sail] jellyfish will also be scrutinized and anticipated, which will allow eventual change in natural cycles to be measured, year upon year, </p></li>
    <li><p class='article'>“<a href="the-new-arrivals?language=en" alt="To the action 'New arrivals'" title="Vers l'action 'New arrivals'">New arrivals</a>” contributes to an alert and monitoring network for introduced sea and coastal species, some of which can be invasive—that is to say they proliferate at the expense of local species. The particular aim of this monitoring is to contribute to tools for the protection of the marine environment, shared by EU member states (EU Marine Strategy Framework Directive ...),</p></li>
    <li><p class='article'>“Coastline vegetation” allows for the monitoring of species of interest, identified by the Conservatoire Botanique de Porquerolles. Some of these are protected species, others, which are more common, are indicators of the quality of the environment or of a reduction in its quality.</p></li>
    <li><p class='article'>“Look out, is this a threat?” targets anything that is not alive! Plastic waste, cigarette stubs, some activities (quads, motor scooters etc.), or some elements of artificialization (the concreting over of certain places, moorings etc.) can come to disrupt or degrade the life of the coastline. We are interested in your opinions. Through your observations, you let us know what might impact on coastline biodiversity. </p></li>
    </ul>

    <b>Actions that respond to scientific research</b>
    <ul>
    <li><p class='article'>“Brown algae and winkles” was started because brown algae were reported to have disappeared from rocky foreshores. Joint observation of algae and gastropods (shellfish) will allow for a better understanding of the causes of this disappearance, and its effects on the foreshore ecosystem. This theme’s three access levels allow everyone to take part. Thanks to the draft agreement proposed by Vigie-Nature-Ecole, this includes schoolchildren. </p></li>
    </ul>
    
    <br/>
    <p class="article">Taken together these different actions contribute to monitoring the coastline’s state of health at different levels. If you are particularly concerned about certain issues to do with the coastline and sea, do not hesitate to contact Planète Mer to develop other new “actions” with us. </p>


    </div>
  <div class="span4">
    
    <p style='margin-top:58px;' class='hasImage'><?php echo $field_content_scient; ?><small>Cove of Sugiton of the National Park of Calanques – Lilita Vong</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient3; ?><small>A BioLit field trip organized by IODDE association – Association IODDE</small></p>
    <br/>
    <p class='hasImage'><?php echo $field_content_scient2; ?><small>BioLit Junior for children – Laurent Wenk</small></p>
  </div>
</div>

<!--   <div class="row-fluid">
    <div class="span12">
      <strong>Les différentes actions de BioLit</strong>
      <p class='article'>Afin de répondre aux différentes problématiques qui peuvent se présenter sur le littoral, le programme s’organise autour de différentes Actions qui visent un suivi à long terme de la biodiversité terrestre et marine du littoral, ainsi qu’à l’évaluation des activités humaines. Chaque Action répond à un enjeu bien défini, et est ensuite déclinée en tenant compte des spécificités de chaque façade (façade Atlantique, façade Manche-Mer du Nord, ou façade de la Méditerranée). Retrouvez aujourd’hui les actions « Algues brunes et bigorneaux », « Cherchez l’intrus ! », « Saisons de la Mer », « Végétation du littoral », « Activités humaines ». Et n’hésitez pas à contacter Planète Mer pour développer de nouvelles actions.</p>
    </div>
  </div>
    
 -->
<br/>
<br/>

<span class='linePointille'></span>

<br/>
<br/>

<div class="row-fluid">

  
  <div class="span8">
    <h2>Everyone can take part</h2>

    <strong>BioLit, it’s free</strong>
    <p class='article'>BioLit is free and open to all. Planète Mer is an association acting in the public interest, and it has not commercialized BioLit tools in any way. <br/> All available tools can be used freely by environmental education structures or managers of protected spaces and natural resources.</p>
    <br/>
    
    <strong>Alone or accompanied</strong>
    <p class='article'>BioLit allows for several types of field observation. <br/>
    The level 1 guide allows anyone who wishes to, to set off alone or with their family, without needing to be accompanied. <br/>
    The level 2 guide requires the accompaniment of a local BioLit relay [team]. <br/>
    The level 3 guide is reserved for universities, researchers undertaking practical work with biology students, and managers of protected spaces. 
    </p>
    <br/>
    
    <strong>From beginner to specialist: guidance for everyone</strong>
    <p class='article'>Three levels of difficulty are available when following the “<a href="algues-brunes-et-bigorneaux" alt="To the action 'brown algae and winkles'" title="To the action 'brown algae and winkles'">brown algae and winkles</a>” strand: level 1 can be found on this <a href="algues-brunes-et-bigorneaux" alt="To the action 'brown algae and winkles'" title="To the action 'brown algae and winkles'">site</a>. Level 2 can be found on <a href='http://www.vigienature-ecole.fr/' alt='To the website of Vigie Nature Ecole' title='To the website of Vigie Nature Ecole'>Vigie Nature Ecole</a>. Level 3, reserved for scientists, is accessible on request. <br/>
    All level 1s for other monitoring strands can be found on this <a href="liste-actions" alt="To the list of all actions BioLit" title="To the list of all actions BioLit">site </a>.
    </p>
<!-- 
    <strong>Prendre le pouls du littoral</strong>
    <p class='article'>Lieu de rencontre entre la Terre et la Mer, le littoral est une zone riche en termes de biodiversité, mais également très fragile du fait des nombreuses menaces qui pèsent sur ce milieu (pollutions, aménagement et artificialisation du littoral, changement climatique, montée du niveau de la mer ...). Aujourd’hui, il est plus que nécessaire de tous se mobiliser pour suivre son état de santé et pouvoir aider les pouvoirs publics à agir ainsi en conséquence. Prendre soin de son littoral, c’est commencer par bien le connaître et par bien le faire connaître. Les informations sur l’état de la biodiversité manquent sur nos 3800  km de côtes. Et paradoxalement, le littoral attire et reste relativement très fréquenté. Prendre le pouls du littoral à partir de la mobilisation d’un large public constitue l’un des objectifs majeurs de BioLit.</p>
  
    <strong>Qu’est-ce que BioLit ?</strong>
    <p class='article'>BioLit est un programme de science collaborative sur la biodiversité du littoral. Créé et porté par l’association Planète Mer, il est mené en étroit partenariat avec des institutions scientifiques, de nombreuses associations, des agences publiques, des gestionnaires d’espaces naturels et des collectivités. La forte implication des citoyennes et des citoyens est la clé pour que BioLit permette de suivre l’état de santé du littoral, et devienne ainsi un observatoire national participatif du littoral qui travaillera sur le développement et identifiera des indicateurs de suivi de la qualité du littoral.</p>
     -->

  </div>
  <div class="span4" >    
    
    <p style='margin-top:100px;' class='hasImage'><?php echo $field_content_scient4; ?><small>A diver making an observation – Sandrine RUITTON</small></p>
  </div>

</div>
<?php endif; ?>