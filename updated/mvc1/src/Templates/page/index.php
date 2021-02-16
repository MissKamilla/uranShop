<main>
    <h2 class="main_title">PAGES</h2>
    <div class="row no-gutters">
        <?php if(isset($pages)): ?>
            <?php foreach($pages as $page): ?>
                <article class="pages col-6 col-lg-3">
                    <div class="page items-text">   
                        <div class="image">
                            <img src="<?= $page->getFriendly()?>" alt="<?=  $page->getTitle() ?>">
                        </div>
                        <h3 class="page_name">
                            <a href="/page?id=<?= $page->getId()?>"><?=  $page->getTitle() ?></a>
                        </h3>
                        <div class="page_inf  items-text">
                            <p ><?=  $page->getDescription() ?></p>
                        </div>
                    </div>
                </article>
            <?php endforeach;?>
        <?php else: ?>
            <p>There are no Pages</p>
        <?php endif;?>
    </div>
</main>