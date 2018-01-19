<?php
header('Content-Type: application/json');
$showtimes = [['id' => 1, 'name' = > 'Star Wars']];
echo (json_encode($showtimes));
?>
// [ [ 'id' => 1, 'name' => 'String' ] ]
// json_encode($monTab)

/*
[
 {
   id: 1,
   name: 'String'
 }
]
*/
