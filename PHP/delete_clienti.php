<?php 
$conn = new mysqli("localhost", "root", "", "pet_shop");

// verifica conexiunea
if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
  }
  

if(isset($_POST['delete']))
{
    $TelefonClient = $_POST['TelefonClient'] ?? "";

    $query="DELETE from `clienti` where TelefonClient='$_POST[tclient]'";
    $query_run=mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> window.location = "clienti.php";</script>';
    }
    else
    {
        echo 'Error: '. $conn->error;
    }
}
$conn->close();
?>