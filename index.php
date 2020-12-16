<?php
$title = "Accueil";
include_once('asset/header.php') ?>
<main>
    <div class="main">
        <div class="title-main">
            <h1>Les tables de multiplications</h1>
        </div>
        <div class="p-main">
            <div class="presentation">
                <p>Dans ce site vous trouverez un moyen simple et efficace de maitriser les tables de multiplication.</p>
            </div>
            <div class="table-rand-p">
                <p>Voici une table aléatoire</p>
                <div class="table-rand">
                    <?php table(rand(0, 10)) ?>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('asset/footer.php'); ?>