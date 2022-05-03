<?php 
    $conn = new mysqli("localhost","root","","pet_shop");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
    $IDClient = $_POST['idc'] ?? "";
    $NumeClient = $_POST['numec'] ?? "";
    $PrenumeClient = $_POST['prenumec'] ?? "";
    $LocalitateClient = $_POST['lc'] ?? "";
    $StradaClient = $_POST['sc'] ?? "";
    $BlocClient = $_POST['bc'] ?? "";
    $EtajClient = $_POST['ec'] ?? "";
    $ApartamentClient = $_POST['ac'] ?? "";
    $TelefonClient = $_POST['tc'] ?? "";
    $EmailClient = $_POST['emc'] ?? "";
    $CodPostalClient = $_POST['cpc'] ?? "";
		$stmt = $conn->prepare("insert into clienti(IDClient, NumeClient, PrenumeClient, LocalitateClient, StradaClient, 
        BlocClient, EtajClient, ApartamentClient, TelefonClient, EmailClient, CodPostalClient) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isssssiisss", $IDClient, $NumeClient, $PrenumeClient, $LocalitateClient, $StradaClient, $BlocClient, $EtajClient,
    $ApartamentClient, $TelefonClient, $EmailClient, $CodPostalClient);
		$execval = $stmt->execute();
    echo '<script> window.location = "clienti.php";</script>';
		$stmt->close();
		$conn->close();
	}
?>

