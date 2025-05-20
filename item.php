    <?php 
$name = "casque";
$prix = 27.68;
$image = "image/casque.jpg"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de l'article</title>
</head>
<body>
    <div class="item">
        <h1><?php echo $nom; ?></h1>
        <p>Prix : <?php echo number_format($prix, 2, ',', ' '); ?> € </p>
        <img src="<?php echo $image; ?>" alt="Image de l'article">
    </div>
</body>
</html>
