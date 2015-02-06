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
                                              ///TEMPLATE FOR LA LAISSE DE MER
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
        
      <p class="article">La laisse de mer c’est « ce qui est laissé par la mer » au gré du flux et du reflux des marées, les mouvements des vagues. La laisse de mer, plus ou moins longue, plus ou moins épaisse forme une bande où sont accumulés des éléments vivants ou d’origine vivante (algues, bois mort) et des débris venant des activités humaines comme les sacs plastiques, les morceaux de filets de pêche, les boulettes de pétrole etc.</p>

      <p class="article">Quand la laisse de mer n’est pas trop polluée, elle constitue un véritable écosystème qui va participer à la vie du littoral abritant, sous les algues mortes et autres rejets naturels, de nombreux microorganismes et tout particulièrement crustacés qui vivent dans le sable.</p>
   
      <p class="article">En se dégradant, les algues échouées et autres débris de matière organique vont ainsi fournir à des plantes du haut de l’estran des éléments nutritifs qui vont en permettre le développement avec le cortège d’espèces associées. C’est cet ensemble qui va aussi contribuer à retenir le sable et autres sédiments et ainsi permettre aux plages de se maintenir ou de se développer.</p>

      <p class="article">C’est ensuite toute une chaîne alimentaire qui va s’installer, des organismes et insectes les plus petits aux oiseaux qui vont s’en nourrir en passant par les crabes et autres crustacés.</p>

      <p class="article">Aussi, préserver la laisse de mer, ne pas la supprimer des plages pour des besoins touristiques, c’est préserver ce milieu naturel et toute cette vie du littoral souvent invisible mais pourtant indispensable.</p>
    </div>
</div>
      
<?php else: ?>

<div class="row-fluid">
  <div class="span12"><h1 class='page-header labeLikeH3'>The foreshore</h1></div>
</div>

<div class="row-fluid">
    
    <!-- Colone de texte -->
    <div class="span12">
        
      <p class="article">The foreshore is “what the sea left behind”, what was tossed up by the incoming and outgoing tides, the movements of the waves. The foreshore, whether longer or shorter, thicker or thinner, forms a band that includes an accumulation of living elements or those that come from living elements (algae, dead wood), and debris that comes from human activities, like plastic bags, pieces of fishing nets, oil balls etc. </p>

      <p class="article">When the foreshore is not too polluted, it constitutes a true ecosystem that can contribute to the life of the coastline, sheltering many natural organisms – and particularly crustaceans that live in the sand – under dead algae and other natural detritus. </p>
   
      <p class="article">As it breaks down, beached algae and other organic debris can also provide the plants higher up the foreshore with nutrients that allow them to develop in tandem with associated species. This whole group can also contribute to retaining sand and other sediments, and also allow beaches to be maintained and developed.</p>

      <p class="article">After this a whole food chain is set up, from the smallest organisms and insects, to the birds that feed on them, passing on to crabs and other crustaceans. </p>

      <p class="article">So, preserving the foreshore, not suppressing it on beaches for touristic reasons, is [a way] to preserve the natural environment and all that coastline life, which is often invisible but nonetheless indispensible. </p>
    </div>
</div>


<?php endif; ?>