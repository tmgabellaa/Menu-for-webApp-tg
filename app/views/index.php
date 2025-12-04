<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Магазин</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.bundle.min.js"></script>
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btns = document.querySelectorAll('.plus');
        console.log(btns);

        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                const idBtnPlus = btn.dataset.id;
                const btnMinus = document.getElementById(idBtnPlus);
                const quantity = document.getElementById('quantity-' + idBtnPlus)

                console.log(idBtnPlus)

                if(btnMinus.hasAttribute('hidden')){
                    btnMinus.removeAttribute('hidden');
                }

                fetch('/basket', {
                    method: 'POST',
                    headers: {'content-type': 'application/json'},
                    body: JSON.stringify({id: idBtnPlus, checking: 'Misha228'})
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log("Ответ сервера:", data['quantity']);

                        quantity.textContent = data['quantity'];

                    })
            });
        });
    });
</script>
</body>
</html>

