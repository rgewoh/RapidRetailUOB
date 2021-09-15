<?php


if (isset($_SESSION["alertsfail"])) {

    $message = $_SESSION["alertsfail"];

?>

    <div class="alert alert-danger">
        <strong>Alert!</strong> <?php echo $message; ?>
    </div>

<?php

    unset($_SESSION["alertsfail"]);
}


?>