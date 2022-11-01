<?php
include "script/connectdb.php";
include "templates/head.php";
include "templates/nav-logout.php";
//echo "insert comments";
include "comments-list.php";


$comment = $_POST['comment'];

$sql = 'SELECT FROM comments WHERE post_id = :id';
$stmt = $db-> prepare($sql);
$stmt-> execute ([':id'=>$id]);

?>

<!--<form action="#" method="post">-->
<!--    <label>Comments</label>-->
<!--        <textarea rows="4" cols="30">-->
<!--            Schrijf commentaar...-->
<!--        </textarea>-->
<!--         <input type="submit" value="Submit">-->
<!--</form>-->