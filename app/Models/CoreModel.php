<?php

  class CoreModel
  {
    //========================================
    // Properties
    //========================================

    protected $id;
    protected $name;
    protected $created_at;
    protected $updated_at;

    //========================================
    // Constructeur
    //========================================

    //========================================
    // Methods
    //========================================

    /**
     * Méthode qui retourne un objet Brand à partir de son $id en BDD
     * @param int $id 
     * @return self Une instance de Brand qui correspond à la marque
     */
    public function find( $id )
    {
      // J'appelle la méthode getPDO() de la classe Database
      // Oui on ne l'instancie pas, oui le symbole :: est bizarre, on verra ça en S06 ;)
      // Juste a savoir : ça nous retourne l'objet PDO qui représente la connexion BDD
      $pdo = Database::getPDO();

      // Je récupère le nom de la classe actuel (qui hérite de CoreModel)
      // https://www.php.net/manual/fr/function.get-class.php
      $class_name = get_class( $this );

      // Je met le nom de la classe en minuscule pour retrouver le nom de la table
      $table_name = strtolower( $class_name );

      $sql = "SELECT * FROM `$table_name` WHERE `id` = $id";
      $pdoStatement = $pdo->query( $sql );

      // On récupère le tout souf forme de tableau associatif
      // Sauf que, problème, nous on veut un objet Brand !
      // Donc deux solutions :
       
      //--- Solution 1 ---------------------------------------------------
      //   On instancie un nouvel objet Brand qu'on renseigne avec les infos d
      //   du tableau associatif $result qu'on récupère comme d'habitude
      //   On a pour celà créé un constructeur qui va lire les infos du tableau récupéré
      //   depuis la BDD et renseigner chaque propriété qui correspond

      // $result = $pdoStatement->fetch( PDO::FETCH_ASSOC );
      // $brandObject = new Brand( $result );
      // d( $brandObject );
      // return $brandObject;

      //--- Solution 2 ---------------------------------------------------
      //   On demande a PDO de faire automatiquement la solution 1 à notre place !
      //   https://www.php.net/manual/fr/pdostatement.fetchobject.php

      $object = $pdoStatement->fetchObject( $class_name );
      return $object;
    }
    
    /**
     * Méthode qui retourne tout les objets Brand en BDD
     * @return self[] Un tableau d'objets Brand
     */
    public function findAll()
    {
      $pdo = Database::getPDO();

      // Je récupère le nom de la classe actuel (qui hérite de CoreModel)
      // https://www.php.net/manual/fr/function.get-class.php
      $class_name = get_class( $this );

      // Je met le nom de la classe en minuscule pour retrouver le nom de la table
      $table_name = strtolower( $class_name );

      // Requête SQL et execution
      $sql = "SELECT * FROM `$table_name`";
      $pdoStatement = $pdo->query( $sql );      

      // Comme pour la solution 2 de fetch, on peut récupérer directement des
      // objets dans le tableau retourné par PDO
      $objects = $pdoStatement->fetchAll( PDO::FETCH_CLASS, $class_name );
     // d( $objects );
      return $objects;
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