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
      $categoryModel  = new Category();
      $homeCategories = $categoryModel->findForHome();

      $this->show( "home", [
        "homeCategories"  => $homeCategories,
      ] );
    }

    public function legal()
    {
      // Pour l'instant on a pas encore fait le template
      // $this->show( "legal" );

      echo "<h1>Mentions Légales</h1>";
    }
  }