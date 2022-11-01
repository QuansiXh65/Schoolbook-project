<?php
include "script/connectdb.php";
$id=$_GET['id'];
//$likes=$_GET['likes'];

$sql = 'UPDATE post SET likes = likes + 1 WHERE id=:id';
$sth = $db->prepare($sql);
$sth->execute([':id' => $id]);
?>