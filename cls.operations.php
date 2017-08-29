<?php
ini_set('max_execution_time',0);
  class Operations
  {
    public $db;
    public $lgu;
    function __construct(){
      $this->lgu = 'Abuyog';
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

    function db2_conn(){
      $conn = new mysqli('db4free.net:3306/dostinfokiosk','dostinfokiosk','#SjFk8#oStxgZpYThNdP','dostinfokiosk');
      return $conn;
    }

    function cloud_backup(){
      $connected = @fsockopen('www.db4free.net', 80, $error);

      if($connected){
        $db2 = $this->db2_conn();
        $last_backup = $this->selectData('backup',['backup_date'],1,true);

        // $query =  $db2->query("SELECT * FROM feedbacks");
        // while ($result = $query->fetch_assoc()) {
        //   print_r($result);
        //   echo "</br>";
        // }

      #  $db2->query("ALTER TABLE feedbacks DROP COLUMN type");
      #  die();

        if(strcmp($last_backup['backup_date'], date('Y-m-d')) < 0){
          $feedbacks = $this->selectData('feedback',['chartRate','nob','d_services','d_services_text','comment', 'date'], 'date >= "'.$last_backup['backup_date'].'"');
          // Data to be passed to online DB. YEAH !!!!
          $values = [];
          $columns = [];

          $query = "INSERT INTO feedbacks (chartRate, nob, d_services, d_services_text, comment, date, lgu) VALUES ";
          $i = 1;
          foreach($feedbacks as $record){
            $date = date('Y-m-d', strtotime($record["date"]));
            $query .= " ('".$record["chartRate"]."', '".$record["nob"]."', '".$record["d_services"]."', '".$record["d_services_text"]."', '".$record["comment"]."', '".$date."','".$this->lgu."')";

            if($i < count($feedbacks))
              $query .= ',';

            $i++;
          }
          $db2->query($query);
          echo $db2->error;

          $this->insertSingleRow('backup', ['backup_date'=>date('Y-m-d')]);
        }
      }
     return false;
    }

    function cloud_backup_force(){
      $result = $this->selectData('backup', ['backup_date'], 1, true);
      if(strcmp($result['backup_date'], date('Y-m-d')) <= 1792 ){
        $this->cloud_backup();
        echo "true";
      }
    }

    /**
    * @param string $table the table that will be used for the query
    * @param arrary $data supply the fields to be used for the query
    */
    function insertSingleRow(string $table, array $data, $db2 = false){
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


    function selectData(string $table, array $data, $where = 1, $limit = false, $db2 = false){
      $query = "SELECT";
      $i = 1;
      $dataCount = count($data);
      foreach($data as  $value){
        $comma = ($i < $dataCount ? ',' : '');
        $query .= ' '.$value.$comma;
        $i++;
      }
      $query .= " FROM ".$table;
      $query .= " WHERE ".$where;
      $query = $this->db->query($query);

      $data = [];
      $limit_result = null;
      while($result = $query->fetch_assoc()){
        array_push($data, $result);
        $limit_result= $result;
      }
      echo $this->db->error;

      if($limit)
        return $limit_result;

      return $data;
    }

    function selectQuery(string $query, $db2 = false){
      $db_conn = $this->db;
      if($db2){
        $db_conn = $this->db2_conn();
      }

      $data = [];
      $query = $db_conn->query($query);
      echo $this->db->error;
      while($result = $query->fetch_assoc()){
        array_push($data, $result);
      }

      return $data;
    }

    function sendEmail($text, $subject, $email_address, $file_location = '', $file_name = ''){
      require 'PHPMailer/PHPMailerAutoload.php';

      $mail = new PHPMailer;
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'dost8.infokiosk@gmail.com';                 // SMTP username
      $mail->Password = 'Gc.68>xC{h}_dQ_N';                           // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465;                                    // TCP port to connect to

      $mail->setFrom('dost8.infokiosk@gmail.com', 'DOST8 Information Kiosk');
      $mail->addAddress($email_address);     // Add a recipient
      #$mail->addAddress('ellen@example.com');               // Name is optional
      #$mail->addReplyTo('info@example.com', 'Information');
      #$mail->addCC('cc@example.com');
      #$mail->addBCC('bcc@example.com');
      if($file_location != '')
        $mail->addAttachment($file_location, $file_name);  // Add attachments

      $mail->isHTML(true);                                  // Set email format to HTML

      $mail->Subject = $subject;
      $mail->Body    = $text;

      if(!$mail->send()){
        return true;
      }else{
        return false;
      }
    }

    function execBatchFile($file){
      // Download updates from repository online repositoryls
      $array = [];
      exec($file, $array);
      $output = null;
      foreach($array as $list){
        $output .= $list."<br>";
      }
      return $output;
    }
  }

 ?>
