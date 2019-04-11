<?php
$array = array(
    'my' => array(
        array('id'=> 1,'name' => 'Lol', 'text' => 'Hello1'),
        array('id'=> 2,'name' => 'Lol', 'text' => 'Hello1'),
        array('id'=> 3,'name' => 'Lol', 'text' => 'Hello1'),
        array('id'=> 4,'name' => 'Lol', 'text' => 'Hello3'),
        array('id'=> 5,'name' => 'Lol', 'text' => 'Hello1'),
        array('id'=> 6,'name' => 'Lol', 'text' => 'Hello1'),
        array('id'=> 7,'name' => 'Lol', 'text' => 'Hello1')
    ),
    'notmy' => array(
        array('id'=> 8,'name' => 'Lol', 'text' => 'Hello1'),
        array('id'=> 9,'name' => 'Lol', 'text' => 'Hello1'),
        array('id'=> 10,'name' => 'Lol', 'text' => 'Hello1'),
        array('id'=> 11,'name' => 'Lol', 'text' => 'Hello1')
    )
);
echo json_encode($array);
?>