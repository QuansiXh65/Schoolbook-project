<?php

include "script/connectdb.php";
include "templates/head.php";

?>

<script>
    function likePost(postId){

        console.log(postId);

        fetch('like.php?id=' + postId, {
            method: 'GET',
        }).then((response) => response.text())
          .then((text) => {
              //console.log(text);
        });

        /*
        $.get('like.php',

            {id: postId}).then(

            function() {
                var likeStr = document.getElementById("likes"+postId).innerHTML;
                likeInt = parseInt(likeStr);
                likeInt++;
                document.getElementById("likes"+postId).innerHTML = '' + likeInt;
            });
         */
    }

</script>

<h2 class="h2p">Recente posts</h2><br><br>

<?php
$sql = "SELECT * FROM post ORDER BY created_at DESC ";
$sth = $db->prepare($sql);
$sth->execute();
?>

<div class="posts">
<?php
while($row = $sth->fetch()) { ?>

    <div class="box">
            <div><?php echo "Auteur: " . $row["auteur"]; ?></div>
            <div><img src="uploaded/<?php echo $row['afbeelding']; ?>" alt="afbeelding" class="image"></div>
            <div><?php echo "Title: " . $row["titel"]; ?></div>
            <div><?php echo "Caption: " . $row["bericht"]; ?></div>
            <div><?php echo "Likes: " . $row["likes"]; ?></div>
            <div> <button onclick="likePost(<?php echo $row["id"]; ?>)" class="likebtn">LIKE</button></div>
            <div><a href="comments.php?id=<?php echo $row['id']; ?>" class="cmmnt-link">Comments</a></div>
    </div>

<?php } ?>
</div>

<!--
    <table class="box">
        <tr>
            <td class="td"><?php echo "Auteur: " . $row["auteur"]; ?></td><br>
            <td class="td"><img src="uploaded/<?php echo $row['afbeelding']; ?>" alt="afbeelding" class="image"></td><br>
            <td class="td"><?php echo "Title: " . $row["titel"]; ?></td><br>
            <td class="td"><?php echo "Caption: " . $row["bericht"]; ?></td><br>
            <td class="td"><?php echo "Likes: " . $row["likes"]; ?></td><br>
            <td class="td"> <button onclick="likePost(<?php echo $row["id"]; ?>)" class="likebtn">LIKE</button></td><br>
        </tr>
    </table>
-->