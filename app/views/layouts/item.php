<div class="container px-4 pb-4">

    <h1
            <?php /** @var array $item */?>
            id="category-<?=htmlspecialchars($item['categories']['id'])?>"
            class="mt-4"
            style="color: #dededc; scroll-margin-top: 100px;"
    >
        <?php
        /** @var array  $item */
       echo htmlspecialchars($item['categories']['name']);
       ?>
    </h1>
    <div class="row row-cols-2 row-cols-lg-2 g-2">
        <?php
        foreach ($item['products'] as $product): ?>
        <div class="col ">
            <div class="card h-100 rounded-4 border-2" style="background: none; font-size: 12px; ">
                <div class="position-relative" style="width:100%; aspect-ratio:1/1;">
                    <img
                            src="<?= htmlspecialchars($product['image']) ?>"
                            alt=""
                            class="object-fit-cover rounded-4 w-100 h-100"
                    >
                    <div class="position-absolute d-flex justify-content-between align-items-center"
                         style="bottom:0.8rem; right:0.8rem; left:0.8rem;"
                    >
                        <button
                                hidden
                                id="button-<?= htmlspecialchars($product['id']) ?>"
                                class="btn minus"
                                style="width:clamp(2rem, 5vw, 3.5rem); height:clamp(2rem, 5vw, 3.5rem); padding:0; background-color:#dededc; border-radius: 50%;font-weight:700;"
                        >
                            <span style="position:relative; top:-1px;">-</span>
                        </button>
                        <span
                              id="quantity-button-<?= htmlspecialchars($product['id']) ?>"
                              style="color:#dededc; font-weight:600;"
                        ></span>
                        <button
                                data-id="button-<?= htmlspecialchars($product['id']) ?>"
                                class="btn plus"
                                style=" width:clamp(2rem, 5vw, 3.5rem); height:clamp(2rem, 5vw, 3.5rem); padding:0; background-color:#dededc; border-radius: 50%;font-weight:700;"
                        >
                            <span style="position:relative; top:-1px;">+</span>
                        </button>
                    </div>
                </div>

                <div class="card-body" style="padding: 0.5rem; line-height: 1.2;">
                    <h5 style="color: #dededc; font-size: 18px; margin-top: 0.2rem;" ><?=htmlspecialchars($product['price']) . ' ₽'?></h5>
                    <h5 class="card-title" style="color: #dededc; font-size: 14px;"><?php echo htmlspecialchars($product['name']) ?></h5>
                    <p class="card-text" style="color: #787876; margin-bottom: 0.2rem;"><?php echo htmlspecialchars($product['description']) ?></p>
                    <div style="color: #787876"><?= htmlspecialchars($product['weight']) . ' . ' . htmlspecialchars($product['calories'])?></div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

