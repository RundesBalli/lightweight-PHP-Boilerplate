<?php
/**
 * pages/errors/403.php
 * 
 * 403 ErrorDocument.
 * Returns the error message, as well as the requested path.
 */
$title = '403 Forbidden';
http_response_code(403);
$content.= '<h1>403 Forbidden</h1>';
$content.= '<p>'.sprintf('You do not have permission to access the resource <code>%s</code> you have requested.', htmlentities($_SERVER['REQUEST_URI'], ENT_QUOTES)).'</p>';
?>
