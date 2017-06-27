<?php

  class Database
  {
    public $db;
    function __construct()
    {
      $this->db = new mysqli('localhost:3306', 'root', '', 'info_kiosk');
      if (mysqli_connect_errno()) {
        echo "
          <script type='text/javascript'>
            alert('Cannot establish connection to database.');
          </script>
        ";
        exit;
      }

      $inet_conn = $this->is_connected();
    }

    function is_connected(){
      $connected = @fsockopen('https://google.com',80);
      if($connected){
        $is_conn = true;
        fclose($connected);
      }else{
        $is_conn = false;
      }
      return $is_conn;
    }

    function insertSingleRow(array $data, $table){
      $query = "INSERT INTO ".$table." SET";
      $dataCount = count($data);
      $i = 1;
      foreach($data as $key => $value){
        $comma = ($i < $dataCount ? ',' : '');
        $query .= ' '.$key.' = '.'"'.$value.'"'.$comma;
        $i++;
      }
      $this->db->query($query);
      echo $this->db->error;
    }
  }

 ?>
