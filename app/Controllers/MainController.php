<?php

  class MainController extends CoreController
  {
    public function home()
    {
      $brandModel = new Brand();
      $allBrands = $brandModel->findAll();

      $typeModel = new Type();
      $allTypes = $typeModel->findAll();

      $categoryModel = new Category();
      $allCategories = $categoryModel->findAll();

      // d( $allBrands );
      // d( $allTypes );

      $this->show( "home", [
        "allBrands" => $allBrands,
        "allTypes"  => $allTypes,
        "allCategories" => $allCategories,
      ] );
    }

    public function legal()
    {
      // Pour l'instant on a pas encore fait le template
      // $this->show( "legal" );

      echo "<h1>Mentions Légales</h1>";
    }

    private function show( $viewName, $viewData = [] )
    {
      // On peut utiliser get_defined_vars() pour avoir une liste
      // des variables qui existent actuellement là où on se trouve
    
      //  d( get_defined_vars() );

      require_once __DIR__ . '/../views/header.tpl.php';
      require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
      require_once __DIR__ . '/../views/footer.tpl.php';
    }
  }