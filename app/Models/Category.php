<?php

  class Category
  {
    //========================================
    // Properties
    //========================================

    private $id;
    private $name;
    private $subtitle;
    private $picture;
    private $home_order;
    private $created_at;
    private $updated_at;

    //========================================
    // Constructeur
    //========================================

    //========================================
    // Methods
    //========================================

    /**
     * Méthode qui retourne un objet Category à partir de son $id en BDD
     * @param int $id 
     * @return self Une instance de Category qui correspond à la marque
     */
    public function find( $id )
    {
      $pdo = Database::getPDO();
      $sql = "SELECT * FROM `category` WHERE `id` = $id";
      $pdoStatement = $pdo->query( $sql ); 
      $categoryObject = $pdoStatement->fetchObject( "Category" );
      return $categoryObject;
    }
    
    /**
     * Méthode qui retourne tout les objets Category en BDD
     * @return self[] Un tableau d'objets Category
     */
    public function findAll()
    {
      $pdo = Database::getPDO();
      $sql = "SELECT * FROM `category`";
      $pdoStatement = $pdo->query( $sql );
      $categoryObjects = $pdoStatement->fetchAll( PDO::FETCH_CLASS, "Category" );
      return $categoryObjects;
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
    }    /**
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
  }