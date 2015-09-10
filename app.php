<?php

// Settings page
$plugin->page(array(
    'title' => 'reCaptcha',
    'parent' => 'options-general',
    'request.get' => 'MainController@getSettings',
    'request.post' => 'MainController@saveSettings'
));

//Hook into WordPress login form
$plugin->action('login_form', 'MainController@LoginForm', 10, 1);

//Inject scripts to the WordPress login page
$plugin->action('login_enqueue_scripts', 'MainController@hookLoginScript');

// Validate captcha on authentication
$plugin->action('wp_authenticate', 'MainController@validateAuthenticate', 1);
