<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM actas WHERE id = $id";
  $result = mysqli_query($conn, $query);
  
  while($row = mysqli_fetch_array($result)){
    $img = $row['img_dir'];
  }
  unlink($img);

  mysqli_query($conn, "DELETE FROM actas WHERE id=$id");

  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>

