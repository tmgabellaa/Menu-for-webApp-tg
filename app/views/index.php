<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Магазин</title>
    <meta charset="utf-8">
    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Bootstrap JS + Popper JS -->
    <script src="/js/bootstrap.bundle.min.js"></script>
</head>
<header>
    <?php include BASE_PATH . 'app/views/layouts/header.php'; ?>
</header>
<body style="background-color: #191917;">

<div style="margin-top: 100px">
<?php
$i = 1;
/** @var array $dataCategoriesOrProducts */
foreach ($dataCategoriesOrProducts as $item) :  ?>

    <?php include BASE_PATH . 'app/views/layouts/item.php'; ?>

<?php $i++; endforeach; ?>
</div>
</body>
</html>

