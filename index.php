<?php
require __DIR__ . '/models/category.php';
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Plays.php';
require __DIR__ . '/models/Dogsbed.php';
require __DIR__ . '/models/Food.php';

$categoriaCane = new Categoria('Cane');
$categoriaGatto = new Categoria('Gatto');

$PlaysListDog = [
    new Plays('palla', 30, 'Queste palle galleggiano en acqua e offrono una grande visibilità', $categoriaCane, 'https://www.animalhouseitalia.it/15814/ferribiella-palla-fuxtreme-ultrasuoni-per-cani-taglia-media.jpg', 'tipo', '8,89 x 8,89 x 8,89 cm; 100 grammi'),
    new Plays('Cannetta gioco con topino sonoro', 5.99, 'All interno del topino è inserito un chip sonoro. Al minimo contatto il topino squittisce', $categoriaGatto, 'https://shop-cdn-m.mediazs.com/bilder/cannetta/gioco/con/topino/sonoro/1/400/14198_PLA_Karlie_Spielangel_Soundmaus_1.jpg', 'tipo', 'canna: 50cm x Filo da pesca 65cm; topolinoi 5.5 cm'),
];

$PlaysListDog[0]->setDiscount(20);
$PlaysListDog[1]->setDiscount(50);

$DogsBedList = [
    new Dogsbed('cuccia', "prova", 'Cuscino double-face estraibile, particolarmente morbido e avvolgente', $categoriaGatto, 'https://www.aquazoomaniashop.it/34082-large_default/dog-line-cuccia-svalbard-waterproof-per-cane.jpg', '50L x 37l x 17Sp cm', 'tipo', 'Cotone polipropilene'),
];

$FoodList = [
    new Food("Natural Trainer Medium Cibo per Cani Adulti con Prosciutto crudo - 12kg", 42, '-Mangiare sano per cani -Crocchette naturali -Mangiare del benessere -Miglior mangime -Mangime di qualità', $categoriaCane, 'https://www.millelirealmese.it/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/c/i/cibo-per-cani-friskies-active-confezione-busta-4-kg.png', 'Proteine di pollo e tacchino disidratate, granturco, fioretto di granturco, carne fresca di pollo e tacchino 10%, riso 10%, grassi animali, idrolizzato proteico animale, proteine di prosciutto crudo 100%'),
];

$FoodList[0]->setDiscount(40);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="mt-4 d-flex justify-content-center">
            <h2>PetShop</h2>
        </div>
    </header>
    <main>
        <div>
            <h3 class="pb-2">Scegli tra i tanti giochi disponibili per il tuo Animale</h3>
            <?php foreach ($PlaysListDog as $play) { ?>
                <div class="d-flex gap-3">
                    <div class="card " style="width: 18rem;">
                        <div class="container">
                            <div class="d-flex flex-column justify-content-between">
                                <img src="<?= $play->imgProduct ?>" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <p class="card-text m-0 mb-3"><strong>Categoria:</strong> <?= $play->category->icon; $play->category->name ?></p>
                                    <p class="card-text"><strong>Gioco:</strong> <?= $play->name ?></p>
                                    <div class="collapse" id="collapseExample">
                                        <?php if ($play->getPrice() !== $play->getDiscountedPrice()) { ?>
                                            <p class="card-text"><strong>Prezzo Gioco:</strong> <del><?= $play->getPrice() ?></del></p>
                                            <p class="card-text"><strong>Prezzo Scontato:</strong> <?= $play->getDiscountedPrice() ?></p>
                                        <?php } else { ?>
                                            <p class="card-text"><strong>Prezzo Gioco:</strong> <?= $play->getPrice() ?></p>
                                        <?php } ?>
                                        <p class="card-text"><strong>Descrizione Gioco:</strong> <?= $play->description ?></p>
                                        <p class="card-text"><strong>Dimensione Gioco:</strong> <?= $play->ProductDimensions ?></p>
                                        <a href="#" class="btn btn-primary">Acquista Prodotto</a>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <a class="text-center btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
        </div>
        <div class="mt-4">
            <h3 class="pb-3">Scegli tra le cucce disponibili per il tuo Animale</h3>
            <div class="d-flex">
                <?php foreach ($DogsBedList as $Dogbed) { ?>
                    <div class="d-flex">
                        <div class="card" style="width: 18rem;">
                            <div class="container">
                                <div class="d-flex flex-column justify-content-between">
                                    <img src="<?= $Dogbed->imgProduct ?>" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <p class="card-text m-0"><strong>Categoria:</strong> <?= $Dogbed->category->icon; $Dogbed->category->name ?></p>
                                        <div class="collapse" id="collapseExample1">
                                        <small>Price: <?php
                                                try{
                                                    echo $Dogbed->getPrice(); 
                                                }catch(Exception $e){
                                                    echo "Prova : " . $e->getMessage();
                                                }
                                                ?>
                                            </small>
                                            <!-- <p class="card-text"><strong>Prezzo Gioco:</strong> <?= $Dogbed->getPrice() ?></p> -->
                                            <p class="card-text"><strong>Descrizione Gioco:</strong> <?= $Dogbed->description ?></p>
                                            <p class="card-text"><strong>Dimensione Cuccia:</strong> <?= $Dogbed->BedDimension ?></p>
                                            <a href="#" class="btn btn-primary">Acquista Prodotto</a>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3">
                                        <a class="text-center btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">Read more</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
            </div>
            <div class="mt-4">
                <h3 class="pb-3">Scegli tra i cibi per il tuo Animale</h3>
                <div class="d-flex">
                    <?php foreach ($FoodList as $food) { ?>
                        <div class="d-flex">
                            <div class="card" style="width: 18rem;">
                                <div class="container">
                                    <div class="d-flex flex-column justify-content-between">
                                        <img src="<?= $food->imgProduct ?>" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <p class="card-text m-0"><strong>Categoria:</strong> <?= $food->category->icon;
                                                                                $food->category->name ?></p>
                                            <div class="collapse" id="collapseExample2">
                                                <p class="card-text"><strong>Prodotto:</strong> <?= $food->name ?></p>
                                                <<?php if ($food->getPrice() !== $food->getDiscountedPrice()) { ?> <p class="card-text"><strong>Prezzo Prodotto:</strong> <del><?= $food->getPrice() ?></del></p>
                                                    <p class="card-text"><strong>Prezzo Scontato:</strong> <?= $food->getDiscountedPrice() ?></p>
                                                <?php } else { ?>
                                                    <p class="card-text"><strong>Prezzo Gioco:</strong> <?= $food->getPrice() ?></p>
                                                <?php } ?>
                                                <p class="card-text"><strong>Descrizione Prodotto:</strong> <?= $food->description ?></p>
                                                <p class="card-text"><strong>Ingredienti Prodotto:</strong> <?= $food->ingredients ?></p>
                                                <a href="#" class="btn btn-primary">Acquista Prodotto</a>
                                            </div>
                                        </div>
                                        <div class="text-center mb-3">
                                            <a class="text-center btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                </div>
            </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


</body>

</html>