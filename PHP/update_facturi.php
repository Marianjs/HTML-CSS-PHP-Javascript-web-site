<?php
$conn = new mysqli("localhost", "root", "", "pet_shop");

// verifica conexiunea
if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
  }
  

if(isset($_POST['update']))
{
    $IDFactura = $_POST['idf'] ?? "";
    $DataEmitereFactura = $_POST['dataef'] ?? "";
    $SerieFactura = $_POST['sf'] ?? "";
    $NumarFactura = $_POST['nf'] ?? "";

    $query="UPDATE `facturi` SET DataEmitereFactura='$_POST[dataef]', NumarFactura='$_POST[nf]' where SerieFactura='$_POST[sf]'";
    $query_run=mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> window.location = "facturi.php";</script>';
    }
    else
    {
        echo 'Error: '. $conn->error;
    }
}
$conn->close();
?>