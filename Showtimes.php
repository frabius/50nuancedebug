<?php
header('Content-Type: application/json');
$showtimes = array("Id" => array(1, 2, 3),"name" => array("jhgjhg","hjgkg","chhs"));

    foreach ($showtimes as $key => $value)
    echo (json_encode("Id : $key"));
?>
