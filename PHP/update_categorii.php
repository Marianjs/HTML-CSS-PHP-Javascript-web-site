<?php
// conectare la baza de date "tests" 
$conn = new mysqli("localhost", "root", "", "pet_shop");

// verifica conexiunea
if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
  }
  

if(isset($_POST['update']))
{
    $IDCategorie = $_POST['idcateg'] ?? "";
    $NumeCategorie = $_POST['numecateg'] ?? "";
    $DescriereCategorie = $_POST['desccateg'] ?? "";

    $query="UPDATE `categorii` SET DescriereCategorie='$_POST[desccateg]' where NumeCategorie='$_POST[numecateg]'";
    $query_run=mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> window.location = "categorii.php";</script>';
    }
    else
    {
        echo 'Error: '. $conn->error;
    }
}
$conn->close();
?>