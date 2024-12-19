<?php
/**
 * includes/database/sql.php
 * 
 * Establishes the database connection and sets up the correct charset.
 */
$dbl = mysqli_connect($mysql['host'], $mysql['user'], $mysql['pass'], $mysql['db']) OR DIE(MYSQLI_ERROR($dbl));
mysqli_set_charset($dbl, $mysql['charset']) OR DIE(MYSQLI_ERROR($dbl));
?>
