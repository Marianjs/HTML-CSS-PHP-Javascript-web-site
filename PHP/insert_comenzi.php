<?php 
    $conn = new mysqli("localhost","root","","pet_shop");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	} else {
    $IDComanda = $_POST['idcom'] ?? "";
    $IDClient = $_POST['idclient'] ?? "";
    $IDFactura = $_POST['idf'] ?? "";
    $DataComanda = $_POST['datac'] ?? "";
    $ModalitateComanda = $_POST['mc'] ?? "";
    $ModalitatePlataComanda = $_POST['mpc'] ?? "";
		$stmt = $conn->prepare("insert into comenzi(IDComanda, IDClient, IDFactura, DataComanda, ModalitateComanda, ModalitatePlataComanda) 
        values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("iiisss", $IDComanda, $IDClient, $IDFactura, $DataComanda, $ModalitateComanda, $ModalitatePlataComanda);
		$execval = $stmt->execute();
		echo '<script> window.location = "comenzi.php";</script>';
		$stmt->close();
		$conn->close();
	}
?>
