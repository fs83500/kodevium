<?php
/* Page PHP de test */
$titre = "Page PHP de test";
$date = date("d/m/Y");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre; ?></title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <h1><?php echo $titre; ?></h1>
    <p>Nous sommes le : <?php echo $date; ?></p>
    <button>Cliquez-moi</button>
</body>
</html>
