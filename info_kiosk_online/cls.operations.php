<?php
  class operations{
    public $db;
    function __construct(){
      $this->db = new mysqli('db4free.net:3306/dostinfokiosk','dostinfokiosk','#SjFk8#oStxgZpYThNdP','dostinfokiosk');
      if(mysqli_connect_errno()){
        echo "cannot connect";
        die;
      }
    }

    function selectQuery(string $query){
      $query = $this->db->query($query);
      $data = [];echo $this->db->error;
      while($result = $query->fetch_assoc()){
        array_push($data, $result);
      }
      echo $this->db->error;
      return $data;
    }
  }
 ?>
