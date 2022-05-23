<nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
      <div class="container-fluid">
        <!-- Navbar Header  -->
        <a href="index.html" class="navbar-brand">oShop</a>
        <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
        <!-- Navbar Collapse -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="index.html" class="nav-link active">Accueil</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Catégories</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <?php foreach( $viewData['allCategories'] as $categoryObject ) : ?>
                    <a 
                      class="dropdown-item" 
                      href="<?= $_SERVER['BASE_URI'] ?>/catalog/category/<?= $categoryObject->getId(); ?>"
                    >
                      <?= $categoryObject->getName(); ?>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Types de produits</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                  <?php foreach( $viewData['allTypes'] as $typeObject ) : ?>
                    <a 
                      class="dropdown-item" 
                      href="<?= $_SERVER['BASE_URI'] ?>/catalog/type/<?= $typeObject->getId(); ?>"
                    >
                      <?= $typeObject->getName(); ?>
                    </a>
                  <?php endforeach; ?>

                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Marques</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <?php foreach( $viewData['allBrands'] as $brandObject ) : ?>
                    <a 
                      class="dropdown-item" 
                      href="<?= $_SERVER['BASE_URI'] ?>/catalog/brand/<?= $brandObject->getId(); ?>"
                    >
                      <?= $brandObject->getName(); ?>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>