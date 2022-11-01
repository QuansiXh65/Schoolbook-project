<?php
include "script/connectdb.php";
include "templates/head.php";
?>

<form action="comments.php" method="post">
    <label>Comments</label>
    <textarea name="comment" rows="4" cols="50">
        </textarea>
    <input type="submit" value="Submit">
</form>

