<?php 
    
    $conn = new mysqli("localhost","root","","pet_shop");
	if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);

	} else {
        $IDCategorie = $_POST['idcateg'] ?? "";
    	$NumeCategorie = $_POST['numecateg'] ?? "";
    	$DescriereCategorie = $_POST['desccateg'] ?? "";
		$stmt = $conn->prepare("insert into categorii(IDCategorie, NumeCategorie, DescriereCategorie) values(?, ?, ?)");
		$stmt->bind_param("iss", $IDCategorie, $NumeCategorie, $DescriereCategorie);
		$execval = $stmt->execute();
		echo '<script> window.location = "categorii.php";</script>';
		$stmt->close();
		$conn->close();
	}
 
?>

