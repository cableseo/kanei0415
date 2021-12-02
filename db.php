<?php
  session_start();
  header('Content-Type: text/html; charset=utf-8');

  $db = new mysqli("54.163.70.215","root","123456","test");
  $db->set_charset("utf-8");

  function query($query){
    global $db;
    return $db->query($query);
  }



 ?>
