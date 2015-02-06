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
                                              ///TEMPLATE FOR RESULTATS
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

    <br/>

    <div class="row-fluid">
        
        <!-- Colone de texte -->
        <div class="span12">
            
            <strong>Pour l’Action « Algues brunes et bigorneaux »</strong>
            <p class='article'>BioLit a démarré avec sa première action « Algues brunes et bigorneaux ». Et le bilan est plus qu’encourageant. Retrouvez ici les premiers résultats.</p>
           
             <iframe id='resBiolit' src="http://data.axmag.com/data/201407/20140716/U124062_F292301/FLASH/index.html"></iframe> 

        </div>
    </div>

<?php else: ?>

    <div class="row-fluid">
      <div class="span12"><h1 class='page-header labeLikeH3'>Results</h1></div>
    </div>

    <br/>

    <div class="row-fluid">
        
        <!-- Colone de texte -->
        <div class="span12">
            
            <strong>For “Brown algae and winkles” Action</strong>
            <p class='article'>BioLit has started its first Action – “brown algae and winkles,” and the survey is more than encouraging. You can find the first results here.</p>
           
             <iframe id='resBiolit' src="http://data.axmag.com/data/201407/20140716/U124062_F292301/FLASH/index.html"></iframe> 

        </div>
    </div>

<?php endif; ?>
      
