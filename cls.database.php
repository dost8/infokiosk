<?php
  /**
   *
   */
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
    }

    function insertSingleRow(array $data, $table){
      $colArr = [];
      $valArr = [];
      foreach($data as $key => $value){
        array_push($colArr, $key);
        array_push($valArr, $value);
      }
      $colArr = implode(',', array_map('strval', $colArr));
      $valArr = implode(',', $valArr);
      var_dump($colArr);
    #  $this->db->query("INSERT INTO $table ($colArr) VALUES ($valArr) ");
      echo $this->db->error;
    }
  }

 ?>
