<?php 
$title = "réponse test(2)";
include_once('asset/header.php'); ?>

<main class="main_test2">
        <?php
        $result = $_SESSION['test2'];

        if (!empty($_POST['reponse']) && $_POST['reponse'] == $result) {
                echo "<div class='bonne_reponse'>Bonne réponse</div>";
                echo '<img src="asset/img/checked2.png" height="200px" alt="checked">';
        } elseif (!empty($_POST['reponse']) && $_POST['reponse'] !== $result) {
                echo "<div class='mauvaise_reponse'>mauvaise réponse</div>";
                echo '<img src="asset/img/croix2.png" height="200px" alt="croix">';
        }else{
                echo "<div class='mauvaise_reponse'>Aucune valeur n'a était rentrée</div>";
        } ?>

        <form action="test2.php" method="post">
                <button type="submit">Réessayer</button>
        </form>

        <?php include_once('asset/footer.php'); ?>