<?php
/**
* Category Class
*/
class Category
{

  // ACTIVE RECORD CODE TO KEEP EVERY CLASS KNOLWEDGE WITH DB
  static protected $database;

  static public function set_database($database) {
    self::$database = $database;
  }

  public function find_by_sql($sql)
  {
    /*You should always use prepared statement to avoid SQL Injection*/
    $stmt = self::$database->prepare($sql);
    $stmt->execute();

    $result = $stmt->get_result();

    if(!$result) {
      exit("Database query failed.");
    }
    while ($record = $result->fetch_assoc()) {
      $cat_array[] =  self::instantiate($record);
    }
    return $cat_array;
  }


  public function create()
  {
    $sql  ="INSERT INTO Category(" ;
    $sql .="name, photo";
    $sql .=" ) VALUES ( ";
    $sql .=" ? , ? ";
    $sql .=");";

        /*You should always use prepared statement to avoid SQL Injection*/
        $stmt = self::$database->prepare($sql);
        $stmt->bind_param("ss", $this->name, $this->photo);

        $result = $stmt->execute();
        if($result){
          $this->id = self::$database->insert_id;
        }
        return $result;
      }

      public function update()
      {
        //print_r($this);
        $sql  ="UPDATE Category SET " ;
        $sql .=" name = '" . $this->name ."',";
        $sql .=" photo ='" . $this->photo ."'";
        $sql .=" WHERE ";
        $sql .="id = ? ;";

        $stmt = self::$database->prepare($sql);

        $stmt->bind_param("i",$this->id);
        $result = $stmt->execute();

        if($result){
          $this->id = self::$database->insert_id;
        }else {
          echo "Can't update record " . self::$database->error ;
        }
        return $result;
      }

      public function delete()
      {
        //print_r($this);
        $sql  ="DELETE FROM Category" ;
        $sql .=" WHERE ";
        $sql .="id = ? ;";

        $stmt = self::$database->prepare($sql);

        $stmt->bind_param("i",$this->id);
        $result = $stmt->execute();

        if($result){
          $this->id = self::$database->insert_id;
        }else {
          echo "Can't update record " . self::$database->error ;
        }
        return $result;
      }
      public function find_all(){
        $sql = "Select * from category;";
        $cat_array = self::find_by_sql($sql);

        return $cat_array;
      }
      public function find_by_id($id)  {
        $cat_array = [];
        $sql = "SELECT * FROM category WHERE id = ?";
        $stmt = self::$database->prepare($sql);

        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($record = $result->fetch_assoc()) {
          $cat_array[] =  self::instantiate($record);
        }
        //array_shift Removes the first element from an array, and return it
        return array_shift($cat_array);
      }

      public function instantiate($value)  {
        $obj = new self();
        $obj->id = $value ['id'];
        $obj->name = $value ['name'];
        $obj->photo = $value ['photo'];

        return $obj;
      }

      public function instantiate_auto($record)  {
        $obj = new self();

        foreach ($record as $property => $value) {
          if (property_exists($obj,$property)) {
            $obj->$property = $value;
          }
        }

        return $obj;
      }

// ----- END OF ACTIVE RECORD CODE ------
      private $id;
      private $name;
      private $photo;

      public function getId(){
        return $this->id;
      }
      public function setId($id){
        $this->id = $id;
      }
      public function getName(){
        return $this->name;
      }
      public function setName($name){
        $this->name = $name;
      }
      public function getPhoto(){
        return $this->photo;
      }
      public function setPhoto($photo){
        $this->photo = $photo;
      }
      public function __construct($args=[]){
        $this->id = $args['id'] ?? '';
        $this->name = $args['name'] ?? '';
        $this->photo = $args['photo'] ?? '';
      }
    }
    ?>
