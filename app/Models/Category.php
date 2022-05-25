<?php

  namespace App\Models;

  use App\Database;
  use PDO;

  class Category extends CoreModel
  {
    protected $table = "category";

    //========================================
    // Properties
    //========================================

    protected $subtitle;
    protected $picture;
    protected $home_order;

  

    //========================================
    // Constructeur
    //========================================

    //========================================
    // Methods
    //========================================

    /**
     * Méthode pour récupérer les Category de la page d'accueil
     * @return self[] Un tableau d'objets Category
    */ 
    public function findForHome()
    {
      $pdo = Database::getPDO();
      $class_name = get_class( $this );
      $table_name = $this->table;

      // Requête SQL et execution
      $sql = "SELECT * FROM `$table_name` WHERE `home_order` > 0 ORDER BY `home_order` LIMIT 5";
      $pdoStatement = $pdo->query( $sql );      

      return $pdoStatement->fetchAll( PDO::FETCH_CLASS, $class_name );
    }

    //========================================
    // Getters & Setters
    //========================================
    
    /**
    * Get the value of subtitle
    */ 
    public function getSubtitle()
    {
      return $this->subtitle;
    }

    /**
    * Set the value of subtitle
    *
    * @return  self
    */ 
    public function setSubtitle($subtitle)
    {
      $this->subtitle = $subtitle;
      return $this;
    }

    /**
    * Get the value of picture
    */ 
    public function getPicture()
    {
      return $this->picture;
    }

    /**
    * Set the value of picture
    *
    * @return  self
    */ 
    public function setPicture($picture)
    {
      $this->picture = $picture;
      return $this;
    }

    /**
    * Get the value of home_order
    */ 
    public function getHome_order()
    {
      return $this->home_order;
    }

    /**
    * Set the value of home_order
    *
    * @return  self
    */ 
    public function setHome_order($home_order)
    {
      $this->home_order = $home_order;
      return $this;
    }


  }