<?php 
    $conn = new mysqli("localhost","root","","pet_shop");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	} else {
    $IDFactura = $_POST['idf'] ?? "";
    $DataEmitereFactura = $_POST['dataef'] ?? "";
    $SerieFactura = $_POST['sf'] ?? "";
    $NumarFactura = $_POST['nf'] ?? "";
		$stmt = $conn->prepare("insert into facturi(IDFactura, DataEmitereFactura, SerieFactura, NumarFactura) 
        values(?, ?, ?, ?)");
		$stmt->bind_param("issi", $IDFactura, $DataEmitereFactura, $SerieFactura, $NumarFactura);
		$execval = $stmt->execute();
		echo '<script> window.location = "facturi.php";</script>';
		$stmt->close();
		$conn->close();
	}
 
?>
