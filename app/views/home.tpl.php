<section>
    <div class="container-fluid">
        <div class="row mx-0">

            <?php foreach( $viewData['homeCategories'] as $key =>$categoryObject ) : ?>
            <?php if( $key < 2 ) : ?>
            <div class="col-md-6">
                <div class="card border-0 text-white text-center">
                    <img src="<?= $_SERVER['BASE_URI'] ?>/<?= $categoryObject->getPicture(); ?>" alt="Card image"
                        class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100 py-3">
                            <h2 class="display-3 font-weight-bold mb-4"><?= $categoryObject->getName(); ?></h2>
                            <a href="<?= $router->generate( "catalog-category", [ "category_id" => $categoryObject->getId() ] ); ?>"
                                class="btn btn-light"><?= $categoryObject->getSubtitle(); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <div class="row mx-0">

            <?php foreach( $viewData['homeCategories'] as $key => $categoryObject ) : ?>
            <?php if( $key >= 2 ) : ?>
            <div class="col-lg-4">
                <div class="card border-0 text-center text-white">
                    <img src="<?= $_SERVER['BASE_URI'] ?>/<?= $categoryObject->getPicture(); ?>" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                            <h2 class="display-4 mb-4"><?= $categoryObject->getName(); ?></h2>
                            <a href="<?= $router->generate( "catalog-category", [ "category_id" => $categoryObject->getId() ] ); ?>"
                                class="btn btn-link text-white"><?= $categoryObject->getSubtitle(); ?>
                                <i class="fa-arrow-right fa ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>