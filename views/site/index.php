<?php

/** @var yii\web\View $this */

$this->title = 'Amazon.com';
?>
<div class="site-index">

    <!-- Logo de Amazon -->
    <div class="text-center mt-3">
        <img src="<?= Yii::getAlias('@web/images/movies/amazon/amazon.png') ?>" alt="Amazon Logo" style="max-width: 200px; height: auto;" />
    </div>

    <div class="jumbotron text-center bg-transparent mt-4 mb-5">
        <h1 class="display-4 text-warning">Amazon</h1>
        <h3 class="text-danger">Sección de Artículos de compra</h3>

    </div>

    <div class="body-content">
        <div class="row">
            <!-- Card 1: Echo Dot -->
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?= Yii::getAlias('@web/images/movies/amazon/echodot.jpg') ?>" class="card-img-top" alt="Echo Dot" />
                    <div class="card-body">
                        <h5 class="card-title">Echo Dot (5ta Gen)</h5>
                        <p class="card-text">Altavoz inteligente con Alexa | Controla tu casa con la voz | Color: Antracita</p>
                        <p><strong>Precio:</strong> $49.99</p>
                        <a href="https://www.amazon.com/dp/B09B8V1LZ3" target="_blank" class="btn btn-warning">Comprar Ahora</a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Fire TV Stick -->
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?= Yii::getAlias('@web/images/movies/amazon/firetv.jpg') ?>" class="card-img-top" alt="Fire TV Stick" />
                    <div class="card-body">
                        <h5 class="card-title">Fire TV Stick</h5>
                        <p class="card-text">Streaming en Full HD con control remoto por voz con Alexa (modelo 2023)</p>
                        <p><strong>Precio:</strong> $39.99</p>
                        <a href="https://www.amazon.com/dp/B09B9QX1X3" target="_blank" class="btn btn-warning">Comprar Ahora</a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Kindle Paperwhite -->
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?= Yii::getAlias('@web/images/movies/amazon/kindle.jpg') ?>" class="card-img-top" alt="Kindle Paperwhite" />
                    <div class="card-body">
                        <h5 class="card-title">Kindle Paperwhite</h5>
                        <p class="card-text">Pantalla de 6.8" sin reflejos | Luz cálida ajustable | Batería de hasta 10 semanas</p>
                        <p><strong>Precio:</strong> $139.99</p>
                        <a href="https://www.amazon.com/dp/B08KTZ8249" target="_blank" class="btn btn-warning">Comprar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
