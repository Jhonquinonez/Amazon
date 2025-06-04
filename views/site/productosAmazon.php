<?php
use yii\helpers\Html;

$this->title = 'Productos Amazon';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-productos-amazon">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <h2 class="mt-5">🔥 Más Vendidos</h2>
    <div class="row">
        <?php foreach (['Echo Dot 5', 'Fire TV Stick 4K', 'Kindle Paperwhite'] as $producto): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300x200?text=<?= urlencode($producto) ?>" class="card-img-top" alt="<?= $producto ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $producto ?></h5>
                    <p class="card-text">Producto más vendido en Amazon este mes.</p>
                    <a href="#" class="btn btn-primary">Ver Producto</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <h2 class="mt-5">⭐ Más Destacados</h2>
    <div class="row">
        <?php foreach (['Audífonos Bose', 'Laptop ASUS VivoBook', 'Cámara GoPro Hero 10'] as $producto): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://www.amazon.com/A315-24PT-R0UX-Display-Quad-Core-Processor-Graphics/dp/B0CJV41KZN<?= urlencode($producto) ?>" class="card-img-top" alt="<?= $producto ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $producto ?></h5>
                    <p class="card-text">Recomendado por expertos y usuarios.</p>
                    <a href="#" class="btn btn-success">Ver Producto</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <h2 class="mt-5">👀 Más Vistos</h2>
    <div class="row">
        <?php foreach (['Monitor LG UltraWide', 'Tablet Samsung Galaxy', 'iPhone 14 Pro'] as $producto): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/300x200?text=<?= urlencode($producto) ?>" class="card-img-top" alt="<?= $producto ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $producto ?></h5>
                    <p class="card-text">Entre los más buscados por los clientes.</p>
                    <a href="#" class="btn btn-warning">Ver Producto</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <h2 class="mt-5">🎁 Sugerencias para ti</h2>
    <div class="row">
        <?php foreach (['Alexa Smart Plug', 'Luz LED RGB', 'Cargador Portátil Anker'] as $producto): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-info">
                <img src="https://via.placeholder.com/300x200?text=<?= urlencode($producto) ?>" class="card-img-top" alt="<?= $producto ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $producto ?></h5>
                    <p class="card-text">Sugerencias personalizadas para ti.</p>
                    <a href="#" class="btn btn-info">Ver Producto</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
