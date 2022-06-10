<?php
  include_once __DIR__ . "/database.php";
  $database_json = json_encode($database);
  header("content-Type: application/json");
  echo $database_json;
?>