<?php
  require_once __DIR__ . "/database.php";
  if(empty($genre = $_GET["genre"])) {
    $database_json = json_encode($database);
  } else {
    $genre = $_GET["genre"];
    $selected_discs = [];
    foreach ($database as $item) {
      if ($item["genre"] === $genre) {
        $selected_discs[] = $item;
      }
    }
    $database_json = json_encode($selected_discs);
  };
  
  header("content-Type: application/json");
  echo $database_json;
?>