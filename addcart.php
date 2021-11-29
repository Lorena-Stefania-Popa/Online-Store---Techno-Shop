<?php
	session_start();
  $id = $_GET['id'];
  $nume = $_GET['nume'];
  $pret = $_GET['pret'];
  $cantitate = $_GET['cantitate'];
	$categorie = $_GET['categorie'];
	//$imagine = $_GET['imagine'];
	//echo $imagine;

  $conn = mysqli_connect("localhost");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  mysqli_select_db($conn, "Techno1")
      or die("Selectare baza date esuata:".mysqli_error($conn)."<br>\n");
  $insert = "INSERT INTO comenzi (Id, Nume, Pret, Cantitate, Categorie) values ('$id', '$nume', '$pret', '$cantitate', '$categorie')";
  (mysqli_query($conn, $insert))
      or die("Cerere SQL esuata: ".mysqli_error($conn)."<br>\n");

  header("Location: cart.php");
  exit;
?>
