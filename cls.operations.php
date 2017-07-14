<?php

  class Operations
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

      if($this->is_connected()){
    #    var_dump($this->selectSingleData('backup', ['backup_date']));
      #  $db2 = new mysqli('db4free.net:3306/dostinfokiosk', 'dostinfokiosk', '#SjFk8#oStxgZpYThNdP', 'dostinfokiosk');
      }
    }

    function is_connected(){
      $connected = @fsockopen('www.db4free.net', 80, $error);
      return ($connected ? true : false);
    }

    function insertSingleRow(string $table, array $data){
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

    function selectSingleData(string $table, array $data, $where = 1){
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
      $result = $this->db->query($query);
      echo $this->db->error;
      return $result;
    }

    function sendEmail($text, $subject, $email_address, $file_location = '', $file_name = ''){
      ini_set('max_execution_time',0);
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
  }

 ?>
