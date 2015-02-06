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
                                              ///TEMPLATE FOR PROGRAMME & STRUCTURES AMIS
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
            
            <p class="article">Planète Mer veillera à ce que les données contribuent à d’autres programmes de sciences participatives.</p>

            <strong>Vous souhaitez participer à d’autres programmes de sciences participatives ?</strong>

            <p class="article">Il existe plusieurs démarches qui ont porté sur le recensement des programmes de sciences participatives sur la biodiversité : les objectifs communs à toutes ces démarches, étant de donner de la visibilité sur les différents programmes et d’offrir une porte d’entrée commune à plusieurs programmes.</p>

            <br/>

            <p class="article"><b>Les portails de Vigie-Nature et de Vigie-Nature Ecole</b> - Fondé par le Muséum national d'Histoire naturelle et animé par les associations, <b>Vigie Nature</b>est un portail fédérateur de programmes de sciences participatives. Il offre au citoyen curieux de Nature la possibilité de découvrir et de participer à différents observatoires de biodiversité. Ainsi, chacun peut devenir acteur des travaux scientifiques en s'appuyant sur des protocoles simples et reproductibles. La déclinaison du projet en <b>Vigie Nature Ecole</b> en collaboration avec le Ministère de l’Education Nationale, facilite l’intégration des plus jeunes en proposant aux enseignants des parcours de science participative dans le cursus des élèves. BioLit a rejoint ces deux réseaux comme unique observatoire du littoral.</p>
            
            <p><a href='http://vigienature.mnhn.fr/' target="_blank" title='Vigie Nature' alt='Vigie Nature'>Vigie Nature</a></p>
            <p><a href='http://www.vigienature-ecole.fr/' target="_blank" title='Vigie Nature Ecole' alt='Vigie Nature Ecole'>Vigie Nature Ecole</a></p>
            
            <br/>
            
            <p class="article"><b>L’annuaire du Collectif National des Sciences Participatives, Biodiversité</b> – Co-animé par la Fondation Nicolas Hulot et l’Union Nationale des CPIE, le collectif national travaille sur la mise en place d’un annuaire pour recenser l’ensemble des programmes de sciences participatives disponibles en France :</p>
            
            <p><a href='http://www.naturefrance.fr/sciences-participatives/le-collectif-national-sciences-participatives-biodiversite' target="_blank" title='vers le site de L’annuaire du Collectif National des Sciences Participatives' alt='vers le site de L’annuaire du Collectif National des Sciences Participatives'>L’annuaire du Collectif National des Sciences Participatives</a></p>

            <br/>
            <p class="article"><b>Le Réseau d’Observateurs en Plongée</b> – Porté par l’Agence des aires marines protégées, ce réseau recense les programmes de sciences participatives dédiés à la biodiversité littorale et marine.</p>
            <p><a href='http://www.observateurs-plongee.fr' title='vers le site du Réseau d’Observateurs en Plongée' target="_blank" alt='vers le site du Réseau d’Observateurs en Plongée'>Réseau d’Observateurs en Plongée</a></p>

      
            <br/>
            <p>Nous vous recommandons :<br/></p>
            <br/>
            <p><b><b>Pour un large public :</b></b></p>
            <p><a href='http://www.asso-apecs.org/' alt='Les programmes « Requin pèlerin », « CapOeRa »,  porté par l’APECS' target="_blank" title='Les programmes « Requin pèlerin », « CapOeRa »,  porté par l’APECS'>Les programmes « Requin pèlerin », « CapOeRa », porté par l’APECS</a></p>
            <p><a href='http://www.cybellemediterranee.org' alt='Cybelle Méditerranée porté par Cybelle Planète' target="_blank" title='Cybelle Méditerranée porté par Cybelle Planète'>Cybelle Méditerranée porté par Cybelle Planète</a></p>
            <p><a href='http://www.resodema.org/' alt='Observatoire des Déchets en Milieux Aquatiques' target="_blank" title='Observatoire des Déchets en Milieux Aquatiques'><a href='http://www.resodema.org/' title='L’Observatoire des Déchets en Milieux Aquatiques' alt='L’Observatoire des Déchets en Milieux Aquatiques'>L’Observatoire des Déchets en Milieux Aquatiques </a> porté par l'association <a href='http://www.mer-terre.org/' target="_blank" alt='Mer-Terre' title='Mer-Terre'>Mer-Terre</a></p>
            

            <br/>
            <p><b><b>Pour les plongeurs :</b></b></p>
            <p><a href='http://bioobs.fr/' title='BioObs' alt='BioObs'>BioObs</a></p>
            <p>Heima</p>
            <p><a href='http://www.peaubleue.org/Qu-est-ce-que-l-Hippo-ATLAS-,86,2,fr,f.html' alt='HippoAtlas porté par Peau Bleue' target="_blank" title='HippoAtlas porté par Peau Bleue'>HippoAtlas porté par Peau Bleue</a></p>
            

            <br/>
            <p><b><b>Les programmes de nos relais locaux :</b></b></p>
            <p><a href='http://ecorem.fr/medobs-sub' title='MedObs l’observatoire des paysages sous-marins porté par le CPIE Côte Provençale' target="_blank" alt='MedObs l’observatoire des paysages sous-marins porté par le CPIE Côte Provençale'>MedObs l’observatoire des paysages sous-marins porté par le CPIE Côte Provençale Pêcheur sentinelle</a></p>
            <p><a href='http://ecorem.fr/pecheurs-sentinelles/wakka.php?wiki=PagePrincipale' title='Pêcheurs sentinelles' target="_blank" alt='Pêcheurs sentinelles'>Pêcheurs sentinelles</a></p>
            <p><a href='http://www.lestaxinomes.org/' title='Les Taxinomes' target="_blank" alt='Les Taxinomes'>Les Taxinomes</a></p>
            
            
            

        </div>
    </div>
          
