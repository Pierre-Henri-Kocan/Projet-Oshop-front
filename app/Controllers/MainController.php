<?php

  namespace App\Controllers;

  use App\Models\Brand;
  use App\Models\Product;
  use App\Models\Type;
  use App\Models\Category;

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
        "allBrands"      => $allBrands,
        "allTypes"       => $allTypes,
        "allCategories"  => $allCategories,
      ] );
    }

    public function legal()
    {
      // Pour l'instant on a pas encore fait le template
      // $this->show( "legal" );

      echo "<h1>Mentions Légales</h1>";
    }
  }