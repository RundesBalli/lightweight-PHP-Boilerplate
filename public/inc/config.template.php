<?php
/**
 * config.php
 * 
 * Configuration file
 */

/**
 * Initialization of the open-graph meta-headers
 * @see https://ogp.me/
 */
$ogMeta = array(
  'title'            => 'Your site name here',
  'type'             => 'article',
  'url'              => 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
  'image'            => 'https://'.$_SERVER['HTTP_HOST'].'/src/og_favicon.png',
  'image:secure_url' => 'https://'.$_SERVER['HTTP_HOST'].'/src/og_favicon.png',
  'image:width'      => '300',
  'image:height'     => '300',
  'image:alt'        => 'Your site name here',
  'description'      => 'Description of your website',
  'locale'           => 'en_US', // e.g. de_DE or en_US
  'site_name'        => 'Your site name here'
);

/**
 * Timezone
 * @see https://www.php.net/date_default_timezone_set
 * @see https://www.php.net/manual/en/timezones.php
 */
date_default_timezone_set("Europe/Berlin");

?>
