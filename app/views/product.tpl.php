<section class="hero">
    <div class="container">
      <!-- Breadcrumbs -->
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="<?= $router->generate( "main-home" ) ?>">Home</a></li>
        <li class="breadcrumb-item active"><?= $viewData['categoryObject']->getName(); ?></li>
      </ol>
    </div>
  </section>

  <section class="products-grid">
    <div class="container-fluid">

      <div class="row">
        <!-- product-->
        <div class="col-lg-6 col-sm-12">
          <div class="product-image">
            <a class="product-hover-overlay-link">
              <img src="<?= $_SERVER['BASE_URI'] ?>/<?= $viewData['productObject']->getPicture(); ?>" alt="product" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="mb-3">
            <h3 class="h3 text-uppercase mb-1">
              <?= $viewData['productObject']->getName(); ?>
            </h3>
            <div class="text-muted">
              by <em><?= $viewData['brandObject']->getName(); ?></em>
            </div>
            <div>
            <!-- Solution 1 : la boucle -->
            <?php for( $i = 1 ; $i <= 5 ; $i++ ) : ?>
              <?php if( $i <= $viewData['productObject']->getRate() ) : ?>
                <i class="fa fa-star"></i>
              <?php else : ?>
                <i class="fa fa-star-o"></i>
              <?php endif; ?>
            <?php endfor; ?>
            </div>
          </div>
          <div class="my-2">
            <div class="text-muted">
              <span class="h4"><?= $viewData['productObject']->getPrice(); ?> €</span> TTC
            </div>
          </div>
          <div class="product-action-buttons">
            <form action="cart.html" method="post">
              <input type="hidden" name="product_id" value="1">
              <button class="btn btn-dark btn-buy">
                <i class="fa fa-shopping-cart"></i><span class="btn-buy-label ml-2">Ajouter au panier</span></button>
            </form>
          </div>
          <div class="mt-5">
            <p>
            <?= $viewData['productObject']->getDescription(); ?>
            </p>
          </div>
        </div>
        <!-- /product-->
      </div>
      
    </div>
  </section>