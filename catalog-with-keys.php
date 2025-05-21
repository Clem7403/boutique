<?php 

$Dés_métal = [
    "name" => "Dés_métal",
    "price" => "24.90",
    "weigth" => "250",
    "discount" => "10",
    "picture_url" => "https://toutpourlejeu.com/28635-large_default/5-des-en-metal-style-steampunk-16-mm.jpg",
];

$Dés_résine = [
    "name" => "Dés_résine",
    "price" => "15",
    "weigth" => "100",
    "discount" => "10",
    "picture_url" => "https://i.etsystatic.com/43537117/r/il/b86852/5075643762/il_1140xN.5075643762_14uc.jpg",
];

$Warhammer_Le_Jeu_De_Rôle = [
    "name" => "Warhammer_Le_Jeu_De_Rôle",
    "price" => "50",
    "weigth" => "850",
    "discount" => "0",
    "picture_url" => "https://m.media-amazon.com/images/I/513TrNt8L1L._AC_UF1000,1000_QL80_.jpg",
];

$Warhammer_Fantasy = [
    "name" => "Warhammer_Fantasy",
    "price" => "60",
    "weigth" => "900",
    "discount" => "5",
    "picture_url" => "https://m.media-amazon.com/images/I/716WNbV9UIL._AC_UF1000,1000_QL80_.jpg",
];

$potions = [
    "name" => "potions",
    "price" => "12",
    "weigth" => "150",
    "discount" => "0",
    "picture_url" => "https://cfcdn-cf.hellodr.tech/wp-content/uploads/sites/2754/2024/03/potion-de-soin-jeu-de-role.jpeg",
];

$plateaux_modulaires = [
    "name" => "plateaux_modulaires",
    "price" => "69",
    "weigth" => "1200",
    "discount" => "0",
    "picture_url" => "https://preview.redd.it/trying-out-new-d-d-board-designed-by-u-roll-to-brick-v0-rk7td90pqc0e1.jpg?width=640&crop=smart&auto=webp&s=bbbcfdf6888e2e822ad15d56c31cdc542fa2aec0",
];

$pièces_d_or_factices = [
    "name" => "pièces_d_or_factices",
    "price" => "10",
    "weigth" => "300",
    "discount" => "5",
    "picture_url" => "https://img.ltwebstatic.com/images3_spmp/2025/02/23/04/17402743583e177b55f4b983352fea69e502802bfa_thumbnail_405x.jpg",
];

$sceaux = [
    "name" => "sceaux",
    "price" => "17",
    "weigth" => "180",
    "discount" => "0",
    "picture_url" => "https://i.etsystatic.com/45088022/r/il/567c85/5101980484/il_794xN.5101980484_caf2.jpg",
];

$parchemins = [
    "name" => "parchemins",
    "price" => "8",
    "weigth" => "80",
    "discount" => "0",
    "picture_url" => "https://i.etsystatic.com/24978902/r/il/275794/5780343308/il_570xN.5780343308_n2q6.jpg",
];

$figurines = [
    "name" => "figurines",
    "price" => "35",
    "weigth" => "500",
    "discount" => "13",
    "picture_url" => "https://i.etsystatic.com/29386085/r/il/43c33d/5242919545/il_1140xN.5242919545_jwd1.jpg",
];
$cartes = [
    "name" => "cartes",
    "price" => "12",
    "weigth" => "200",
    "discount" => "10",
    "picture_url" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgMOq4WU4CgmLLMlR1W2keSPdRBR8MeJQ2tYcEtjFWdfbnZP2X04RUch_hJjBzMBXz7EYcgyONIRIiTaTHgb3M0E3aFOSj25WzfzUjVxQV8tnVnbE9zv2QxbsgI8ha8i_p-nLYsz4yLAUd-/s1600/carte-fantasy.gif",
];
?>

<?php include 'header.php'; ?>

<main>
    <h2>Nos produits phares</h2>
    <p>Vous trouverez tous les produits les plus vendus.</p>

    <div class="card">
        <div>
            <h3><?= $Warhammer_Le_Jeu_De_Rôle["name"]; ?></h3>
        </div>
        <div><img src="<?= $Warhammer_Le_Jeu_De_Rôle["picture_url"]; ?>"alt="Image livre de base Warhammer"> </div>
        <div><?= $Warhammer_Le_Jeu_De_Rôle["price"]; ?> €</div>
    </div>

    <div class="card">

        <div>
            <h3><?= $Dés_métal["name"];?> </h3>
        </div>
        <div>
            <img src="<?= $Dés_métal["picture_url"]; ?>" alt="Image de dés en métal">
        </div>
        <div><?= $Dés_métal["price"];?> €</div>
    </div>

    <div class="card">
        <div>
            <h3><?= $parchemins["name"]; ?></h3>
        </div>
        <div>
            <img src="<?= $parchemins["picture_url"];?>" alt='Image Ecran AOC 24G2U 24" Noir '>
        </div>
        <div><?=$parchemins["price"];?> €</div>
    </div>

    <div class="card">
        <div>
            <h3><?= $pièces_d_or_factices["name"];?></h3>
        </div>
        <div><img src="<?=$pièces_d_or_factices["picture_url"];?>" alt='Disque SSD interne Lexar Play 2280 1 To pour PS5 Noir et Argent'> </div>
        <div><?=$pièces_d_or_factices["price"];?> €</div>
    </div>

</main>

<?php include 'footer.php'; ?>