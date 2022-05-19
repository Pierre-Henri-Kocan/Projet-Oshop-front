<?php

  class MainController
  {
    public function home()
    {
      $this->show( "home" );
    }

    public function category()
    {
      // Pour l'instant on a pas encore fait le template
      // $this->show( "category" );

      d( get_defined_vars() );
    }

    private function show( $viewName, $viewData = [] )
    {
      d( $viewData );

      require_once __DIR__ . '/../views/header.tpl.php';
      require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
      require_once __DIR__ . '/../views/footer.tpl.php';
    }
  }