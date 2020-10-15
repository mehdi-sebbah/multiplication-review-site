<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title><?php if(isset($title)){
            echo $title;
        }else{
            echo "Les math pour les nuls";
        }?>
    </title>
</head>
<body>
    <header>
        <nav class="nav_bar">
            <ul class="list_nav">
                <a href="index.php"><li>Accueil</li></a>
                <a href="revision.php"><li>Réviser une table</li></a>
                <a href="revisions.php"><li>Réviser plusieurs tables</li></a>
                <a href="test.php"><li>Test (1)</li></a>
                <a href="test2.php"><li>Test (2)</li></a>
            </ul>
        </nav>
    </header>
    
    <?php include_once("asset/function.php");?>