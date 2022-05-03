<?php
$conn = new mysqli("localhost", "root", "", "pet_shop");

// verifica conexiunea
if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
  }
  

if(isset($_POST['update']))
{
    $IDComanda = $_POST['idcom'] ?? "";
    $IDClient = $_POST['idclient'] ?? "";
    $IDFactura = $_POST['idf'] ?? "";
    $DataComanda = $_POST['datac'] ?? "";
    $ModalitateComanda = $_POST['mc'] ?? "";
    $ModalitatePlataComanda = $_POST['mpc'] ?? "";

    $query="UPDATE `comenzi` SET ModalitateComanda='$_POST[mc]', ModalitatePlataComanda='$_POST[mpc]' where DataComanda='$_POST[datac]'";
    $query_run=mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> window.location = "comenzi.php";</script>';
    }
    else
    {
        echo 'Error: '. $conn->error;
    }
}
$conn->close();
?>