<?php

  namespace App\Controllers;

  use App\Models\Brand;
  use App\Models\Product;
  use App\Models\Type;
  use App\Models\Category;

  class CatalogController extends CoreController
  {
  
    public function type( $url_params )
    {
      echo "Page du type #".$url_params['type_id'];
    }

    public function brand( $url_params )
    {
      // Dans $url_params, je vais recevoir toutes les "variables" de l'URL
      // Et dans ce cas précis, category_id, tel que défini dans la route dans index.php§26
      echo "Page de la marque #".$url_params['brand_id'];

      d( $url_params );

      // J'instancie mon Model Brand
      $brandModel = new Brand();

      // J'appelle la méthode find en donnant l'id en paramètre
      // Il s'agit de l'id trouvé dans l'URL par AltoRouter
      // retourné par $matchingRouteInfos dans la clé "params"
      $brandObject = $brandModel->find( $url_params['brand_id'] );

      // Pour récupérer toutes les marques
      $allBrandObject = $brandModel->findAll();

      // Enfin j'utilise cet objet pour dynamiser mes vues, afficher son nom etc      
      // Pour l'instant on a pas encore fait le template
      // $this->show( "home" );
    }

    public function product( $url_params )
    {
      echo "Page du produit #".$url_params['product_id'];
      
    }

    public function category($url_params )
    {
        $categoryModel = new Category();
        $categoryObject = $categoryModel->find($url_params['category_id']);
        $allCategories = $categoryModel->findAll();

        var_dump($categoryObject);

        $this->show("products_list", 
                    [ "allCategories" => $allCategories,
                      "categoryObject" => $categoryObject,
                    ]
                  );
    }

  }