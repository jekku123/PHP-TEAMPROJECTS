<?php include 'includes/header.php'; ?>

<section>
    <?php
    echo '<p>Name: ' . $_POST["name"] . '</p>';
    echo '<p>E-mail: ' . $_POST["email"] . '</p>';
    echo '<p>Message: ' . $_POST["message"] . '</p>';
    ?>
</section>