<?php
$conn = new mysqli("localhost", "root", "", "pet_shop");

// verifica conexiunea
if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
  }
  

if(isset($_POST['update']))
{
    $TelefonClient=$_POST['tclient'] ?? "";

    $query="UPDATE `clienti` SET NumeClient = '$_POST[nclient]',PrenumeClient='$_POST[pclient]',LocalitateClient='$_POST[lclient]',StradaClient='$_POST[sclient]',
    BlocClient='$_POST[bclient]',EtajClient='$_POST[eclient]',ApartamentClient='$_POST[aclient]',EmailClient='$_POST[emclient]',
    CodPostalClient='$_POST[cpclient]' where TelefonClient='$_POST[tclient]'";
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