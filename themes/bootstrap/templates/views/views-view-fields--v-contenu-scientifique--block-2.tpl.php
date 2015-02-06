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
                                              ///TEMPLATE FOR LES PARTENAIRES
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
<br/>
<div class="row-fluid">
    <!-- Colone de texte -->
    <div class="span10">
    
      <strong>Des partenaires animateurs et en action sur le terrain</strong>
      <p class='article'>Les structures partenaires s’impliquent à leur initiative dans BioLit et contribuent par leur dynamisme à faire avancer la connaissance sur le littoral :<br/>
      - soit en tant que « <a href='carte-des-relais' alt='vers la carte des relais' title='vers la carte des relais'>relai local</a> » pour accompagner du public, et réaliser dans le cadre de leurs activités des sorties BioLit,<br/>
      - soit en tant que « <a href='carte-des-relais' alt='vers la carte des relais' title='vers la carte des relais'>coordinateur régional</a> » pour identifier et mobiliser d’autres structures autour du programme BioLit.
      </p>
      
      <br/>
      <strong>Des partenaires scientifiques</strong>
      
      <h4>Co-fondateurs du programme</h4>
      <br/>
      
      <p class='article'><b>Muséum national d’Histoire naturelle (MNHN)</b> – Le Muséum est un acteur emblématique dans le domaine de la biodiversité et une autorité en la matière. Compte tenu de l’importance du volet scientifique, l’association Planète Mer s’est rapprochée tout naturellement de l’institution au début de l’année 2009. A la suite de différentes rencontres et entretiens, il a été décidé de mener une première phase d’identification des thématiques scientifiques qui sont progressivement développées dans le cadre du programme BioLit. Historiquement, la première de ces thématiques est « <a href='algues-brunes-et-bigorneaux' alt='Vers le programme Algues brunes et bigorneaux' title='Vers le programme Algues brunes et bigorneaux' >Algues brunes et bigorneaux</a> ».</p>
      <p class='article'><b>Université de Rennes 1</b> – L’Unité de Recherche Biodiversité fonctionnelle et gestion des territoires assure, aux côtés du Muséum national d’Histoire naturelle (MNHN), la supervision de la thématique scientifique « Algues brunes et bigorneaux » du programme BioLit.</p>
      
      <br/>    
      <h4>Membres du Conseil scientifique</h4><i class='legendForLabel'>(uniquement pour la façade Atlantique, Manche et Mer du Nord)</i>
      <br/>       
      
      <p class='article'><b>Centre d’Etude et de Valorisation des Algues (CEVA)</b> – Basé à Pleubian dans les Côtes d’Armor, le CEVA est le seul centre technique en Europe dédié à l'étude et à la valorisation des végétaux marins. Créé en 1982 avec le soutien des collectivités locales bretonnes et d’industriels de la filière algues, il met en oeuvre une recherche appliquée sur les algues (macro & micro), les végétaux marins, et les biotechnologies marines. C’est un organisme de recherche privé et un centre technique du réseau ACTIA, labellisé Institut Technique Agro-Industriel (ITAI) par le Ministère de l’Agriculture et de la Pêche.</p>
      <p class='article'><b>Ifremer (Dinard)</b> – L'Ifremer contribue, par ses travaux et expertises, à la connaissance des océans et de leurs ressources, à la surveillance du milieu marin et du littoral et au développement durable des activités maritimes. À ces fins, il conçoit et met en œuvre des outils d'observation, d'expérimentation et de surveillance, et gère des bases de données océanographiques. Créé en 1984, l'Ifremer est un établissement public à caractère industriel et commercial (EPIC), placé sous la tutelle conjointe des ministères de l'Enseignement supérieur et de la Recherche et de l'Écologie, du Développement Durable et de l'Énergie.</p>
      <p class='article'><b>Institut Universitaire Européen de la Mer (IUEM)</b> – L’Institut Universitaire Européen de la Mer (IUEM) est un organisme pluridisciplinaire dont les objectifs sont d’accroître la connaissance du monde marin, d’étudier et observer les interactions de ce monde marin avec l’atmosphère et les espaces continentaux, de former des chercheurs et des cadres dans ces domaines, et de contribuer à l’observation des modifications, naturelles ou causées par l’homme dans ce milieu.</p>
      <p class='article'><b>Station Biologique de Roscoff</b> – La Station Biologique de Roscoff est un centre de recherche et d'enseignement en biologie et écologie marines situé sur la côte nord de la Bretagne. Elle dépend de l’Université Pierre et Marie Curie et du CNRS. Elle réalise une mission d’observation du littoral dans le cadre de deux réseaux nationaux : le Service d’Observation du Milieu Littoral (SOMLIT) pour différents paramètres hydro-climatiques afin de mieux comprendre l’impact des changements climatiques et des activités humaines sur le fonctionnement des écosystèmes et le réseau REBENT, coordonné par l’Ifremer, pour la surveillance des écosystèmes benthiques.</p>
      <p class='article'><b>Université de la Rochelle</b> – Le Laboratoire Environnement et Sociétés est une unité mixte de recherche (CNRS/Université de La Rochelle) qui intègre des compétences dans différents domaines scientifiques dont les sciences de l’environnement (biologie, écologie, géophysique), les sciences humaines (géographie, histoire), la chimie et les biotechnologies. Elle s’appuie sur cette pluridisciplinarité pour répondre aux enjeux du développement durable dans le cadre de ses recherches avec pour principal objet d’étude : le littoral.</p>

      <br/>
      <strong>Des partenaires techniques</strong>
      <p class='article'><b>DialTer</b> – DialTer conseille, accompagne et forme les organisations publiques et privées qui souhaitent susciter la participation des acteurs du territoire ou avancer par la voie du dialogue dans la résolution de leurs problèmes d'aménagement et de développement, de gestion de l'environnement et de partage des ressources. DialTer accompagne Planète Mer grâce à la Fondation de France dans le but de renforcer le volet participatif du programme BioLit, c’est-à-dire d’associer à toutes les phases de construction et de développement du programme et des Actions, les structures et personnes qui peuvent être concernées (collectivités territoriales, associations, gestionnaires d’espaces naturels, usagers du littoral...) et renforcer ainsi le rôle de chacun.</p>
      <!-- <p class='article'><b>Conservatoire Botanique National méditerranéen de Porquerolles</b> – Le conservatoire botanique national méditerranéen de Porquerolles a vu le jour le 15 février 1979. Il réalise l'inventaire de la flore et des habitats naturels et semi-naturels, en collaboration avec un réseau de scientifiques (universités, muséums…) et de botanistes de terrain : repérage et recensement des populations d'espèces menacées, évaluation de leur état, nature et niveau de menace. Dans sa mission d'inventaire et de connaissance de la flore sur sa zone d'agrément, le conservatoire est donc amené à réaliser des prospections, à animer un réseau de collaborateurs, à recueillir de l'information et enfin à compiler l'information historique en exploitant des documents bibliographiques. Toute cette information est traitée pour être intégrée dans les bases de données du Conservatoire qui, ensemble, constituent son système d'information sur la flore. Le Conservatoire a participé à la recommandation des espèces à suivre dans le cadre de la thématique "Chlorophylle-mania".</p> -->
      
      <strong>Des partenaires financiers</strong>
      <p class='article'><b>MEDDE</b> – Le ministère de l’Ecologie, du Développement Durable et de l’Energie définit et met en œuvre la politique nationale pour la mer et les activités maritimes, notamment en matière de connaissance et de protection de la diversité biologique marine. Depuis 2010, le Ministère soutient le programme BioLit sur l’ensemble du territoire. Le programme BioLit a reçu avec la société Logica, le trophée du Mécénat de compétences en février 2012.</p>
      <p class='article'><b>Agence de l’Eau Rhône Méditerranée Corse</b> – Sous tutelle du MEDDE, l’Agence de l’eau Rhône-Méditerranée et Corse est un établissement public administratif qui incite et aide, à l’échelle des bassins versants, à une utilisation rationnelle des ressources en eau, à la lutte contre leur pollution et à la protection des milieux aquatiques afin d’atteindre le bon état écologique des eaux, dont les eaux littorales. L’Agence de l’eau Rhône-Méditerranée et Corse travaille sur la préservation et la restauration des milieux. La structure s’est investie aux côtés de Planète Mer pour que BioLit soit développé sur la façade méditerranéenne et pour qu’un observatoire citoyen sur le littoral soit créé pour protéger la mer Méditerranée.</p>
      <p class='article'><b>Agence des aires marines protégées</b> – Sous tutelle du MEDDE, l’Agence des aires marines protégées est un établissement public à caractère administratif ayant pour principales missions : l’appui aux politiques publiques de création et gestion d’aires marines protégées sur l’ensemble du domaine maritime français, l’animation du réseau des aires marines protégées, le soutien technique et financier aux parcs naturels marins, le renforcement du potentiel français dans les négociations internationales sur la mer. Mandatée pour l’animation du réseau Mer du Système d’Information sur la Nature et les Paysages (SINP Mer), l’Agence appuie Planète Mer au niveau national pour que les données du programme BioLit alimentent le SINP afin d’être accessibles par tous.</p>
      <p class='article'><b>DREAL PACA</b> – La Direction Régionale de l’Environnement et de l’Aménagement et du Logement, service déconcentré du MEDDE en Région PACA, soutient BioLit depuis 2013 afin de faciliter la sensibilisation du public aux enjeux du territoire particulier que sont les écosystèmes côtiers et marins de la Région PACA trop souvent uniquement considérés comme des zones de loisirs.</p>
      <p class='article'><b>Fondation de France</b> – Depuis 1969, la Fondation de France soutient des projets concrets et innovants qui répondent aux besoins des personnes face aux problèmes posés par l’évolution rapide de la société. Elle agit principalement dans trois domaines : l’aide aux personnes vulnérables, le développement de la connaissance et l’environnement. Elle favorise également le développement de la philanthropie. Elle aide les donateurs à choisir les meilleurs projets, conseille les fondateurs sur leur champ d’intervention, leur stratégie et sur le cadre juridique et fiscal le plus approprié. Indépendante et privée, la Fondation de France ne reçoit aucune subvention et ne peut agir que grâce à la générosité des donateurs. La Fondation de France est un partenaire majeur de Planète Mer grâce à son soutien inscrit dans le temps. Son adhésion à BioLit en a fortement accéléré le développement et permis de renforcer le volet participatif de BioLit grâce à l’appui des compétences. En septembre 2012, le programme BioLit s’est vu décerné les « Lauriers de la Fondation de France » notamment pour son rôle jugé exemplaire et innovant dans le domaine de l’environnement.</p>
      <p class='article'><b>Fondation TOTAL</b> – La Fondation d’entreprise Total, créée en 1992 au lendemain du Sommet de la Terre de Rio, s’est consacrée pendant 16 ans à l’environnement, et plus particulièrement à la biodiversité marine. Dans tous ses champs d’activité, la Fondation privilégie les partenariats de long terme. Il s’agit, au-delà du soutien financier, de croiser les expertises et de les renforcer pour enrichir l’intelligence collective. Grâce à son soutien, notamment sur le développement de l’action « Algues brunes et bigorneaux » sur la façade Atlantique – Manche et Mer du Nord, la Fondation d’entreprise Total permet aussi à BioLit d’inscrire son action dans le temps, une condition indispensable à la réussite des programmes de science participative.</p>
      <p class='article'><b>Nausicaa</b> – Nausicaa a la volonté de sensibiliser au Développement Durable et s’engage pour aider à la préservation de l’Océan Mondial. La structure a initié et co-préside le Réseau Océan Mondial (World Ocean Network-WON) qui regroupe plus de 400 aquariums et associations impliquées dans la sensibilisation du public. Nausicaà est depuis l’origine un de partenaires les plus proches de Planète Mer et de BioLit.</p>
      <p class='article'><b>Fondation Nature et Découvertes</b> – La Fondation reçoit, tous les ans, 10% des bénéfices générés par l’activité commerciale de l’entreprise. C'est "l'impôt volontaire pour la planète" que s'impose l'équipe de Nature & Découvertes pour que la nature reste vivante, variée et belle, et que les hommes s'y épanouissent. Plus d'un millier d'associations, depuis lors, ont ainsi bénéficié de ces financements, accomplissant ainsi un travail exceptionnel.</p>
      
      <br/>
      <strong>Des partenaires transfrontaliers</strong>
      <p class='article'><b>Programme INTERREG franco-anglais « PANACHE »</b> – Ce projet consiste à une meilleure protection de l’environnement de la Manche par la mise en réseau des aires marines protégées existantes. Il vise, entre autres, à promouvoir la sensibilisation générale aux aires marines protégées (AMP), notamment par le développement de programmes de sciences participatives. C’est dans ce cadre que l’Agence des aires marines protégées soutient le développement transfrontalier du programme BioLit, à l’échelle de la Manche, pour le suivi des espèces non-indigènes (Action <a href='les-nouveaux-arrivants?language=en' alt="Vers l'action 'Les nouveaux arrivants'" title="Vers l'action 'Les nouveaux arrivants'" >Nouveaux Arrivants</a> »).</p>
      <p class="article"> Les partenaires du projet sont :  <br/>
      <div id="multiLogo4Panache"></div>
      </p>



      <div class="row-fluid" class='lineBotOfLogo'>
        <div class="span3">
          <div id='logoNausicaa'></div>   
        </div>
        <div class="span3">
          <div id='logoNetD'></div> 
        </div>
        <div class="span3">
          <div id='logoIntereg'></div> 
        </div>
        <div class="span3">
          <div id='logoPanache'></div> 
        </div>
      </div>
    </div>

    <!-- Colonne de logo -->
    <div class="span2 logoPart">      
        <div id='logoHistoireNat'></div>
        <div id='logoUnivRenne'></div>
        <div id='logoCeva'></div>
        <div id='logoIfremer'></div>
        <div id='logoIuem'></div>
        <div id='logoRoscoff'></div>
        <div id='logoLaRochelle'></div>
        <div id='logoDialter'></div> 
        <div id='logoConserv'></div> 
        <div id='logoMede'></div>
        <div id='logoAgenceEau'></div>
        <div id='logoAiresMarines'></div>  
        <div id='logoDreal'></div>  
        <div id='logoFondationFr'></div> 
        <div id='logoFondationTotal'></div>   
        
      
    </div>
