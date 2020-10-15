<?php 
$title = "test(1)";
include_once('asset/header.php'); 
?>

<main>
    <form action="correction.php" method="post">
        <div class="div_test">
            <?php
            for ($i = 0; $i < 5; $i++) {
                $_SESSION["result$i"] = table_rand();
            }
            ?>
            <input type="submit" value="Vérifier votre score">
        </div>
    </form>

    <?php include_once('asset/footer.php'); ?>