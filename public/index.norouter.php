<?php

  // On inclut nos classes 
  require_once __DIR__ . '/../app/Controllers/MainController.php';

  // On récupère la partie "dynamique" de l'URL réécrite
  $page = $_GET['_url'] ?? "/";

  // On instancie notre controller
  $controller = new MainController();

  // Routes et Dispatch
  if( $page === "/" )
  {
    // On emprunte cette route => on affiche la page
    $controller->home();
  }
  elseif( $page === "/catalog/category/" )
  {
    // On emprunte cette route => on affiche la page
    $controller->category();
  }
  else
  {
    // Erreur 404
    http_response_code( 404 );
    exit( "404 Not Found" );
  }