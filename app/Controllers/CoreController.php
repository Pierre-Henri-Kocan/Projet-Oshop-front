<?php

  namespace App\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Type;

  class CoreController
  {
    protected function show( $viewName, $viewData = [] )
    {
      // C'est pas bien, mais c'est ce qu'on a de mieux pour l'instant
      // https://www.php.net/manual/fr/language.variables.scope.php#language.variables.scope.global
      global $router;

      // Je récupère ici les données nécessaires a TOUTES les pages
      $brandModel = new Brand();
      $allBrands = $brandModel->findAll();

      $typeModel = new Type();
      $allTypes = $typeModel->findAll();

      $categoryModel  = new Category();
      $allCategories  = $categoryModel->findAll();

      // On peut utiliser get_defined_vars() pour avoir une liste
      // des variables qui existent actuellement là où on se trouve
      //d( get_defined_vars() );

      require_once __DIR__ . '/../views/header.tpl.php';
      require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
      require_once __DIR__ . '/../views/footer.tpl.php';
    }
  }