</div>
      

<?php else: ?>


<div class="row-fluid">
  <div class="span12"><h1 class='page-header labeLikeH3'>Partners</h1></div>
</div>
<br/>
<div class="row-fluid">
    <!-- Colone de texte -->
    <div class="span10">
    
      <strong>Partners in facilitation and field actions</strong>
      <p class='article'>Partner agencies incorporate their own initiative within BioLit and their dynamism contributes to increasing knowledge of the coastline:<br/>
      - whether this as a « <a href='carte-des-relais' alt='To the map of relays' title='To the map of relays'>local relay</a> » to accompany the public, carrying out BioLit sorties within the framework of their own activities,<br/>
      - soit en tant que « <a href='carte-des-relais' alt='To the map of relays' title='To the map of relays'>regional coordinator</a> » identifying and mobilizing other structures around the BioLit program. 
      </p>
      
      <br/>
      <strong>Scientific partners</strong>
      
      <h4>Program co-founders</h4>
      <br/>
      
      <p class='article'><b>Muséum national d’Histoire naturelle (MNHN)</b> – The museum is an iconic actor in the area of biodiversity and an authority on the issue. Taking into account the importance of the program’s scientific component, the Planète Mer association naturally approached the institution at the start of 2009. Following various meetings and discussions, it was decided to conduct an initial phase identifying different scientific themes that could be developed progressively within the framework of the BioLit program. Historically, the first of these themes is “brown algae and winkles.”</p>
      <p class='article'><b>Université de Rennes 1</b> – Alongside the Muséum national d’Histoire naturelle (MNHM), the Unité de Recherche Biodiversité fonctionnelle et gestion des territoires ensures supervision of the BioLit program’s “brown algae and winkles” scientific theme.</p>
      
      <br/>    
      <h4>Members of the Scientific Council</h4><i class='legendForLabel'>(Solely for the Atlantic, Channel and North Sea front)</i>
      <br/>       
      
      <p class='article'><b>Centre d’Etude et de Valorisation des Algues (CEVA)</b> – Based in Pleubian on the Côtes d’Armor, CEVA is the only European technical center dedicated to the study and development of marine plants. Created in 1982 with the support of local Breton groups and the industrial algae sector, it initiates applied research into macro and micro algae, marine plants and marine biotechnologies. It is a private research institute and a technical center in the ACTIA network, named the Institut Technique Agro-Industriel (ITAI) by the Ministère de l’Agriculture et de la Pêche.</p>
      <p class='article'><b>Ifremer (Dinard)</b> – Through its work and expertise, Ifremer contributes to knowledge of the oceans and their resources, to monitoring of the marine environment and the coastline, and to the sustainable development of maritime activities. To these ends, it develops and puts in place tools for observation, experimentation and monitoring, and manages oceanographic databases. Created in 1984, Ifremer is a public institution that is industrial and commercial in nature (EPIC), under the joint direction of the Ministères de l'Enseignement supérieur et de la Recherche et de l'Écologie, du Développement Durable et de l'Énergie.</p>
      <p class='article'><b>Institut Universitaire Européen de la Mer (IUEM)</b> – The Institut Universitaire Européen de la Mer (IUEM) is a multidisciplinary body whose aims are to increase knowledge of the marine world, to study and observe the marine world’s interactions with the atmosphere, and with mainland areas, to train researchers and develop frameworks within these areas, and to contribute to observation of natural or man made changes within this environment.</p>
      <p class='article'><b>Station Biologique de Roscoff</b> – The Station Biologique de Roscoff is a marine biology and ecology research and teaching center situated on the north coast of Brittany [Bretagne]. It is a subsidiary of the Université Pierre et Marie Curie and of CNRS [CENTRE NATIONAL DE LA RECHERCHE SCIENTIFIQUE]. It has a mission to observe the coastline within the framework of two national networks: the Service d’Observation du Milieu Littoral (SOMLIT) working within several hydro-climatic parameters, in order to better understand the impact of climate change and human activities on ecosystem functioning, and of the REBENT [Réseau benthique] network, coordinated by Ifremer, to survey benthic ecosystems.</p>
      <p class='article'><b>Université de la Rochelle</b> – The Laboratoire Environnement et Sociétés is a mixed research unit (CNRS/Université de La Rochelle) that brings together skills in different areas such as environmental sciences (biology, ecology, geophysics), human sciences (geography, history), chemistry and biotechnologies. It relies on this multidisciplinarity to respond to issues of sustainable development within the framework of its research, whose main object of study is the coastline.</p>

      <br/>
      <strong>Technical partners</strong>
      <p class='article'><b>DialTer</b> – DialTer advises, mentors and creates public and private organizations that seek to promote the participation of local actors or to move forward through dialog to resolve the problems that these actors have that are linked to management and development or to the sharing of resources. Thanks to the Fondation de France, DialTer mentors Planète Mer as it aims to strengthen the participative component of the BioLIt program: that is to say it shares in all phases of program construction and development, and all actions and structures. It also works together with all interested parties (local groups, associations, managers of natural spaces, coastline users…) to strengthen each one’s role.</p>
      <!-- <p class='article'><b>Conservatoire Botanique National méditerranéen de Porquerolles</b> – Le conservatoire botanique national méditerranéen de Porquerolles a vu le jour le 15 février 1979. Il réalise l'inventaire de la flore et des habitats naturels et semi-naturels, en collaboration avec un réseau de scientifiques (universités, muséums…) et de botanistes de terrain : repérage et recensement des populations d'espèces menacées, évaluation de leur état, nature et niveau de menace. Dans sa mission d'inventaire et de connaissance de la flore sur sa zone d'agrément, le conservatoire est donc amené à réaliser des prospections, à animer un réseau de collaborateurs, à recueillir de l'information et enfin à compiler l'information historique en exploitant des documents bibliographiques. Toute cette information est traitée pour être intégrée dans les bases de données du Conservatoire qui, ensemble, constituent son système d'information sur la flore. Le Conservatoire a participé à la recommandation des espèces à suivre dans le cadre de la thématique "Chlorophylle-mania".</p> -->
      
      <strong>Financial partners</strong>
      <p class='article'><b>MEDDE</b> – The Ministère de l’Ecologie, du Développement Durable et de l’Energie defines and implements national policy for the sea and maritime activities, including the knowledge and protection of marine biological diversity. The Ministry has supported BioLit since 2010, across its whole territory. Along with the Logica society, BioLit received the Mécénat [Ministère de la Culture et de la Communication] skills trophy in February 2012. </p>
      <p class='article'><b>Agence de l’Eau Rhône Méditerranée Corse</b> – Under the direction of MEDDE, the Agence de l’eau Rhône-Méditerranée et Corse is a public government establishment that promotes and supports the rational use of water resources at the watershed level, and fights against water pollution and for the protection of aquatic environments, with the aim of achieving good water ecology, including in coastal waters. The Agence de l’eau Rhône-Méditerranée et Corse works to preserve and restore environments. The agency is committed with BioLit to developing BioLit on the Mediterranean front and to creating citizen monitoring of the coastline, in order to protect the Mediterranean Sea. </p>
      <p class='article'><b>Agence des aires marines protégées</b> – Under the direction of MEDDE, the Agence des aires marines protégées is a public government establishment whose main missions are these: to support public policies for the creation and management of protected marine areas throughout the whole French maritime territory, to facilitate a network of protected marine areas, the technical and financial support of natural marine parks, and to strengthen the French position in international negotiations on the sea. Under the mandate of the Mer du Système d’Information sur la Nature et les Paysages (SINP Mer) network, the Agency supports Planète Mer at the national level with the aim of enabling data from the BioLit program, as well as that from SINP, to be accessible to all.</p>
      <p class='article'><b>DREAL PACA</b> – The Direction Régionale de l’Environnement et de l’Aménagement et du Logement, service, which devolved from MEDDE in the PACA [Provence – Alpes – Cote d’Azur] Region, has supported BioLit since 2013 to raise public awareness of issues relating to the specific coastal and marine ecosystems of the PACA Region, which is too frequently viewed as only leisure zones. </p>
      <p class='article'><b>Fondation de France</b> – Since 1969 the Fondation de France has supported specific innovative projects that respond to the needs of people faced with problems posed by the rapid evolution of society. It acts mainly in three domains: aid to vulnerable persons, knowledge development, and the environment. It also promotes the development of philanthropy. It helps donors to choose the best projects, and advises founders on their area of intervention, their strategy and the most appropriate legal and financial framework. Independent and private, the Fondation de France does not receive any subsidies and can only act thanks to the generosity of its donors. The Fondation de France is one of Planète Mer’s major partners thanks to its long-term support. Its support of BioLit has greatly accelerated the latter’s development and strengthened BioLit’s participative component thanks to its skill support. In September 2012 the BioLit program was awarded the “Lauriers de la Fondation de France” for its exemplary and innovative role in the area of the environment. </p>
      <p class='article'><b>Fondation TOTAL</b> – The Fondation d’entreprise Total, created in 1992 in the wake of the Rio Earth Summit has dedicated itself to the environment for 16 years, and to marine biodiversity in particular. The Foundation privileges long term partnerships in all its fields of activity. Going beyond financial support, this involves developing and increasing skills to enhance collective intelligence. Thanks to its support, including support for the “brown algae and winkles” action on the Atlantic –Channel and  North Sea front, the Fondation d’entreprise Total is also allowing BioLit to develop its action long-term, something indispensible to the success of participative science programs.</p>
      <p class='article'><b>Nausicaa</b> – Nausicaa is dedicated to raising awareness of sustainable development and is committed to helping to preserve the World Ocean. The agency initiated and co-chairs the Réseau Océan Mondial/World Ocean Network-WON, which comprises more than 400 aquariums and associations involved in raising public awareness. Nausicaà has been one of Planète Mer and BioLit’s closest partners from the beginning.</p>
      <p class='article'><b>Fondation Nature et Découvertes</b> – Every year the Foundation receives 10% of the income generated by the company’s commercial activity. This is a “voluntary tax for the planet," levied by Nature & Découvertes to allow nature to remain alive, varied and beautiful, and to allow people to flourish within it. Subsequently, more than a thousand associations have also benefited from these funds, which is an outstanding achievement.</p>
      
      <br/>
      <strong>Cross-border partners </strong>
      <p class='article'><b>INTERREG franco-anglais: PANACHE program</b> – This project consists of a better level of protection of the Channel environment by implementation of a network of existing protected marine areas. Among other things, it aims to promote general awareness of protected marine areas (PMAs), including the development of participative science programs. It is within this framework that the des aires marines protégées is supporting the international development of the BioLit program at the Channel level, monitoring <a href='the-new-arrivals?language=en' alt="To the action 'The new arrivals'" title="To the action 'The new arrivals'" >new arrivals species</a>.</p>
      <p class="article">The project partners are:  <br/>
      <div id="multiLogo4Panache"></div>
      </p>



      <div class="row-fluid" class='lineBotOfLogo'>
        <div class="span3">
          <div id='logoNausicaa'></div>   
        </div>
        <div class="span3">
          <div id='logoNetD'></div> 
        </div>
        <div class="span3">
          <div id='logoIntereg'></div> 
        </div>
        <div class="span3">
          <div id='logoPanache'></div> 
        </div>
      </div>
    </div>

    <!-- Colonne de logo -->
    <div class="span2 logoPart">      
        <div id='logoHistoireNat'></div>
        <div id='logoUnivRenne'></div>
        <div id='logoCeva'></div>
        <div id='logoIfremer'></div>
        <div id='logoIuem'></div>
        <div id='logoRoscoff'></div>
        <div id='logoLaRochelle'></div>
        <div id='logoDialter'></div> 
        <div id='logoConserv'></div> 
        <div id='logoMede'></div>
        <div id='logoAgenceEau'></div>
        <div id='logoAiresMarines'></div>  
        <div id='logoDreal'></div>  
        <div id='logoFondationFr'></div> 
        <div id='logoFondationTotal'></div>   
        
      
    </div>
</div>


<?php endif; ?>
