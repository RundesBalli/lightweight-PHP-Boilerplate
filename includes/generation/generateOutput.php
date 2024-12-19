<?php
/**
 * includes/generation/generateOutput.php
 * 
 * Generates the output with previous generated contents.
 */
$output = preg_replace(
  [
    '/{TITLE}/im',
    '/{NAV}/im',
    '/{CONTENT}/im',
    '/{FOOTER}/im',
  ],
  [
    (!empty($title) ? $title.' - ' : NULL),
    $nav,
    $content,
    $footer
  ],
  $template
);
?>
