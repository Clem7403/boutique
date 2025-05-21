<?php

$products = [
    "dés_métal" => [
        "name" => "Dés_métal",
        "price" => "24.90",
        "weigth" => "250",
        "discount" => "10",
        "picture_url" => "https://toutpourlejeu.com/28635-large_default/5-des-en-metal-style-steampunk-16-mm.jpg",
    ],
    "Warhammer_Le_Jeu_De_Rôle" => [
        "name" => "Warhammer_Le_Jeu_De_Rôle",
        "price" => "50",
        "weigth" => "850",
        "discount" => "0",
        "picture_url" => "https://m.media-amazon.com/images/I/513TrNt8L1L._AC_UF1000,1000_QL80_.jpg",
    ],
    "parchemins" => [
        "name" => "parchemins",
        "price" => "8",
        "weigth" => "80",
        "discount" => "0",
        "picture_url" => "https://i.etsystatic.com/24978902/r/il/275794/5780343308/il_570xN.5780343308_n2q6.jpg",
    ],
    "pièces_d_or_factices" => [
       "name" => "pièces_d_or_factices",
        "price" => "10",
        "weigth" => "300",
        "discount" => "5",
        "picture_url" => "https://img.ltwebstatic.com/images3_spmp/2025/02/23/04/17402743583e177b55f4b983352fea69e502802bfa_thumbnail_405x.jpg",
    ]
];

?>

<?php include 'header.php'; ?>

<main>
    <h2>Nos produits phares</h2>
    <p>Vous trouverez tous les produits les plus vendus.</p>

    <h2>boucle for each</h2>
<?php foreach($products as $product) : ?>
    <div class="card">
        <div>
            <h3><?= $product["name"]; ?></h3>
        </div>
        <div><img src="<?= $product["picture_url"]; ?>"alt="Image livre de base Warhammer"> </div>
        <div><?= $product["price"]; ?> €</div>
    </div>

<?php endforeach; ?>

</main>

<?php include 'footer.php'; ?>