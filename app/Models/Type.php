<?php

  namespace App\Models;

use App\Database;
use PDO;

  class Type extends CoreModel
  {
    protected $table = "type";

    //========================================
    // Rien ici, on hérite tout de CoreModel :p
    //========================================

    /**
     * Méthode qui retourne les noms des types avec leurs ID
     * @return self[] Un tableau
     */
    public function findAllByName()
    {
      $pdo = Database::getPDO();

      // Je récupère le nom de la classe actuel (qui hérite de CoreModel)
      // https://www.php.net/manual/fr/function.get-class.php
      $class_name = get_class( $this );

      // Je met le nom de la classe en minuscule pour retrouver le nom de la table
      // EDIT : ça ne fonctionne plus a cause du namespace !
      // $table_name = strtolower( $class_name );

      // On va donc préférer, pour l'instant, récupérer la valeur d'une propriété
      // qui sera différente dans chaque model et qui stockera le nom de la table
      $table_name = $this->table;

      // Requête SQL et execution
      $sql = "SELECT `id`, `name` FROM `$table_name` ORDER BY `name` ASC";
      $pdoStatement = $pdo->query( $sql );      

      // Comme pour la solution 2 de fetch, on peut récupérer directement des
      // objets dans le tableau retourné par PDO
      $typeListByName = $pdoStatement->fetchAll( PDO::FETCH_KEY_PAIR);
      return $typeListByName;
    }
  }