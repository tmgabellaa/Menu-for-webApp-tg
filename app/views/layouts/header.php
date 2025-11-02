<nav class="navbar flex-column pt-3" style="background-color: #191917;">
    <div class="container-fluid text-center">
        <!-- Название магазина -->
        <a class="navbar-brand d-block mx-auto" href="/" style="color: #dededc;">
            <?php /** @var array $logo */ echo htmlspecialchars($logo[0]['title']); ?>
        </a>

        <!-- Горизонтальный скролл категорий -->
        <div class="w-100">
            <div class="d-flex justify-content-center flex-nowrap overflow-auto pb-2">
                <?php /** @var array $categories */ foreach ($categories as $item): ?>
                    <a href="/"
                       class="text-decoration-none mx-3 flex-shrink-0"
                       style="color: #787876;"
                       onmouseover="this.style.color='#dededc'"
                       onmouseout="if(!this.classList.contains('active')) this.style.color='#787876'"
                       onclick="document.querySelectorAll('.category-link').forEach(a=>a.classList.remove('active')); this.classList.add('active'); this.style.color='#dededc';">
                        <?= htmlspecialchars($item['name']) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</nav>
