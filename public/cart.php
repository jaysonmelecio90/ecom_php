<?php require_once("../resources/config.php"); ?>

<?php

if (isset($_GET['add'])) {

    $_SESSION['product_' . $_GET['add']] += 1;
    redirect("index.php");
}

//else if (isset($_GET['remove']))
//    $_SESSION['product_' . $_GET['remove']] -= 1;
//else if (isset($_GET['delete']))
//unset($_SESSION['product_' . $_GET['delete']]);

?>