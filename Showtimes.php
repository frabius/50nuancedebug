<?php
header('Content-Type: application/json');
//$showtimes = array('1' => 'Star Wars', '2' => 'Le seigneur des anus');
$showtimes = array("Id" => array(1,2,3));
echo (json_encode($showtimes));
?>
