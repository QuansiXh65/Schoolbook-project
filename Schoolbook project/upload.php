<?php
include "script/connectdb.php";
include "templates/head.php";
include "templates/nav-logout.php";

if (isset($_FILES['file'])) {
    $name_file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $local_image = "uploaded/";
    $upload = move_uploaded_file($tmp_name, $local_image . $name_file);

    if ($upload) {
        ?>
    <div class="posts">
        <?php
        echo 'Upload succesfully' . $name_file;?>
        <button onclick="history.go(-2)">Back</button>
    </div>
<?php
    } else {
        echo 'Error, could not upload this book' . $name_file;
    }
}

$post = "";

$auteur = $_POST['auteur'];
$titel = $_POST['titel'];
$bericht = $_POST['bericht'];



$sql = 'INSERT INTO post (auteur, titel, bericht, afbeelding) VALUES (:auteur, :titel, :bericht, :afbeelding)';
$stmt = $db->prepare($sql);
$stmt->execute(['auteur' => $auteur, 'titel' => $titel, 'bericht' => $bericht, 'afbeelding' => $name_file]); ?>


