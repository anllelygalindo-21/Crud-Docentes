<?php

include("conexionDOC.php");
$con=conectar();

if(isset($_GET['id_doc'])) {
  $id_doc = $_GET['id_doc'];
  $query = "DELETE FROM docentes WHERE id_doc='$id_doc'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: docentes.php"); 
}

?>