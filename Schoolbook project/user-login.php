<?php include "script/connectdb.php";
    include "templates/head.php";

session_start();

if (!empty($_POST['user'])) {
    if ($_POST['user'] == "admin" && $_POST['password'] == "root") {
        $_SESSION['logon'] = true;
        $_SESSION['user'] = "admin";
        $_SESSION['role'] = "admin";
        include "templates/nav-logout.php";

        ?>

        <h2 class="welcome">
            <?php echo "&nbsp Welkom " . $_SESSION['user']; ?>
        </h2>
        <?php
    } else {
        include "templates/nav-login.php";
        echo "Geen geldige gegevens";
    }

    if ($_SESSION['logon'] == true) {
//    str_repeat('&nbsp;', 5);


} else {
        header("location:user-login-form.php");
    }
}





