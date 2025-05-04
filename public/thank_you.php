<?php require_once("../resources/config.php"); ?>
<?php require_once("cart.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>


<?php

if (isset($_GET['tx'])) {
    $amount = $_GET['amt'];
    $currency = $_GET['cc'];
    $status = $_GET['st'];
    $transaction = $_GET['tx'];

    //$query = query("INSERT INTO transactions (order_amount, order_currency, order_status, transaction_id) VALUES ('{$amount}', '{$currency}', '{$status}', '{$transaction}')");
    //confirm($query);
    session_destroy();

} else {
    redirect("index.php");
}

?>

<!-- Page Content -->
<div class="container">

    <h1 class="text-center">Thank You</h1>
    <p class="text-center">Your order has been received and is being processed.</p>

</div><!--Main Content-->

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>