<?php else: ?>
    
    <div class="row-fluid">
      <div class="span12"><h1 class='page-header labeLikeH3'>Linked programs and agencies</h1></div>
    </div>

    <div class="row-fluid">
        
        <!-- Colone de texte -->
        <div class="span12">
            
            <p class="article">Planète Mer will ensure that its data contributes to other participative science programs.</p>

            <strong>Do you want to take part in other participatory science projects?</strong>

            <p class="article">There are several initiatives focused on the registration of participative science programs on biodiversity: their common aims are to make the different programs more visible and to offer a shared entry point to several programs. </p>

            <br/>
            <p class="article"><a href='http://vigienature.mnhn.fr/' target="_blank" title='Vigie Nature' alt='Vigie Nature'>Vigie Nature</a> and <a href='http://www.vigienature-ecole.fr/' target="_blank" title='Vigie Nature Ecole' alt='Vigie Nature Ecole'>Vigie Nature Ecole</a> portals - Founded by the Muséum national d'Histoire naturelle and coordinated by the associations:  <b>Vigie-Nature</b> is a federal portal for participative science projects. It gives citizens who are curious about Nature the possibility of discovering and participating in different biodiversity monitoring projects. In this way, everyone can take an active part in scientific work based on simple and reproducible protocols. The rolling out of the project by <b>Vigie-Nature Ecole</b> in collaboration with the Ministère de l’Education Nationale, facilitates integration of young people by offering teachers participatory science projects within the student curriculum. BioLit joined these two networks as the sole coastline-monitoring project. </p>

            <br/>
            <p class="article"><a href='http://www.naturefrance.fr/sciences-participatives/le-collectif-national-sciences-participatives-biodiversite' target="_blank" title='The annuaire du Collectif National des Sciences Participatives, Biodiversité' alt='The annuaire du Collectif National des Sciences Participatives, Biodiversité'>The annuaire du Collectif National des Sciences Participatives, Biodiversité</a> – co-facilitated by the Fondation Nicolas Hulot  and the Union Nationale des CPIE, this national group works to set up a yearbook registering all the participative science programs available in France: </p>
            
            <br/>
            <p class="article"><a href='http://www.observateurs-plongee.fr' title='vers le site du Réseau d’Observateurs en Plongée' target="_blank" alt='vers le site du Réseau d’Observateurs en Plongée'>Réseau d’Observateurs en Plongée</a> – Supported by the Agence des aires marines protégées, this network registers participative science programs dedicated to coastline and marine biodiversity.</p>
      
            <br/>
            <p>We recommend:<br/></p>
            <br/>
            <p><b><b>Pour un large public :</b></b></p>
            <p><a href='http://www.asso-apecs.org/' alt='Les programmes « Requin pèlerin », « CapOeRa »,  porté par l’APECS' target="_blank" title='Les programmes « Requin pèlerin », « CapOeRa »,  porté par l’APECS'>Requin pèlerin”and “CapOeRa”, supported by APECS</a></p>
            <p><a href='http://www.cybellemediterranee.org' alt='Cybelle Méditerranée porté par Cybelle Planète' target="_blank" title='Cybelle Méditerranée porté par Cybelle Planète'>Cybelle Méditerranée supported by Cybelle Planète</a></p>
            <p><a href='http://www.resodema.org/' alt='Observatoire des Déchets en Milieux Aquatiques' target="_blank" title='Observatoire des Déchets en Milieux Aquatiques'><a href='http://www.resodema.org/' title='L’Observatoire des Déchets en Milieux Aquatiques' alt='L’Observatoire des Déchets en Milieux Aquatiques'>L’Observatoire des Déchets en Milieux Aquatiques </a> supported by the association <a href='http://www.mer-terre.org/' target="_blank" alt='Mer-Terre' title='Mer-Terre'>Mer-Terre</a></p>
            

            <br/>
            <p><b><b>For divers:</b></b></p>
            <p><a href='http://bioobs.fr/' title='BioObs' alt='BioObs'>BioObs</a></p>
            <p>Heima</p>
            <p><a href='http://www.peaubleue.org/Qu-est-ce-que-l-Hippo-ATLAS-,86,2,fr,f.html' alt='HippoAtlas porté par Peau Bleue' target="_blank" title='HippoAtlas porté par Peau Bleue'>HippoAtlas supported by Peau Bleue</a></p>
            

            <br/>
            <p><b><b>Our local relay programs: </b></b></p>
            <p><a href='http://ecorem.fr/medobs-sub' title='MedObs l’observatoire des paysages sous-marins porté par le CPIE Côte Provençale' target="_blank" alt='MedObs l’observatoire des paysages sous-marins porté par le CPIE Côte Provençale'>MedObs l’observatoire des paysages sous-marins supported by CPIE Côte Provençale Pêcheur sentinelle</a></p>
            <p><a href='http://ecorem.fr/pecheurs-sentinelles/wakka.php?wiki=PagePrincipale' title='Pêcheurs sentinelles' target="_blank" alt='Pêcheurs sentinelles'>Pêcheurs sentinelles</a></p>
            <p><a href='http://www.lestaxinomes.org/' title='Les Taxinomes' target="_blank" alt='Les Taxinomes'>Les Taxinomes</a></p>

            
            
            

        </div>
    </div>
<?php endif; ?>