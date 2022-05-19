<?php

  class CatalogController
  {
      public function category()
      {
          $this->show( "category" );
      }
        
      public function type()
      {
          $this->show( "type" );
      }

      public function brand()
      {
          $this->show( "brand" );
      }
        
      public function product()
      {
          $this->show( "product" );
      }
      
    private function show( $viewName, $viewData = [] )
    {

      require_once __DIR__ . '/../views/header.tpl.php';
      require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
      require_once __DIR__ . '/../views/footer.tpl.php';
    }
  }