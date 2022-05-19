<?php

  class MainController
  {
    public function home()
    {
      $this->show( "home" );
    }

    public function notice()
    {
      $this->show( "notice" );
    }

    private function show( $viewName, $viewData = [] )
    {

      require_once __DIR__ . '/../views/header.tpl.php';
      require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
      require_once __DIR__ . '/../views/footer.tpl.php';
    }
  }