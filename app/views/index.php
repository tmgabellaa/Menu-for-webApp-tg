<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Магазин</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<header>
    <?php include BASE_PATH . 'app/views/layouts/header.php'; ?>
</header>
<body style="background-color: #191917;">

<div style="margin-top: 100px">
<?php
/** @var array $dataCategoriesOrProducts */
foreach ($dataCategoriesOrProducts as $item) :  ?>

    <?php include BASE_PATH . 'app/views/layouts/item.php'; ?>

<?php endforeach; ?>
</div>

<script src="js/basket.js"> </script>
</body>
</html>

