<?php
include "templates/head.php";
include "templates/nav-logout.php";

ob_start();
include('user-login.php');
ob_end_clean();
?>

<h2 class="welcome"><?php echo "&nbsp Welkom!  ";?></h2><br>
<!--. $_SESSION['user']-->
<?php include "post-list.php" ?>

