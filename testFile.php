<?php
// $hello = shell_exec("git clone https://github.com/jeffreyquilaquil/tech4ed");
// $hulala = 'hulala';

$result = array();
exec("git clone https://github.com/jeffreyquilaquil/tech4ed", $result);
foreach($result as $line){
  print($line."\n");
}
?>
