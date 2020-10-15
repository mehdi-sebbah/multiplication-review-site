<?php 
$title = "révision";
include_once('asset/header.php');

?>

<main>
    <form action="revision.php" method="get">

        <div class="div-revision">
            <label for="multiple">Quel table voulez-vous réviser ?</label>
            <div class="select-revision">
                <select class="form-control" name="multiple">
                    <?= choix_select() ?>
                </select>
            </div>
            <input type="submit" value="Validez" id="submit-revision">

            <?php if (isset($_GET["multiple"])) {
                echo "<div class='div_result_revision'>";
                echo table((int)$_GET["multiple"]);
                echo "</div>";
            }
            ?>
        </div>
    </form>

    <?php include_once('asset/footer.php'); ?>