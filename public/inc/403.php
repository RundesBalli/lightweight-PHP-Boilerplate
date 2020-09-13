<?php
/**
 * 403.php
 * 
 * HTTP403 ErrorDocument.
 * Returns the error message and the requested path.
 */
$title = "403";
http_response_code(403);
$content.= "<h3>403 - Forbidden</h3>".PHP_EOL;
$content.= "<p>You don't have the permission to access the requested resource <i>".htmlentities($_SERVER['REQUEST_URI'], ENT_QUOTES)."</i>.</div>".PHP_EOL;
?>
