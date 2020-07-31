<?php
include("db.php");

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM actas WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $img= $row['img_dir'];
  }
}


?>

<img src="<?php echo $row["img_dir"]; ?>"  class="img-thumbnail" />