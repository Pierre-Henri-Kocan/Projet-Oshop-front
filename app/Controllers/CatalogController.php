<?php

  namespace App\Controllers;

  use App\Models\Brand;
  use App\Models\Product;
  use App\Models\Type;
  use App\Models\Category;

  class CatalogController extends CoreController
  {
    public function category( $url_params )
    {
      echo "Page de la catégorie #".$url_params['category_id'];
      
      $productModel = new Product();
      $productList = $productModel->findAllBy( "category_id", $url_params['category_id'] );

      $filterModel = new Category();
      $filterObject = $filterModel->find( $url_params['category_id'] );

      $this->show( "product_list", [
        "productList" => $productList,
        "filterObject" => $filterObject
      ] );
    }

    public function type( $url_params )
    {
      echo "Page du type #".$url_params['type_id'];
      
      $productModel = new Product();
      $productList = $productModel->findAllBy( "type_id", $url_params['type_id'] );

      $filterModel = new Type();
      $filterObject = $filterModel->find( $url_params['type_id'] );

      $this->show( "product_list", [
        "productList" => $productList,
        "filterObject" => $filterObject
      ] );
    }

    public function brand( $url_params )
    {
      echo "Page de la marque #".$url_params['brand_id'];
      
      $productModel = new Product();
      $productList = $productModel->findAllBy( "brand_id", $url_params['brand_id'] );

      $filterModel = new Brand();
      $filterObject = $filterModel->find( $url_params['brand_id'] );

      $this->show( "product_list", [
        "productList" => $productList,
        "filterObject" => $filterObject
      ] );
    }

    public function product( $url_params )
    {
      $productModel = new Product();
      $productObject = $productModel->find( $url_params['product_id'] );

      // On récupère juste la marque dont l'id correspond au brand_id 
      // du produit qu'on vient de récupérer
      $brandModel = new Brand();
      $brandObject = $brandModel->find( $productObject->getBrand_id() );

      // Pareil pour Category
      $categoryModel = new Category();
      $categoryObject = $categoryModel->find( $productObject->getCategory_id() );

      // d( $url_params );

      $this->show( "product", [
        "productObject"  => $productObject,
        "brandObject"    => $brandObject,
        "categoryObject" => $categoryObject,
      ] );
    }

  }