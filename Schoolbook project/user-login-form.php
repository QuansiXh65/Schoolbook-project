<?php include "templates/head.php";

session_start();?>

    <br><br><h2 class="container">Log alstublieft eerst in</h2><br>
<form action="user-login.php" method="post"  class="container">
    <label for="user">Gebruikersnaam:</label>
        <input type="text" name="user" class="input"><br>

    <label for="password">Wachtwoord:</label>
        <input type="password" name="password" class="input"><br><br>

        <input type="submit" name="login" class="send"><br>
</form>

<?php include "templates/footer.php";?>