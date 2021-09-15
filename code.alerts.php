<?php


if (isset($_SESSION["alerts"])) {

    $message = $_SESSION["alerts"];

?>

    <div class="alert alert-success">
        <strong>Alert!</strong> <?php echo $message; ?>
    </div>

<?php

    unset($_SESSION["alerts"]);
}


?>