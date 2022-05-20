<?php

  class MainController
  {
    public function home()
    {
      $this->show( "home" );
    }

    public function legal()
    {
      // Pour l'instant on a pas encore fait le template
      // $this->show( "legal" );

      echo "<h1>Mentions Légales</h1>";
    }

    private function show( $viewName, $viewData = [] )
    {
      //d( $viewData );

      require_once __DIR__ . '/../views/header.tpl.php';
      require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
      require_once __DIR__ . '/../views/footer.tpl.php';
    }
  }