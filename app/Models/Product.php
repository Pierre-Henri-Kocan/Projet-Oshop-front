<?php

  class Product
  {
    //========================================
    // Properties
    //========================================

    private $id;
    private $name;
    private $description;
    private $picture;
    private $price;
    private $rate;
    private $status;
    private $created_at;
    private $updated_at;

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

    /**
     * Méthode qui retourne un objet Product à partir de son $id en BDD
     * @param int $id 
     * @return self Une instance de Product qui correspond à la marque
     */
    public function find( $id )
    {
      $pdo = Database::getPDO();
      $sql = "SELECT * FROM `product` WHERE `id` = $id";
      $pdoStatement = $pdo->query( $sql ); 
      $productObject = $pdoStatement->fetchObject( "Product" );
      return $productObject;
    }
    
    /**
     * Méthode qui retourne tout les objets Product en BDD
     * @return self[] Un tableau d'objets Product
     */
    public function findAll()
    {
      $pdo = Database::getPDO();
      $sql = "SELECT * FROM `product`";
      $pdoStatement = $pdo->query( $sql );
      $productObjects = $pdoStatement->fetchAll( PDO::FETCH_CLASS, "Product" );
      return $productObjects;
    }

    //========================================
    // Getters & Setters
    //========================================

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     * @param string $name
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

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
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

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
  }