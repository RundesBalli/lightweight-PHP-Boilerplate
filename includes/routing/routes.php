<?php
/**
 * includes/routing/routes.php
 * 
 * Routes
 * 
 * @var array
 */
$routes = [
  /**
   * Pages
   */
  'start' => 'start.php',

  /**
   * Error pages
   */
  '404' => 'errors'.DIRECTORY_SEPARATOR.'404.php',
  '403' => 'errors'.DIRECTORY_SEPARATOR.'403.php'
];
?>
