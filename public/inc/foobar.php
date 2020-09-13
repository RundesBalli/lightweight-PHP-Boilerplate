<?php
/**
 * foobar.php
 * 
 * A second page to illustrate the navigation.
 */

$title = "Foo bar page";

$ogMeta = array(
  'title'            => 'Your site name here | Foobar page',
  'type'             => 'article',
  'url'              => 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
  'description'      => 'A second page to illustrate the navigation.',
  'locale'           => 'en_US',
  'site_name'        => 'Your site name here'
);

$content.= "<p>This is the Foobar page.</p>".PHP_EOL;
$content.= "<p>It has it's own og-headers.</p>".PHP_EOL;
?>
