<?php
  $id = $_GET['id'];
	$cantitate = $_GET['cantitate'];

  $conn = mysqli_connect("localhost","root","");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  mysqli_select_db($conn, "Techno1")
      or die("Selectare baza date esuata:".mysqli_error($conn)."<br>\n");
  $delete = "DELETE FROM comenzi WHERE id='$id' AND cantitate='$cantitate'";
  (mysqli_query($conn, $delete))
      or die("Cerere SQL esuata: ".mysqli_error($conn)."<br>\n");

  header("Location: cart.php");
  exit;
?>
