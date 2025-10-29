
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <?php
            /** @var  */
            htmlspecialchars($logo[0]['title'])
            ?>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNav" aria-controls="mainNav"
                aria-expanded="false" aria-label="Открыть навигацию">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <?php
                /** @var array $navbar */
                foreach ($navbar as $item) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><?=htmlspecialchars($item['name'])?></a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</nav>