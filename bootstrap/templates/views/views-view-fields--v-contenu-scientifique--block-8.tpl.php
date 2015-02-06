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
                                              ///TEMPLATE FOR LES MAREE
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
        
      <strong>Qu’est-ce qu’une marée ?</strong>
      <p class="article">Sur certaines parties du littoral, il est possible de constater que la mer se retire au loin et revient plusieurs heures après, dans un va-et-vient incessant. Le niveau de la mer varie donc à vue d’œil sur certaines parties du littoral français, et ce mouvement cyclique du niveau de la mer correspond à ce qu’on appelle <b>les marées</b>. Ces marées se remarquent relativement bien sur les côtes Atlantique et de la Manche et Mer du Nord, mais restent très discrètes en Méditerranée. </p>

      <strong>Rôles de la Lune et du Soleil</strong>
      <p class="article">Les marées s’expliquent par le mouvement des mers et océans, qui subissent la force gravitationnelle de la Lune et du Soleil (c’est-à-dire l’attraction des masses d’eau des océans exercée par la Lune et le Soleil). La Lune et le Soleil sont en mouvement autour de la Terre, et en fonction de leur position relative par rapport à la Terre, les marées vont alors changer d’intensité :</p>

      
      <p class="article">
        <ul>
        <li>Lorsque la Lune, la Terre, et le Soleil sont alignés, l’attraction exercée par la Lune et le Soleil se conjuguent, et les masses d’eau des mers et océans subissent une attraction additionnée de ces astres, les marées sont donc <b>plus fortes</b>. On parle alors de <b>marée de vive-eau</b>.</li>
        <li>Lorsque la Lune, la Terre, et le Soleil forment un angle droit, les marées sont <b>plus faibles</b> et on parle alors de <b>marées de morte-eau</b>.</li>
        </ul>
      </p>


      <strong>Entre marée haute et marée basse</strong>
      <p class="article">La différence de hauteur entre la marée haute et la marée basse s’appelle « le marnage ». Et ce marnage n’est pas le même partout. Il peut être très faible en Méditerranée avec un marnage de 40 cm environ, ou très fort en Manche, du côté de la Baie du Mont Saint-Michel, avec un marnage de 14 mètres environ. Et lorsque l’on se positionne à un endroit donné sur littoral, ce marnage varie également selon le moment de l’année (et plus précisément, selon le cycle des marées). Le marnage est très utile pour donner une idée de l’importance de la marée pour un lieu donné. Mais il ne suffit pas pour comparer l’importance de deux marées à deux endroits différents.</p>

      <strong>Comment savoir si les marées vont être importantes ou non ?</strong>
      <p class="article">Pour pouvoir comparer la force des marées d’un site à l’autre, le SHOM (Service Hydrographique et d’Océanographie de la Marine) a défini pour la France un <b>coefficient de marée</b>. Il s’agit d’un nombre, compris entre 20 et 120, qui permet de donner une idée sur l’amplitude d’une marée.</p>

      <p class="article">
        <ul>
        <li>20 = marées de morte-eau exceptionnelle</li>
        <li>45 = marée de morte-eau moyenne</li>
        <li>70 = marée moyenne</li>
        <li>95 = marée de vive-eau moyenne</li>
        <li>120 = marée de vive-eau exceptionnelle</li>
        </ul>
      </p>

      <p class="article">Ces coefficients de marées sont disponibles gratuitement sur internet ou à l’office de tourisme concerné.</p>

      <strong>Ne vous laissez pas surprendre par la marée montante</strong>
      <p class="article">Aller sur le littoral n’est pas sans risque, notamment sur le littoral Atlantique et en Manche et Mer du Nord, là où les marées sont bien marquées. Quelques <b>règles de vigilance et de sécurité</b> sont nécessaires à garder en tête lorsque l’on sort visiter la zone soumise au balancement des marées. Le danger peut être par exemple de vous laisser encercler sur un îlot rocheux, lorsque la mer remonte, par faute d’attention. Il peut également être, malgré votre vigilance, de vous faire surprendre par la vitesse de la marée montante selon le site où vous êtes.</p>

      <p class="article">Pour éviter les situations à risque, de manière générale, respectez les consignes suivantes :</p>


      <p class="article">
        <ol>
        <li class='specialPuce'>Renseignez-vous, pour le site que vous allez visiter, sur les heures de marées (à quelle heure la mer redescend ? A quelle heure est-elle au plus bas (c’est ce qu’on appelle l’ « étale de basse mer ») ? Et à quelle heure la mer commence à remonter ?),</li>
        <li class='specialPuce'>Partez montre en main, et mettez une alarme si vous en avez une,</li>
        <li class='specialPuce'>Commencez à prendre le chemin du retour au plus tard lorsque la mer est basse. Ne prenez pas le risque d’attendre que la mer remonte pour commencer votre retour vers la Terre.</li>
        </ol>
      </p>

      <p class="article">Pour en savoir plus :<br/>
        <a href='http://www.shom.fr/les-services-en-ligne/predictions-de-maree/presentation/' alt='Le Service Hydrographique et d’Océanographie de la Marine (SHOM)' title='Le Service Hydrographique et d’Océanographie de la Marine (SHOM)'>Le Service Hydrographique et d’Océanographie de la Marine (SHOM)</a></p>




    </div>
