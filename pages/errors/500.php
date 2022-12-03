<?php
/**
 * pages/errors/500.php
 * 
 * 500 ErrorDocument.
 * Outputs an internal server error.
 */
$title = '500 Internal Server Error';
http_response_code(500);
$content.= '<h1>500 Internal Server Error</h1>';

$errors['includeFileNotFound'] = 'The file to be included does not exist on the server.';
$errors['unknownError'] = 'Unknown error.';

if(!empty($error) AND array_key_exists($error, $errors)) {
  if(!empty($errors[$error])) {
    $errorMessage = $errors[$error];
  } else {
    $errorMessage = $errors['unknownError'];
  }
} else {
  $errorMessage = $errors['unknownError'];
}
$content.= '<p>'.$errorMessage.'</p>';
?>
