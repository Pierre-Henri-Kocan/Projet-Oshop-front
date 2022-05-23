<?php

  class Type
  {
    //========================================
    // Properties
    //========================================

    private $id;
    private $name;
    private $created_at;
    private $updated_at;

    //========================================
    // Constructeur
    //========================================

    //========================================
    // Methods
    //========================================

    /**
     * Méthode qui retourne un objet Type à partir de son $id en BDD
     * @param int $id 
     * @return self Une instance de Type qui correspond à la marque
     */
    public function find( $id )
    {
      $pdo = Database::getPDO();
      $sql = "SELECT * FROM `type` WHERE `id` = $id";
      $pdoStatement = $pdo->query( $sql ); 
      $typeObject = $pdoStatement->fetchObject( "Type" );
      return $typeObject;
    }
    
    /**
     * Méthode qui retourne tout les objets Type en BDD
     * @return self[] Un tableau d'objets Type
     */
    public function findAll()
    {
      $pdo = Database::getPDO();
      $sql = "SELECT * FROM `type`";
      $pdoStatement = $pdo->query( $sql );
      $typeObjects = $pdoStatement->fetchAll( PDO::FETCH_CLASS, "Type" );
      return $typeObjects;
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