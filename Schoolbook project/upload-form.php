<?php
include "templates/head.php";
include "templates/nav-logout.php";

$auteur = "";
if (!empty($post)){
$auteur = $post["auteur"];

} $titel = "";
if (!empty($post)){
$titel = $post["titel"];

} $bericht = "";
if (!empty($post)){
$bericht = $post["bericht"];

} $afbeelding = "";
if (!empty($post)){
$afbeelding = $post['afbeelding'];
}

?>

<h2 class="h2p">Upload</h2><br><br>

<div class="upld-frm">
    Maak een nieuwe post aan:
    <form action="upload.php" method="post"enctype="multipart/form-data">
        <label for="titel" >Auteur</label>
            <input type="text" name="auteur" class=".form-control-plaintext"value="<?php echo $auteur ;?>"> <br>
        <label for="titel" >Titel:</label>
            <input type="text" name="titel" class=".form-control-plaintext" value="<?php echo $titel;?>"> <br>
        <label for="bericht">Bericht:</label>
            <input type="text" name="bericht" class=".form-control-plaintext" value="<?php echo $bericht;?>"> <br>
        <label for="afbeelding">Selecteer een afbeelding:</label>
            <input type="file" name="file" id="fileupload"><br><br>
            <input type="submit" value="Upload Image" name="submit" class="bttns"><br>
    </form>
</div>