</div>
      
<?php else: ?>


<div class="row-fluid">
  <div class="span12"><h1 class='page-header labeLikeH3'>The tides</h1></div>
</div>

<div class="row-fluid">
    
    <!-- Colone de texte -->
    <div class="span12">
        
      <strong>What is a tide?</strong>
      <p class="article">On some parts of the coastline, it is possible to observe the sea going out and coming back in several hours later, in a ceaseless to-and-fro motion. The sea level can therefore be seen to vary along certain parts of the French coastline, and this cyclical movement of the sea level corresponds to what we call <b>tides</b>. These tides can be seen quite clearly on the Atlantic and Channel and North Sea coasts, but remain very subtle in the Mediterranean.</p>

      <strong>Parts played by the Moon and Sun</strong>
      <p class="article">Tides are explained by the movement of the seas and oceans, which fall under the gravitational pull of the Moon and Sun (that is the force of attraction that the Sun and Moon exercise on the oceans’ water masses). The Sun and the Moon move round the Earth, and the intensity of the tides changes based on their relative position to the Earth: 
        <br/>
        When the Sun, Earth and Moon are aligned, the pull exercised by the Moon and the Sun is added together, and the sea, and ocean water masses are subject to these stars’ additional pull, the tides are <b>strongest</b> as a result. These are called <b>spring</b> tides. 
        <br/>
        When the Moon, Earth, and Sun form a right angle, the tides are weakest and are called neap tides.
      </p>

      <strong>Between high and low tides</strong>
      <p class="article">The difference in height between high and low tide is called <b>“the tidal range”</b>. And this tidal range is not the same everywhere. It can be weaker in the Mediterranean, with a tidal range of around 40 centimeters, or stronger in the Channel, on the Baie du Mont Saint-Michel side, with a tidal range of around 14 meters. And, viewed from a given position on the coastline, the tidal range can also vary according to the time of year (and more precisely according to the tidal cycle). The tidal range is very helpful for giving an idea of the importance of the tide for a given place. However it is not enough when comparing the importance of two tides in two different places.</p>

      <strong>How to know if the tides are important or not?</strong>
      <p class="article">In order to compare the force of the tides on any site, the Service Hydrographique et d’Océanographie de la Marine (SHOM) has defined a <b>tidal coefficient</b> for France. This consists of a number, between 20 and 120, which gives an idea of the size of a tide.</p>

      <p class="article">
        <ul>
        <li>20 = exceptional neap tide</li>
        <li>45 = a medium neap tide</li>
        <li>70 = a medium tide</li>
        <li>95 = a medium spring tide</li>
        <li>120 = an exceptional spring tide</li>
        </ul>
      </p>

      <p class="article">These tidal coefficients are available free on the Internet, or at the local tourism office. </p>

      <strong>Don’t get caught out by the rising tide</strong>
      <p class="article">Going out along the coastline is not risk-free, particularly on the Atlantic and Channel and North Sea coastlines, where the tides are quite pronounced. Some <b>lookout and safety rules</b> need to be kept in mind when visiting an intertidal zone that becomes submerged due to tidal change. There is a danger, for example, if you are not careful, that you could become engulfed on a rocky islet by the rising tide. Also, despite your vigilance, you could be caught out by the speed of the rising tide in the particular site where you are.</p>

      <p class="article">To avoid these risky situations in general, pay attention to the following instructions:</p>


      <p class="article">
        <ol>
        <li class='specialPuce'>Have you checked the times of the tides for the site that you are going to visit (at what time does the tide go out? At what time is it at its lowest (what is called the “slack tide”?) And at what time does it start to come in again?),</li>
        <li class='specialPuce'>Take a watch with you and set an alarm if you have one.</li>
        <li class='specialPuce'>Start back at the latest when the sea is low. Do not take the risk of waiting for the rising tide before starting to return to land.</li>
        </ol>
      </p>

      <p class="article">To learn more, consult:<br/>
        <a href='http://www.shom.fr/les-services-en-ligne/predictions-de-maree/presentation/' alt='Le Service Hydrographique et d’Océanographie de la Marine (SHOM)' title='Le Service Hydrographique et d’Océanographie de la Marine (SHOM)'>The Service Hydrographique et d’Océanographie de la Marine (SHOM)</a></p>




    </div>
</div>
<?php endif; ?>