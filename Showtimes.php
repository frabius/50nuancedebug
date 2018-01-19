<?php
header('Content-Type: application/json');
$showtimes = array('1' => 'Star Wars', '2' => 'Le seigneur des anus');
echo (json_encode($showtimes));
?>
