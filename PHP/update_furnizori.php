<?php
// conectare la baza de date "tests" 
$conn = new mysqli("localhost", "root", "", "pet_shop");

// verifica conexiunea
if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
  }
  

if(isset($_POST['update']))
{
    $IDFurnizor = $_POST['idfrn'] ?? "";
    $DenumireFurnizor = $_POST['denfrn'] ?? "";
    $TaraFurnizor = $_POST['tarafrn'] ?? "";
    $LocalitateFurnizor= $_POST['locfrn'] ?? "";
    $StradaFurnizor= $_POST['sfrn'] ?? "";
    $TelefonFurnizor= $_POST['tfrn'] ?? "";

    $query="UPDATE `furnizori` SET TaraFurnizor='$_POST[tarafrn]', LocalitateFurnizor='$_POST[locfrn]', 
    StradaFurnizor='$_POST[sfrn]', TelefonFurnizor='$_POST[tfrn]' where DenumireFurnizor='$_POST[denfrn]'";
    $query_run=mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> window.location = "furnizori.php";</script>';
    }
    else
    {
        echo 'Error: '. $conn->error;
    }
}
$conn->close();
?>