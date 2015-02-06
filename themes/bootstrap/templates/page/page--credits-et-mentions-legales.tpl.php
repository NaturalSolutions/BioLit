<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <?php if (!empty($logo)): ?>
        <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <h1 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
        </h1>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="nav-collapse collapse">
          <nav role="navigation">
           <?php if (!empty($primary_nav)): ?>
               <?php print "<div id='theNav'>".render($primary_nav)."</div>"; ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
              <?php print render($secondary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <?php render($page['content']['metatags']); ?>
</header>


<?php global $language; ?>

<?php if($language->language == 'fr'): ?>

<div class="main-container container creditContainer">

      <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row-fluid">
 
    <section class="<?php print _bootstrap_content_span($columns); ?>" id='creditSection'>  
      <h1 class="page-header labeLikeH3"><?php print 'Crédits & Mentions légales'; ?></h1>  
      
      <div class="row-fluid">
        <div class="span12">
          

          <strong>OBJET DU SITE INTERNET</strong>
          <p class='article'>Vous êtes actuellement connecté au site <a href='http://www.biolit.fr/' target="_blank" title='BioLit.fr' alt='BioLit.fr'>BioLit.fr</a> édité par Planète Mer. Planète Mer est une association loi de 1901. Elle oeuvre pour la protection de la vie marine et des activités humaines qui en dépendent.</p>
        
          <strong>INFORMATIONS LÉGALES</strong>
          
          <p><b>Contact</b><br/>
          Planète Mer - 14 Avenue de Messine - 75008 Paris</p>
          
          <p><b>Représentant légal</b><br/>
          Mathieu MAUVERNAY, Président de l’association Planète Mer</p>
          
          <p><b>Conception</b><br/>
          <a href="http://www.natural-solutions.eu/" target="_blank" title='Natural Solutions' alt='Natural Solutions'>Natural Solutions</a> & <a href="http://www.planetemer.org/" target="_blank" title='Planète Mer' alt='Planète Mer'>Planète Mer</a></p>
          
          <p><b>Développement et graphisme</b><br/>
          <a href="http://www.natural-solutions.eu/" target="_blank" title='Natural Solutions' alt='Natural Solutions'>Natural Solutions</a> & <a href='http://www.flavieferrari.com/' target="_blank" title='Flavie Ferrari' alt='Flavie Ferrari'>Flavie Ferrari</a></p>
          
          <p><b>Hébergement</b><br/>
          <a href="http://www.ovh.com/fr/index.xml" target="_blank" title='OVH' alt='OVH'>OVH</a></p>

          <p><b>Directeur de la publication</b><br/>
          Laurent DEBAS, Directeur général de Planète Mer</p>

          <p><b>Contenu éditorial</b><br/>
          <a href="http://www.planetemer.org/" target="_blank" title='Planète Mer' alt='Planète Mer'>Planète Mer</a></p>

          <p><b>Propriété intellectuelle</b><br/>
          La présentation et chacun des éléments, y compris les marques, logos et noms de domaine apparaissant sur le site <a href='http://www.biolit.fr/' title='BioLit.fr' alt='BioLit.fr'>BioLit.fr</a> sont protégés par les lois en vigueur sur la propriété intellectuelle, et appartiennent à Planète Mer ou font l'objet d'une autorisation d'utilisation. 
          <br/>
          <br/>
          Aucun élément composant le site <a href='http://www.biolit.fr/' target="_blank" title='BioLit.fr' alt='BioLit.fr'>BioLit.fr</a> ne peut être copié, reproduit modifié, réédité, dénaturé ou distribué de quelques manière que ce soit sous quelque support que ce soit même de façon partielle ou intégrale, sans l'autorisation préalable du réalisateur à l'exception d'une stricte utilisation pour les besoins de la presse et sous réserve du respect des droits de propriété intellectuelle et de tout autre droit de propriété dont il est fait mention.
          <br/>
          <br/>
          Toute représentation totale ou partielle du site, par quelque procédé que ce soit sans l'autorisation de Planète Mer est interdite et constituerait une contrefaçon sanctionnée par les articles L335-2 et suivants du code de la propriété intellectuelle. Planète Mer se réserve le droit de poursuivre tout acte de contrefaçon de ses droits de propriété intellectuelle.
          </p>

          <p><b>Informations et confidentialité</b><br/>
          En conformité avec la loi du 6 janvier 1978 relative à l'informatique, aux fichiers, aux libertés, le traitement automatisé des données nominatives réalisé à partir du site internet <a href='http://www.biolit.fr/' title='BioLit.fr' alt='BioLit.fr'>BioLit.fr</a> a fait l'objet d'une déclaration auprès de la Commission Nationale de l'Informatique et des Libertés dont la référence est 1538052 v 0.
          <br/>          
          <br/>          
          Les informations stockées dans notre base de données sont destinées à un usage strictement interne à Planète Mer. Conformément à l'article 34 de la loi "Informatique et Libertés", vous disposez d'un droit d'accès, de modification, de rectification et de suppression des données vous concernant.
          <br/>
          <br/>
          Pour l'exercer, adressez vous à :       
          </p>

          <p class="article">Planète Mer - 14 Avenue de Messine 75008 – Paris</p>
          <p class="article">Email : contact@planetemer.org</p>

          <p><b>Contenu du site</b><br/>
          Planète Mer se réserve le droit de modifier, à tout moment et sans préavis, le contenu de ce site. En outre, Planète Mer décline toute responsabilité en cas de retard, d'erreur ou d'omission quant au contenu des présentes pages de même qu'en cas d'interruption ou de non-disponibilité du service.
          </p>

          <p><b>Liens Hypertextes</b><br/>
          La création de liens hypertextes vers le site de Planète Mer, ou les sites lui appartenant, ainsi que les liens hypertextes établis en direction d'autres sites à partir du site de Planète Mer, ou des sites lui appartenant, n’engagent pas la responsabilité de Planète Mer.
          </p>
          
          <strong>Auteurs photographiques et illustrations</strong>
          <p>Nous tenons à remercier chaleureusement tous ceux qui ont contribué à illustrer ce site et les supports qui y sont intégrés.</p>
          <p>Denis ADER, Frédéric ANDRE, Frédéric ANDRIEU, Pascal AMBLARD, Olivier ARGAGNON, Jean-Claude ARNOUX, Frédéric BASSEMAYOUSSE, Wilfried BAY-NOUAILHAT , Cyrille BOLLARD, David BORG, Daniel BURON, Hélène CASTILLO, Valérie CARO-THIEFFRY, Gilles CAVIGNEAUX, Laurent CHARLES, George CHEMILEVSKI, Roger CRUON, Christophe DEHONDT, Daan DELBARE, Thibault DELSAHUT, Eric DESLANDES, Thomas DESVIGNES, Katia DIADEMA, A. DRUPAT-BRUSSAUT, David FENWICK, Yann FONTANA, Florence GULLY, Hans HILLEWAERT, Dominique HORST, Bernadette HUYNH TAN, Stéphane JAMME, Sonia KAUPE, Keisotyo, Véronique LAMARE, Hervé LIMOUSIN, Sylvain LE BRIS, J. LECOMTE, Philippe LE GRANCHE, Stéphane LE GRANCHE, Vincent MARAN, Henri MICHAUD, Yves MORVANT, Yves MULLER, Virgile NOBLE, Pierre NOEL, Bernard PICTON, Benjamin REVIRIEGO, Jean-Paul ROGER, Sandrine RUITTON, Sébastien SANT, Véronique et François SARANO, Christian SCOUPPE, Alain-Pierre SITTLER, Valérie STIGER POUVREAU, Subaqua (ffessm.fr), Riquier THEVENH, Murielle TOURENNE, Daniel VAULOT, Philippe VERNE, Claude WACQUANT, Adrien WECQUEL, Frédéric ZIEMSKI.</p>        
          <p>Dessin D.L. SMITH –Dessin extrait de Tregouboff, Dessin Miers (mr.refer.org/numweb), Krabben van Nederland, Dessin extrait de la Flore de Coste)</p>
          
        </div>
      </div>
    
    </section>

  </div>
