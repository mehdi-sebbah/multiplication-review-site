<?php
$title = "test(2)";
 include_once('asset/header.php'); 

?>

<main>
    <div class="form_test2">
        <form action="test2.php" method="post">
            <div class="title_test2">Choisissez une table</div>
            <select name="test2" size="1">
                <?php choix_select() ?>
            </select>
            <input type="submit" value="Valider la table">
        </form>

        <?php
        if (isset($_POST['test2']) || isset($_POST['reponse'])) {

            $exo = rand(0, 10);
            $valeur = $_POST['test2'];
            $_SESSION['test2'] = $exo * $valeur;

            echo "<form action='reponse_test_2.php' method='post'>
                    <div class='result_test2'>
                        <label for='reponse'>" . $valeur . "x" . $exo . "= </label>
                        <input type='number' name='reponse'>
                    </div>
                    <input type='submit' value= Correction>
                </form>";
        }
        ?>
    </div>
    <?php include_once('asset/footer.php') ?>