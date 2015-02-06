  <?php

      /*
      SAVE :

      $elements = drupal_get_form('user_login_block');

  
      do all your rendering stuff here
      drupal_render seems to add html to the elements array
      and instead of printing what is returned from drupal_render
      you can use the added html in ['#children'] elements of the arrays
      to build the form in the order you want.
    
    $rendered = drupal_render($elements);

    // to see what you have to work with
    // print "<pre>ELEMENTS: " . print_r($elements,1) . "</pre>";

    $output  = '<form action="' . $elements['#action'] .
                              '" method="' . $elements['#method'] .
                              '" id="' . $elements['#id'] .
                              '" accept-charset="UTF-8"><div>';
  
    $output .= $elements['name']['#children'];
    $output .= $elements['pass']['#children'];
    $output .= $elements['form_build_id']['#children'];
    $output .= $elements['form_id']['#children'];
    $output .= $elements['actions']['#children'];
    $output .= $elements['links']['#children'];
    $output .= '</div></form>';

    print $output;
    */
    
    global $base_url;

    $output = "<a id='inscription' href='".$base_url."/user/register'>INSCRIPTION</a>";
    $output .= "<div id='connectBlock'><a id='connexion' href='".$base_url."/user'>Déjà membre ?<br/><span>Connexion</span></a></div>";


    print $output;

    ?>