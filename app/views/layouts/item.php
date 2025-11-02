<div class="container px-4 pb-4">
    <h1 class="mt-4" style="color: #dededc" ><?php
        /** @var array $category  */
       echo htmlspecialchars($category['name'])?>
    </h1>
    <div class="row row-cols-2 row-cols-lg-2 g-2">
        <?php
        /** @var array  $products */
        foreach ($products as $product): ?>
        <div class="col ">
            <div class="card h-100 rounded-4 border-2" style="background: none; font-size: 12px; ">
                <div class="ratio ratio-1x1">
                    <img class="card-img-top object-fit-cover rounded-4"  src="<?= htmlspecialchars($product['image']) ?>" alt="">
                </div>
                <div class="card-body" style="padding: 0.5rem; line-height: 1.2;">
                    <h5 class="card-title" style="color: #dededc; font-size: 14px;"><?php echo htmlspecialchars($product['name']) ?></h5>
                    <p class="card-text" style="color: #787876; margin-bottom: 0.2rem;"><?php echo htmlspecialchars($product['description']) ?></p>
                    <div style="color: #787876"><?= htmlspecialchars($product['weight']) . ' . ' . htmlspecialchars($product['calories'])?></div>
                    <div class="row row-cols-2 row-cols-lg-2 mt-1" >
                        <div class="col">
                            <h5 style="color: #dededc; font-size: 18px; margin-top: 0.5rem;" ><?=htmlspecialchars($product['price']) . ' ₽'?></h5>
                        </div>
                        <div class="col d-flex justify-content-end align-items-center">
                            <button style="background-color: #dededc; font-size: 10px;"  type="button" class="btn btn-sm rounded-2" >В корзину</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
