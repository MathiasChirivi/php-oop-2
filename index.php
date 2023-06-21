<?php 
    require __DIR__ . '/models/Product.php';
    require __DIR__ . '/models/Plays.php';
    require __DIR__ . '/models/Dogsbed.php';
    require __DIR__ . '/models/Food.php';


$PlaysListDog = [
    new Plays('palla', 20 ,'Queste palle galleggiano en acqua e offrono una grande visibilità', 'cane', 'https://www.animalhouseitalia.it/15814/ferribiella-palla-fuxtreme-ultrasuoni-per-cani-taglia-media.jpg', 'tipo', '8,89 x 8,89 x 8,89 cm; 100 grammi'),
    new Plays('palla', 20 ,'Queste palle galleggiano en acqua e offrono una grande visibilità', 'cane', 'https://www.animalhouseitalia.it/15814/ferribiella-palla-fuxtreme-ultrasuoni-per-cani-taglia-media.jpg', 'tipo', '8,89 x 8,89 x 8,89 cm; 100 grammi'),
    new Plays('palla', 20 ,'Queste palle galleggiano en acqua e offrono una grande visibilità', 'cane', 'https://www.animalhouseitalia.it/15814/ferribiella-palla-fuxtreme-ultrasuoni-per-cani-taglia-media.jpg', 'tipo', '8,89 x 8,89 x 8,89 cm; 100 grammi'),
    new Plays('palla', 20 ,'Queste palle galleggiano en acqua e offrono una grande visibilità', 'cane', 'https://www.animalhouseitalia.it/15814/ferribiella-palla-fuxtreme-ultrasuoni-per-cani-taglia-media.jpg', 'tipo', '8,89 x 8,89 x 8,89 cm; 100 grammi'),
    new Plays('palla', 20 ,'Queste palle galleggiano en acqua e offrono una grande visibilità', 'cane', 'https://www.animalhouseitalia.it/15814/ferribiella-palla-fuxtreme-ultrasuoni-per-cani-taglia-media.jpg', 'tipo', '8,89 x 8,89 x 8,89 cm; 100 grammi'),
];

$DogsBedList = [
    new Dogsbed('cuccia', 30,'Cuscino double-face estraibile, particolarmente morbido e avvolgente', 'cane', 'https://www.aquazoomaniashop.it/34082-large_default/dog-line-cuccia-svalbard-waterproof-per-cane.jpg', '50L x 37l x 17Sp cm', 'tipo', 'Cotone polipropilene')
]

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h3 class="pb-2">Scegli tra i tanti giochi disponibili per il tuo cane</h3>
            <div class="d-flex">
                <?php foreach($PlaysListDog as $play) {?>
                    <div class="d-flex">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= $play->imgProduct ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <p class="card-text"><strong>Gioco:</strong> <?= $play->name ?></p>
                                <p class="card-text"><strong>Prezzo Gioco:</strong> <?= $play->getPrice() ?></p>
                            <p class="card-text"><strong>Descrizione Gioco:</strong> <?= $play->description ?></p>
                            <p class="card-text"><strong>Dimensione Gioco:</strong> <?= $play->ProductDimensions ?></p>
                            <a href="#" class="btn btn-primary">Acquista Prodotto</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="mt-4">
            <h3 class="pb-3">Scegli tra le cucce disponibili per il tuo cane</h3>
                <div class="d-flex">
                    <?php foreach($DogsBedList as $Dogbed) {?>
                        <div class="d-flex">
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $Dogbed->imgProduct ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text"><strong>Gioco:</strong> <?= $Dogbed->name ?></p>
                                    <p class="card-text"><strong>Prezzo Gioco:</strong> <?= $Dogbed->getPrice() ?></p>
                                    <p class="card-text"><strong>Descrizione Gioco:</strong> <?= $Dogbed->description ?></p>
                                    <p class="card-text"><strong>Dimensione Cuccia:</strong> <?= $Dogbed->BedDimension ?></p>
                                    <a href="#" class="btn btn-primary">Acquista Prodotto</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
    </main>
</body>
</html>
