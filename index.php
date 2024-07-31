<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objets Magiques DnD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        h1, h3 {
            color: #8B0000; /* Rouge foncé */
        }
        h1 {
            border-bottom: 2px solid #8B0000; /* Rouge foncé */
            padding-bottom: 10px;
        }
        h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .section {
            margin-bottom: 30px;
        }
        .item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        hr {
            border: none;
            height: 1px;
            background-color: #ddd;
            margin: 20px 0;
        }
    </style>
</head>
<body>

<?php 
include "random.php"; 
?>

<div class="section">
    <h1>Armes Magiques:</h1> 
    <h3><span>Dégâts, Bonus aux Dégâts, Nom, Effet</span></h3>
    <hr>
    <?php
    for ($i = 1; $i <= 4; $i++) {
        echo '<div class="item">' . unearmet() . '</div>';
    }
    ?>
</div>

<div class="section">
    <h1>Armures Magiques:</h1>
    <h3><span>CA, Bonus Potentiel, Nom, Effet</span></h3> 
    <hr>
    <?php
    for ($i = 1; $i <= 3; $i++) {
        echo '<div class="item">' . unearmure() . '</div>';
    }
    ?>
</div>

<div class="section">
    <h1>Objets Magiques:</h1>
    <h3><span>Nom, Effet</span></h3>
    <hr>
    <?php
    for ($i = 1; $i <= 3; $i++) {
        echo '<div class="item">' . unobjet() . '</div>';
    }
    ?>
</div>

</body>
</html>
