<?php

$id = $_GET['id'];


$sql = "SELECT * FROM post WHERE id=:id";
$sth = $db->prepare($sql);
$sth->execute ([':id'=>$id]);
//waarom doet line 8 het niet???

//comment' => $comment'

?>

<div class="posts">
    <?php while($row = $sth->fetch()) { ?>
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