</div>

<?php else: ?>

<div class="main-container container creditContainer">
  
    <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row-fluid">
 
    <section class="<?php print _bootstrap_content_span($columns); ?>" id='creditSection'>  
      <h1 class="page-header labeLikeH3"><?php print 'Credits & Legal notices'; ?></h1>  
      
      <div class="row-fluid">
        <div class="span12">
          

          <strong>INTERNET SITE AIM</strong>
          <p class='article'>You are currently connected to the <a href='http://www.biolit.fr/' target="_blank" title='BioLit.fr' alt='BioLit.fr'>BioLit.fr</a> site, published by Planète Mer. Planète Mer is a nonprofit association under the French law of July 1, 1901. It acts to protect marine life and the human activities that depend on it. </p>
                  
          <strong>LEGAL INFORMATION</strong>
          
          <p><b>Contact</b><br/>
          Planète Mer - 14 Avenue de Messine - 75008 Paris</p>
          
          <p><b>Représentant légal</b><br/>
          Mathieu MAUVERNAY, Président of the Planète Mer association</p>
          
          <p><b>Concept</b><br/>
          <a href="http://www.natural-solutions.eu/" target="_blank" title='Natural Solutions' alt='Natural Solutions'>Natural Solutions</a> & <a href="http://www.planetemer.org/" target="_blank" title='Planète Mer' alt='Planète Mer'>Planète Mer</a></p>
          
          <p><b>Development and graphics</b><br/>
          <a href="http://www.natural-solutions.eu/" target="_blank" title='Natural Solutions' alt='Natural Solutions'>Natural Solutions</a> & <a href='http://www.flavieferrari.com/' target="_blank" title='Flavie Ferrari' alt='Flavie Ferrari'>Flavie Ferrari</a></p>
          
          <p><b>Website hosting</b><br/>
          <a href="http://www.ovh.com/fr/index.xml" target="_blank" title='OVH' alt='OVH'>OVH</a></p>

          <p><b>Director of publication</b><br/>
          Laurent DEBAS, General Director of Planète Mer</p>

          <p><b>Editorial content</b><br/>
          <a href="http://www.planetemer.org/" target="_blank" title='Planète Mer' alt='Planète Mer'>Planète Mer</a></p>

          <p><b>Intellectual property</b><br/>
          The whole presentation and each of the elements, including brands, logos and domain names that appear on the <a href='http://www.biolit.fr/' target="_blank" title='BioLit.fr' alt='BioLit.fr'>BioLit.fr</a> site are protected by intellectual property laws currently in force, and either belong to Planète Mer or may not be used without permission.
          <br/>
          <br/>
          No element of the <a href='http://www.biolit.fr/' target="_blank" title='BioLit.fr' alt='BioLit.fr'>BioLit.fr</a> site may be copied, reproduced, modified, republished, altered, or distributed in any way in any medium whatsoever, whether partially or wholly, without prior authorization from the director, with the strict exception of use for press purposes, subject to compliance with intellectual property rights and all other rights mentioned.
          <br/>
          <br/>
          Any total or partial representation of the site, by any process whatsoever, without the authorization of Planète Mer is prohibited and will constitute an infringement punishable by articles L335-2, following the French Intellectual Property Code. Planète Mer reserves the right to pursue any infringement of its intellectual property rights.
          </p>

          <p><b>Data protection</b><br/>
          In accordance with the law of January 6, 1978 governing data processing, files, rights, the automatized treatment of personal data undertaken by the <a href='http://www.biolit.fr/' target="_blank" title='BioLit.fr' alt='BioLit.fr'>BioLit.fr</a> internet site, was the object of a declaration to the Commission Nationale de l'Informatique et des Libertés, reference:1538052 v 0. 
          <br/>          
          <br/>          
          The data stored in our database are strictly for Planète Mer’s internal use. In accordance with article 34 of the "Informatique et Libertés" law you have a right to access, modify, rectify, and delete any of your personal data. 
          <br/>
          <br/>
          To exercise this right, contact:
          </p>

          <p class="article">Planète Mer - 14 Avenue de Messine 75008 – Paris</p>
          <p class="article">Email : contact@planetemer.org</p>

          <p><b>Site content</b><br/>
          Planète Mer reserves the right to modify the content of this site, at any time, and without prior warning. Furthermore, Planète Mer shall not be liable for any delays, errors or omissions in the content of these pages or for any interruption or non-availability of service.
          </p>

          <p><b>Hyperlinks</b><br/>
          Planète Mer shall not be held liable for the creation of any hyperlinks to the Planète Mer site or any other sites belonging to Planète Mer, nor for hyperlinks from the Planète Mer site or sites belonging to Planète Mer, to external sites.
          </p>
          
          <strong>Author credits for photographs and illustrations</strong>
          <p>We should like to extend our warmest thanks to all those who contributed to illustrating this site and to its media contents. </p>
          <p>Denis ADER, Frédéric ANDRE, Frédéric ANDRIEU, Pascal AMBLARD, Olivier ARGAGNON, Jean-Claude ARNOUX, Frédéric BASSEMAYOUSSE, Wilfried BAY-NOUAILHAT , Cyrille BOLLARD, David BORG, Daniel BURON, Hélène CASTILLO, Valérie CARO-THIEFFRY, Gilles CAVIGNEAUX, Laurent CHARLES, George CHEMILEVSKI, Roger CRUON, Christophe DEHONDT, Daan DELBARE, Thibault DELSAHUT, Eric DESLANDES, Thomas DESVIGNES, Katia DIADEMA, A. DRUPAT-BRUSSAUT, David FENWICK, Yann FONTANA, Florence GULLY, Hans HILLEWAERT, Dominique HORST, Bernadette HUYNH TAN, Stéphane JAMME, Sonia KAUPE, Keisotyo, Véronique LAMARE, Hervé LIMOUSIN, Sylvain LE BRIS, J. LECOMTE, Philippe LE GRANCHE, Stéphane LE GRANCHE, Vincent MARAN, Henri MICHAUD, Yves MORVANT, Yves MULLER, Virgile NOBLE, Pierre NOEL, Bernard PICTON, Benjamin REVIRIEGO, Jean-Paul ROGER, Sandrine RUITTON, Sébastien SANT, Véronique et François SARANO, Christian SCOUPPE, Alain-Pierre SITTLER, Valérie STIGER POUVREAU, Subaqua (ffessm.fr), Riquier THEVENH, Murielle TOURENNE, Daniel VAULOT, Philippe VERNE, Claude WACQUANT, Adrien WECQUEL, Frédéric ZIEMSKI.</p>        
          <p>Drawing D.L. SMITH – Drawing taken from Tregouboff, Dessin Miers (mr.refer.org/numweb), Krabben van Nederland, Drawing taken from la Flore de Coste)</p>
          
        </div>
      </div>
    
    </section>

  </div>
</div>

<?php endif; ?>

<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
