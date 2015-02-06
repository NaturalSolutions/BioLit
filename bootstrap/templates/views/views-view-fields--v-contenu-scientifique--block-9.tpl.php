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
                                              ///TEMPLATE FOR Les habitats 
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
        
      <strong>L’estran rocheux</strong>
      <p class="article">L’estran est la zone de balancement des marées, découverte à marée basse et recouverte à marée haute. On parle d’estran rocheux pour désigner ces milieux de roches dures et peu friables, et sur lesquels il est possible parfois d’y retrouver du sable qui aurait été apporté par les courants, lors du cycle des marées.</p>

      <p class="article">Les rochers sont façonnés par le climat et par les organismes animaux et végétaux qui les habitent. Les fluctuations de la salinité, les embruns et les fortes différences de températures entre le jour et la nuit peuvent éroder la roche et modifier son aspect. Quand l’eau ruisselle sur la roche elle va la creuser aux endroits où cette dernière est la plus fragile et où il préexiste des failles. La surface rocheuse n’étant pas homogène, ses interstices et ses recoins fournissent aux organismes de nombreux endroits où se cacher et se protéger alors que les parties planes permettent à d’autres de se fixer solidement. Dans le dernier cas, il est d’ailleurs possible de distinguer les endroits où des organismes étaient fixés car ils y laissent souvent des marques visibles.</p>

      <p class="article">Les organismes qui vivent sur l’estran rocheux possèdent un bon moyen de fixation pour ne pas être emportés par les marées. Les patelles et les balanes ont besoin d’une roche assez régulière pour pouvoir se fixer de manière à ce qu’il n’y ait pas de jour entre la roche et leur coquille. Les algues se fixent quant à elles grâce à un crampon. Pour résister au desséchement lors de la basse mer, certains organismes secrètent du mucus pour maintenir le niveau d’humidité qui leur est nécessaire. Par exemple, si une patelle ne peut pas se fermer hermétiquement de l’extérieur lors des marées basses, elle va perdre sa réserve d’eau et se dessécher. C’est pourquoi sa coquille est parfaitement adaptée à la forme de la roche où elle se trouve.</p>

      <strong>Les plages de sable et de galets</strong>
      <p class="article">Le sable, dont sont constituées les plages, est un terme très général pour désigner des particules plus ou moins fines. Ces particules sont classées selon leur granulométrie (le classement présenté ici n’est qu’une indication, car il existe d’autres échelles) :</p>

      <p>
        <ul>
        <li>Vase / Argile => particules dont le diamètre est inférieur à 0,06 mm</li>
        <li>Sables => particules dont le diamètre est compris entre 0,06 mm et 2 mm</li>
        <li>Graviers => particules dont le diamètre est compris entre 2 mm et 1 cm</li>
        <li>Galets => particules dont le diamètre est supérieur à 1 cm</li>
        </ul>
      </p>

      <p class="article">Les espèces présentes sur les plages de galets et de sable sont très différentes, ces deux milieux étant très distincts :</p>

      <p class="article"><b>Pour les plages de sable</b> - Même si une plage semble déserte quand on la voit à marée basse, ce n’est qu’une apparence : nombre d’organismes se sont enfouis pour éviter la dessiccation (perte d’eau, assèchement), ainsi que les variations de températures et de salinité. C’est à marée haute que l’on peut observer la vie. Sur l’étage supra-littoral, et plus particulièrement près des dépôts d’algues déposés par les marées successives, on peut observer des puces de mer (= des ligies).</p>

      <p class="article"><b>Pour les plages de galets</b> - Une plage de galets est constituée de fragments de roches ayant une forme particulière : ceux-ci sont très lisses et de formes arrondies. Cette physionomie est le résultat du travail répété de l’eau, des intempéries, des frottements et des vagues qui les ont polis et refaçonnés.</p>
    </div>
</div>

<?php else: ?>

<div class="row-fluid">
  <div class="span12"><h1 class='page-header labeLikeH3'>Habitats</h1></div>
</div>

<div class="row-fluid">
    
    <!-- Colone de texte -->
    <div class="span12">
        
      <strong>The rocky foreshore</strong>
      <p class="article">The foreshore is an intertidal zone, exposed at low tide and submerged at high tide. We talk about the rocky foreshore when referring to areas of durable, friable rocks, which may also contain sand, which is brought there by the currents, during tidal cycles.</p>

      <p class="article">The rocks are shaped by the climate and the animal and vegetable organisms that live in them.  Fluctuations in salinity, sea spray, and the great differences between the temperatures at night and during the day can erode the rock and change its aspect. When water flows over the rock it can crack it in places where it is most fragile or where there are pre-existing faults. As the rocky surface is not homogenous, its nooks and crannies provide many places for organisms to hide and protect themselves, while the flat parts allow others to gain a firm foothold. In the latter case, it is also possible to discern the places where organisms were attached as they often leave visible marks.</p>

      <p class="article">The organisms that live on the rocky foreshore have a good way of attaching themselves so that they are not dragged off by the tides. Limpets and barnacles need a rock that is regular enough to allow them to attach themselves without any daylight showing between the rock and their shell. Algae bind about them with a clamp. In order to avoid drying out at low tide, some organisms secrete mucus in order to maintain their required humidity level. For example, if a limpet cannot seal itself hermetically to the outside during low tides, it will lose its water reservoir and dry out. That is why its shell is perfectly adapted to the rock on which it is found.</p>

      <strong>Sand and shingle beaches</strong>
      <p class="article">Beach sand, is a very general term to refer to particles that are more or less fine. These particles are classed according to their granule size (the French classification shown here is only gives an indication, as there are other scales:</p>

      <p>
        <ul>
        <li>Vase / Argile [Clay] => particles with a diameter of less than 0.06 mm</li>
        <li>Sables [Sands] => particles with a diameter of between 0.06 mm and 2 mm</li>
        <li>Graviers [Grits/Gravels] => particles with a diameter of between 2 mm and 1 cm</li>
        <li>Galets [ Pebbles] => particles with a diameter greater than 1 cm</li>
        </ul>
      </p>

      <p class="article">The species present on sandy and gravel beaches are very different, as these two environments differ greatly:</p>

      <p class="article"><b>Sandy beaches</b> - Even if the beach seems deserted when seen at low tide, this is just an appearance: a number of organisms are nestling there in order to avoid desiccation (water loss, drying out), as well as variations in temperature and salinity [salt levels]. It is at high tide that this life can be seen. On the supralittoral stage, and most particularly near to piles of algae deposited by successive tides, we can see sea roaches [ligia].</p>

      <p class="article"><b>Pebbly beaches </b> - A pebbly beach is made up of fragments of rocks with a particular form: they are very smooth and rounded. This outer appearance is the result of the repeated action of water, bad weather, friction, and of the waves, which has polished and shaped them.</p>
    </div>
</div>


<?php endif; ?>
      
