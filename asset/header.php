<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="asset/img/favicon.png" type="image/png">
    <script src="asset/js/function.js" defer></script>
    <script src="asset/js/ajax.js" defer></script>

    <title><?php if(isset($title)){
            echo $title;
        }else{
            echo "Les math pour les nuls";
        }?>
    </title>
</head>
<body>
    <header>
        
        <nav class="nav_bar" id="nav_bar">
            <ul class="list_nav">
                <li><a href="index.php">Accueil</li></a>
                <li><a href="revision.php">Réviser une table</li></a>
                <li><a href="revisions.php">Réviser plusieurs tables</li></a>
                <li><a href="test.php">Multi Quizz</li></a>
                <li><a href="test2.php">Quizz</li></a>
            </ul>
            <div class="div_span_burger" id="burger"><span class="trait" id="span"></span></div>
        </nav>
    </header>
    
    <?php include_once("asset/function.php");?>
