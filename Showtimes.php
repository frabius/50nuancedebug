<?php
header('Content-Type: application/json');
$showtimes = [['id' => '1', 'name' => 'Le seigneur des anus']];
echo (json_encode($showtimes));
?>
