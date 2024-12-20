<?php
/**
 * includes/loader.php
 * 
 * Configuration and function loader
 */

/**
 * Basic configuration
 */
require_once(__DIR__.DIRECTORY_SEPARATOR.'config.php');
require_once(__DIR__.DIRECTORY_SEPARATOR.'constants.php');

/**
 * Database connection and functions
 */
// require_once(__DIR__.DIRECTORY_SEPARATOR.'database'.DIRECTORY_SEPARATOR.'sql.php');
// require_once(__DIR__.DIRECTORY_SEPARATOR.'functions'.DIRECTORY_SEPARATOR.'defuse.php');

/**
 * Content generation and router
 */
require_once(__DIR__.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'readTemplate.php');
require_once(__DIR__.DIRECTORY_SEPARATOR.'routing'.DIRECTORY_SEPARATOR.'routes.php');
require_once(__DIR__.DIRECTORY_SEPARATOR.'routing'.DIRECTORY_SEPARATOR.'router.php');
require_once(__DIR__.DIRECTORY_SEPARATOR.'generation'.DIRECTORY_SEPARATOR.'navigation.php');
require_once(__DIR__.DIRECTORY_SEPARATOR.'generation'.DIRECTORY_SEPARATOR.'footer.php');

/**
 * Page generation
 */
require_once(__DIR__.DIRECTORY_SEPARATOR.'generation'.DIRECTORY_SEPARATOR.'generateOutput.php');
require_once(__DIR__.DIRECTORY_SEPARATOR.'generation'.DIRECTORY_SEPARATOR.'tidyOutput.php');
?>
