<main>
    <div class="row no-gutters justify-content-center">
        <article class="col-12 col-sm-6 col-lg-4 justify-content-center">
            <div class="page items-text">   
                <div class="image">
                    <img src="<?= $page->getFriendly() ?>" alt="<?= $page->getTitle()?>">
                </div>
                <h3 class="page_name">
                    <a href="/page?id=<?= $page->getId() ?>"><?= $page->getTitle() ?></a>
                </h3>
                <div class="page_inf  items-text">
                    <p ><?=  $page->getDescription() ?></p>
                </div>
            </div>
        </article>
    </div>
    <h3 class="page_name"><a href="/">back</a></h3>
</main>