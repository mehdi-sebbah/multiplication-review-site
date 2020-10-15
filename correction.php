<?php include_once('asset/header.php'); ?>

<main>
    <?php
    echo "<div class='div_reponse'>";
    for ($i = 0; $i < 5; $i++) {

        $firstElement = $_SESSION["result$i"][0];
        $secondElement = $_SESSION["result$i"][1];
        $result = $_SESSION["result$i"][2];
        $result_user = (int)$_POST["rand_multiple"][$i];

        if ($result_user == $result) {
            echo "<div class='div_right'>$firstElement x $secondElement = $result_user</div>";
        } else {
            echo "<div class='div_false'>$firstElement x $secondElement = $result_user</div>";
        }
    }
    ?>
    <form action="test.php" method="post">
        <button type='submit'>Refaire le test</button></div>
    </form>

<?php include_once('asset/footer.php');?>