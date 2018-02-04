<?php

/*
This file contains all the 
routes to their respective pages.

*/

$defaultRoute = 'app/controllers';

$router->get('', $defaultRoute.'/index.php');
$router->get('about', $defaultRoute.'/about.php');
$router->get('contact', $defaultRoute.'/contact.php');
$router->post('names', $defaultRoute. '/add-name.php');
