<?php
$title = "révisions";
include_once('asset/header.php');
?>

<main>
    <form action="revisions.php" method="post">
        <div class="div-revisions">
            <label for="multiple">Quels tables voulez-vous réviser ?</label>
            <div class="list-number-revisions">
                <?= input_type('checkbox') ?>
            </div>
            <input type="submit" value="Validez">

            <?php if (!empty($_POST)) {
                echo "<div class='div-table-revisions'>";
                foreach ($_POST['multiple'] as $value) {
                    echo "<div class='table-result-revisions'>";
                    table($value);
                    echo "</div>";
                }
            }
            ?>
        </div>
    </form>

    <?php include_once('asset/footer.php'); ?>