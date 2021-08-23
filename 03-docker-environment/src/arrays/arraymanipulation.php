<?php 
    $web_development = array(
        'frontend' => array(),
        'backend' => array()
    );
    $web_development['frontend'][] = 'xhtml';
    $web_development['backend'][] = 'Ruby on Rails';
    $web_development['frontend'][] = 'CSS';
    $web_development['frontend'][] = 'flash';
    $web_development['frontend'][] = 'javascript';
    $web_development['frontend'][0] = 'html';
    unset($web_development['frontend'][2]);


    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
?>