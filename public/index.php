<?php

  // On inclut l'autochargement des dépendances de Composer
  require_once __DIR__ . '/../vendor/autoload.php';

  // On inclut nos classes 
  require_once __DIR__ . '/../app/Controllers/MainController.php';
  
  //==============================================
  // ROUTER
  //==============================================

  // On instancie notre routeur
  $router = new AltoRouter();

  // On indique au routeur la partie "fixe" de l'URL
  // Pour qu'il soit capable d'isoler la partie "variable"
  $router->setBasePath( $_SERVER['BASE_URI'] );

  // Je "map" mes routes => je les enregistre auprès d'AltoRouter
  //   Param #1 : Méthode utilisée par la route, en S5 : toujours "GET"
  //   Param #2 : URL (uniquement la partie variable) correspondant à la route
  //   Param #3 : Info que l'on pourra récupérer plus tard pour le Dispatcher
  //   Param #4 : Nom unique de la route, par convention : nom du controller + nom de la méthode
  $router->map( "GET", "/", "home", "main-home" );
  $router->map( "GET", "/catalog/category/[i:category_id]", "category", "main-category" );
  // Etc pour chaque route...

  // On demande a AltoRouter de trouver la route qui correspond
  // à l'URL (réécrite) demandée, et on stocke le tout dans $match (un tableau associatif)
  // Ceci remplace les if ... else qu'on utilisait précédemment ;)
  $matchingRouteInfos = $router->match();
  // d( $matchingRouteInfos );

  // A partir de là, j'ai dans $match toutes les infos necessaire
  // à l'affichage de la page qui correspond à l'URL demandée

  //==============================================
  // DISPATCHER
  //==============================================

  // On peut gérer les erreurs 404 facilement grace à AltoRouter
  // Si aucune route ne correspond a l'URL, $matchingRouteInfos vaudra false
  if( $matchingRouteInfos === false )
  {
    // https://www.php.net/manual/fr/function.http-response-code.php
    http_response_code( 404 );
    exit( "404 Not Found" );
  }
  // Sinon, c'est qu'une route existe pour cette URL, on va l'emprunter !

  // Dans ce match, et plus précisément à sa clé "target", je retrouve
  // le 3e paramètre fourni à ->map() lors de la création de la route
  // Ici, il s'agit du nom de la méthode à executer sur MainController
  $methodToCall = $matchingRouteInfos['target'];

  // On instancie notre controller
  $controller = new MainController();

  // d( get_defined_vars() );

  // On appelle la méthode dont le nom se trouve dans $methodToCall sur MainController
  // A l'execution, ça donnera, par exemple $controller->home() ou $controller->category()
  // J'ai besoin dans certaines de ces méthode des "variables" de l'URL
  // Je leur transmet donc en paramètre. Attention, en PHP, on peut transmettre des données
  // MEME si la méthode n'en attends aucune !
  $controller->$methodToCall( $matchingRouteInfos['params'] );