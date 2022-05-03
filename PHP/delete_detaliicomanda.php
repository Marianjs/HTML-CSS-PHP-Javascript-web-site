<?php
// conectare la baza de date "tests" 
$conn = new mysqli("localhost", "root", "", "pet_shop");

// verifica conexiunea
if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
  }
  

if(isset($_POST['delete']))
{
    $IDComanda = $_POST['idcom'] ?? "";
    $IDArticol = $_POST['idar'] ?? "";
    $NumarBucatiComandate = $_POST['nr'] ?? "";

    $query="DELETE from `detaliicomanda` where NumarBucatiComandate='$_POST[nr]'";
    $query_run=mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> window.location = "detaliicomanda.php";</script>';
    }
    else
    {
        echo 'Error: '. $conn->error;
    }
}
$conn->close();
?>