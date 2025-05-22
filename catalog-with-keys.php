<?php 

$Dés_métal = [
    "name" => "Dés_métal",
    "price" => "2490",
    "weigth" => "250",
    "discount" => "10",
    "picture_url" => "https://toutpourlejeu.com/28635-large_default/5-des-en-metal-style-steampunk-16-mm.jpg",
];

$Dés_résine = [
    "name" => "Dés_résine",
    "price" => "1500",
    "weigth" => "100",
    "discount" => "10",
    "picture_url" => "https://i.etsystatic.com/43537117/r/il/b86852/5075643762/il_1140xN.5075643762_14uc.jpg",
];

$Warhammer_Le_Jeu_De_Rôle = [
    "name" => "Warhammer_Le_Jeu_De_Rôle",
    "price" => "5000",
    "weigth" => "850",
    "discount" => "0",
    "picture_url" => "https://m.media-amazon.com/images/I/513TrNt8L1L._AC_UF1000,1000_QL80_.jpg",
];

$Warhammer_Fantasy = [
    "name" => "Warhammer_Fantasy",
    "price" => "6000",
    "weigth" => "900",
    "discount" => "5",
    "picture_url" => "https://m.media-amazon.com/images/I/716WNbV9UIL._AC_UF1000,1000_QL80_.jpg",
];

$potions = [
    "name" => "potions",
    "price" => "1200",
    "weigth" => "150",
    "discount" => "0",
    "picture_url" => "https://cfcdn-cf.hellodr.tech/wp-content/uploads/sites/2754/2024/03/potion-de-soin-jeu-de-role.jpeg",
];

$plateaux_modulaires = [
    "name" => "plateaux_modulaires",
    "price" => "6900",
    "weigth" => "1200",
    "discount" => "0",
    "picture_url" => "https://preview.redd.it/trying-out-new-d-d-board-designed-by-u-roll-to-brick-v0-rk7td90pqc0e1.jpg?width=640&crop=smart&auto=webp&s=bbbcfdf6888e2e822ad15d56c31cdc542fa2aec0",
];

$pièces_d_or_factices = [
    "name" => "pièces_d_or_factices",
    "price" => "1000",
    "weigth" => "300",
    "discount" => "5",
    "picture_url" => "https://img.ltwebstatic.com/images3_spmp/2025/02/23/04/17402743583e177b55f4b983352fea69e502802bfa_thumbnail_405x.jpg",
];

$sceaux = [
    "name" => "sceaux",
    "price" => "1700",
    "weigth" => "180",
    "discount" => "0",
    "picture_url" => "https://i.etsystatic.com/45088022/r/il/567c85/5101980484/il_794xN.5101980484_caf2.jpg",
];

$parchemins = [
    "name" => "parchemins",
    "price" => "800",
    "weigth" => "80",
    "discount" => "0",
    "picture_url" => "https://i.etsystatic.com/24978902/r/il/275794/5780343308/il_570xN.5780343308_n2q6.jpg",
];

$figurines = [
    "name" => "figurines",
    "price" => "3500",
    "weigth" => "500",
    "discount" => "13",
    "picture_url" => "https://i.etsystatic.com/29386085/r/il/43c33d/5242919545/il_1140xN.5242919545_jwd1.jpg",
];
$cartes = [
    "name" => "cartes",
    "price" => "1200",
    "weigth" => "200",
    "discount" => "10",
    "picture_url" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgMOq4WU4CgmLLMlR1W2keSPdRBR8MeJQ2tYcEtjFWdfbnZP2X04RUch_hJjBzMBXz7EYcgyONIRIiTaTHgb3M0E3aFOSj25WzfzUjVxQV8tnVnbE9zv2QxbsgI8ha8i_p-nLYsz4yLAUd-/s1600/carte-fantasy.gif",
];

$products = [
    $Dés_métal,
    $Dés_résine,
    $Warhammer_Le_Jeu_De_Rôle,
    $Warhammer_Fantasy,
    $potions,
    $plateaux_modulaires,
    $pièces_d_or_factices,
    $sceaux,
    $parchemins,
    $figurines,
    $cartes
];

?>

<?php include 'template/header.php'; ?>

<main>
    <h2>Nos produits phares</h2>
    <p>Vous trouverez tous les produits les plus vendus.</p>


    <?php foreach ($products as $product) : ?>
    <div class="card">
        <div>
            <h3><?= $product["name"]; ?></h3>
        </div>
        <div><img src="<?= $product["picture_url"]; ?>"alt="Image de <?= $product["name"] ?>"</div>
        <div><?= formatPrice($product["price"]); ?></div>
        <div>Prix Hors Taxe : <?= priceExcludingVAT($product['price']);?></div>
        <div>Prix après réduction : <?= discountedPrice($product['price'],$product['discount']);?></div>
    </div>

<?php endforeach; ?>

<!-- <h2>boucle for</h2>
    <?php 
    for ($i=0; $i < count($products);$i++){
        $product = $products[$i];
        ?>
        <div class="card">
        <div>
            <h3><?= $product["name"]; ?></h3>
        </div>
        <div><img src="<?= $product["picture_url"]; ?>"alt="Image livre de base Warhammer"> </div>
        <div><?= $product["price"]; ?> €</div>
    </div>
    <?php
    } 
    ?> -->


<!-- <h2>Boucle do while</h2>
<?php
    $i=0;
    do{
        $product = $products[$i];
        ?>
        <div class="card">
        <div>
            <h3><?= $product["name"]; ?></h3>
        </div>
        <div><img src="<?= $product["picture_url"]; ?>"alt="Image livre de base Warhammer"> </div>
        <div><?= $product["price"]; ?> €</div>
    </div> 
    
    <?php
    $i++;
    } while ($i < count($products));
    ?> -->

<!-- <h2>Boucle while</h2>
<?php
$i=0;
while ($i < count($products)){
    $product = $products[$i];
    ?>
    <div class="card">
        <div>
            <h3><?= $product["name"]; ?></h3>
        </div>
        <div><img src="<?= $product["picture_url"]; ?>"alt="Image livre de base Warhammer"> </div>
        <div><?= $product["price"]; ?> €</div>
    </div> 
    <?php
    $i++;
}; 

?>-->


</main>

<?php include 'template/footer.php'; ?>