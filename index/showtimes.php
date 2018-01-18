
<?php
header('Content-Type: application/json');
$arr = array(array('id' => '456','name' => 'Star-Wars'),array('id' => '123','name' => 'Les Minions'));
echo json_encode($arr);
?>
