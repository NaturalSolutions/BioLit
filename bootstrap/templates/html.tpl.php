<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<?php 
// Script pour changer la langue si on est pas dans une page en/fr
 // if (isset ($_SESSION['language'])) {
    // recuperation de l adresse courante
    $myPath = drupal_get_path_alias(current_path());
    global $base_url;
      // test si c est une node
      $isNode = explode('/', $myPath);
      if($isNode[0] == 'node') $isNode = true;
      else $isNode = false; ?> 

      <script>var base_url = "<?php echo $base_url;?>";</script>

     <?php 
     if($language->language === 'en') {
      
        echo '<script>console.log("EN");</script>';
        $_SESSION['language'] = 'en';
        $language->language = 'en';
        ?>
        <script>
        language = 'en';
        </script>
        <?php
        // header('Location: '.$_SERVER['REQUEST_URI']);

      }else{

        echo '<script>console.log("FR");</script>';
        $_SESSION['language'] = 'fr';
        $language->language = 'fr';
        ?><script>language = 'fr';</script><?php
        // header('Location: '.$_SERVER['REQUEST_URI']);
      }

   // }
?>




<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- <link type="text/css" rel="stylesheet" href="sites/all/themes/bootstrap/css/style_biolit.css" media="all" /> -->
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
  
  <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

  <meta property="og:title" content="BioLit | Les observateurs du littoral" />
  <meta property="og:image" content="http://biolit.fr/sites/all/themes/bootstrap/logo.png" /> 
  <meta property="og:description" content="Un programme national de science participative sur la biodiversité littorale" />
  <meta property="og:url" content=<?php echo $actual_link; ?> />

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
