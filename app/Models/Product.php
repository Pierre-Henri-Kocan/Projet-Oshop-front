<?php

  namespace App\Models;

use App\Database;
use PDO;

  class Product extends CoreModel
  {
    protected $table = "product";

    //========================================
    // Properties
    //========================================

    private $description;
    private $picture;
    private $price;
    private $rate;
    private $status;

    // Foreign keys
    private $brand_id;
    private $category_id;
    private $type_id;

    //========================================
    // Constructeur
    //========================================

    //========================================
    // Methods
    //========================================

    // Solution 1 : faire des findAllBy pour chaque entité

    /**
     * Méthode qui retourne tout les objets Product en BDD
     * @return self[] Un tableau d'objets Product
     */
    public function findAllByBrand( $brand_id )
    {
      $pdo = Database::getPDO();
      $class_name = get_class( $this );
      $table_name = $this->table;

      // Requête SQL et execution
      $sql = "SELECT * FROM `$table_name` WHERE `brand_id` = $brand_id";
      $pdoStatement = $pdo->query( $sql );      
      
      return $pdoStatement->fetchAll( PDO::FETCH_CLASS, $class_name );
    }
    
    public function findAllByCategory( $category_id )
    {
      $pdo = Database::getPDO();
      $class_name = get_class( $this );
      $table_name = $this->table;

      // Requête SQL et execution
      $sql = "SELECT * FROM `$table_name` WHERE `category_id` = $category_id";
      $pdoStatement = $pdo->query( $sql );      
      
      return $pdoStatement->fetchAll( PDO::FETCH_CLASS, $class_name );
    }
    
    public function findAllByType( $type_id )
    {
      $pdo = Database::getPDO();
      $class_name = get_class( $this );
      $table_name = $this->table;

      // Requête SQL et execution
      $sql = "SELECT * FROM `$table_name` WHERE `type_id` = $type_id";
      $pdoStatement = $pdo->query( $sql );      
      
      return $pdoStatement->fetchAll( PDO::FETCH_CLASS, $class_name );
    }

    // Fin solution 1 ----------------------------------------------------------

    // Solution 2 : Je fais une méthode factorisée avec 
    // un paramètre supplémentaire pour le filtre
    //  ex $productModel->findAllBy( 'brand_id', $url_params['brand_id'] )
    //  ex $productModel->findAllBy( 'name', "pofpof" )
    public function findAllBy( $field, $id )
    {
      $pdo = Database::getPDO();
      $class_name = get_class( $this );
      $table_name = $this->table;

      // Requête SQL et execution
      $sql = "SELECT * FROM `$table_name` WHERE `$field` = $id";
      $pdoStatement = $pdo->query( $sql );      
      
      return $pdoStatement->fetchAll( PDO::FETCH_CLASS, $class_name );
    }

    //========================================
    // Getters & Setters
    //========================================

      /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of rate
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */ 
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

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
     * Get the value of brand_id
     */ 
    public function getBrand_id()
    {
        return $this->brand_id;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    public function findProductByCategory($categoryId){
      $pdo = Database::getPDO();
      $class_name = get_class( $this );
      $table_name = $this->table;

      $sql = "SELECT * FROM `$table_name` WHERE `category_id` = $categoryId";
      $pdoStatement = $pdo->query( $sql );
      $productList = $pdoStatement->fetchAll(PDO::FETCH_CLASS,__CLASS__ );
      return $productList;

      
    }

  }