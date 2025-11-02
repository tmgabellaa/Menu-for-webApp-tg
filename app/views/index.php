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

<?php
/** @var  $categories */
/** @var  $db */

    foreach ($categories as $category) :

        try {
            $res = $db->prepare("SELECT * FROM products WHERE id_categories = :categories_id");
            $res->execute(['categories_id' => $category['id']]);
            $products = $res->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
?>

        <?php include BASE_PATH . 'app/views/layouts/item.php';?>


<?php endforeach; ?>

</body>
</html>
