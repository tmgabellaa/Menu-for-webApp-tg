<nav class="navbar flex-column pt-3" style="background-color: #191917; position: fixed; top: 0; z-index: 10; width: 100%">
    <div class="container-fluid text-center">

        <a class="navbar-brand d-block mx-auto" href="/" style="color: #dededc;">
            <?php /** @var array $logo */ echo htmlspecialchars($logo[0]['title']); ?>
        </a>

        <div class="w-100">
            <div class="d-flex justify-content-center flex-nowrap overflow-auto pb-2">
                <?php /** @var array $categories */ foreach ($categories as $item) : ?>
                    <a href="#"
                       data-target = "category-<?=htmlspecialchars($item['id'])?>"
                       class=" category_header text-decoration-none mx-3 flex-shrink-0"
                       style="color: #787876; "
                    >
                        <?= htmlspecialchars($item['name']) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded',  () => {

        const links = document.querySelectorAll('.category_header');

        links.forEach(link  => {
            link.addEventListener('click', (e) => {
                e.preventDefault();

                links.forEach( l => {
                    l.style.color = '#787876';
                    l.style.borderBottom = 'none';
                });
                link.style.color = '#dededc';
                link.style.borderBottom = '0.08rem solid #dededc';

                const dataTarget = link.dataset.target
                const id = document.getElementById(dataTarget)

                id.scrollIntoView({behavior: 'smooth'})
            })
        })
    });
</script>