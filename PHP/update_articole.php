<?php
$conn = new mysqli("localhost", "root", "", "pet_shop");

// verifica conexiunea
if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
  }
  

if(isset($_POST['update']))
{
    $IDArticol= $_POST['idar'] ?? "";
    $IDCategorie = $_POST['idcateg'] ?? "";
    $IDFurnizor = $_POST['idfur'] ?? "";
    $DenumireArticol = $_POST['denar'] ?? "";
    $PretArticol = $_POST['par'] ?? "";
    $NumarBucatiInStoc = $_POST['nrb'] ?? "";
    $DescriereArticol = $_POST['descar'] ?? "";

    $query="UPDATE `articole` SET PretArticol='$_POST[par]', NumarBucatiInStoc='$_POST[nrb]', DescriereArticol='$_POST[descar]' where DenumireArticol='$_POST[denar]'";
    $query_run=mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> window.location = "articole.php";</script>';
    }
    else
    {
        echo 'Error: '. $conn->error;
    }
}
$conn->close();
?>