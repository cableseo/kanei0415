 <?php
  session_start();
  header('Content-Type: text/html; charset=utf-8');
  
  $db = new mysqli("54.163.70.215","root","123456","0811member");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>
