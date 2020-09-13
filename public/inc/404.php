<?php
/**
 * 404.php
 * 
 * HTTP404 ErrorDocument.
 * Returns the error message and the requested path.
 */
$title = "404";
http_response_code(404);
$content.= "<h3>404 - Not Found</h3>".PHP_EOL;
$content.= "<p>The requested resource <i>".htmlentities($_SERVER['REQUEST_URI'], ENT_QUOTES)."</i> doesn't exist.</div>".PHP_EOL;
?>
