<?php
/**
 * public/index.php
 * 
 * lightweight-PHP-Boilerplate
 * 
 * A lightweight PHP boilerplate and customizable code-foundation for building secure and dynamic websites with ease.
 * 
 * @author    RundesBalli <GitHub@RundesBalli.com>
 * @copyright 2022 RundesBalli
 * @version   2.0
 * @see       https://github.com/RundesBalli/lightweight-PHP-Boilerplate
 */

/**
 * Initialize the output, the default title and the queryCount
 */
$content = '';
$title = '';

/**
 * Including the configuration and function loader, the page generation elements, the router and the output generation.
 */
require_once(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'loader.php');

/**
 * Output the generated and tidied output.
 */
echo $output;
?>
