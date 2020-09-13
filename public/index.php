<?php
/**
 * index.php
 * 
 * lightweight-PHP-Boilerplate
 * 
 * A lightweight PHP boilerplate and customizable code-foundation for building secure and dynamic websites with ease.
 * 
 * @author    RundesBalli <webspam@rundesballi.com>
 * @copyright 2020 RundesBalli
 * @version   1.0
 * @see       https://github.com/RundesBalli/lightweight-PHP-Boilerplate
 */

/**
 * Including the configuration file
 */
require_once(__DIR__.DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."config.php");

/**
 * Initialize the output and the default title.
 * If the title stays empty, only the title in the template file will be shown.
 */
$content = "";
$title = "";

/**
 * Find out which page was requested via the URL.
 */
if(!isset($_GET['p']) OR empty($_GET['p'])) {
  $getp = "start";
} else {
  if(preg_match("/([\d\w-]+)/i", $_GET['p'], $match) === 1) {
    $getp = $match[1];
  } else {
    $getp = "start";
  }
}

/**
 * The pageArray is used to assign the requested page to its corresponding PHP file.
 * 
 * The array-key is the requested URL (0-9a-zA-Z-) and the array-value is the included file from the /inc/ directory.
 */
$pageArray = array(
  'start'      => 'start.php',
  'foobar'     => 'foobar.php',
  '404'        => '404.php',
  '403'        => '403.php'
);

/**
 * Check if the requested page exists.
 * If the page exists in the $pageArray, then it'll be included. If it doesn't exist, an error message appears.
 */
if(isset($pageArray[$getp])) {
  require_once(__DIR__.DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR.$pageArray[$getp]);
} else {
  require_once(__DIR__.DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."404.php");
}

/**
 * Navigation
 * 
 * The $a will highlight the current page with the 'active' CSS class.
 */
$a = " class='active'";
$nav = "<a href='/'".($getp == "start" ? $a : NULL).">Home</a>".PHP_EOL;
$nav.= "<a href='/foobar'".($getp == "foobar" ? $a : NULL).">FooBar</a>".PHP_EOL;

/**
 * Load the template file
 */
$templateFile = __DIR__.DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."template.tpl";
$fp = fopen($templateFile, "r");

/**
 * Iterate the open-graph meta-headers array and insert it into separate meta-tags.
 */
if(!empty($ogMeta)) {
  $ogData = array();
  foreach($ogMeta AS $key => $val) {
    $ogData[] = "<meta property='og:".htmlentities($key, ENT_QUOTES)."' content='".htmlentities($val, ENT_QUOTES)."'/>";
  }
}

/**
 * Replace the placeholders with the corresponding contents.
 */
$output = preg_replace(
  array(
    "/{TITLE}/im",
    "/{NAV}/im",
    "/{CONTENT}/im",
    "/{OGMETA}/im"
  ),
  array(
    ($title == "" ? "" : " - ".$title),
    $nav,
    $content,
    (!empty($ogMeta) ? PHP_EOL.implode(PHP_EOL, $ogData) : NULL)
  ),
  fread($fp, filesize($templateFile))
);
fclose($fp);

/**
 * Tidy up the output and indent the HTML tags correctly.
 * @see https://api.html-tidy.org/tidy/quickref_5.6.0.html
 */
$tidyOptions = array(
  'indent' => TRUE,
  'output-xhtml' => TRUE,
  'wrap' => 200,
  'newline' => 'LF', /* LF = \n */
  'output-encoding' => 'utf8',
  'drop-empty-elements' => FALSE /* e.g. for placeholders */
);

$tidy = tidy_parse_string($output, $tidyOptions, 'UTF8');
tidy_clean_repair($tidy);
echo $tidy;
?>
