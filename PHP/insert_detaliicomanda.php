<?php 
    $conn = new mysqli("localhost","root","","pet_shop");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	} else {
    $IDComanda = $_POST['idcom'] ?? "";
    $IDArticol = $_POST['idar'] ?? "";
    $NumarBucatiComandate = $_POST['nr'] ?? "";
		$stmt = $conn->prepare("insert into detaliicomanda(IDComanda, IDArticol, NumarBucatiComandate) 
        values(?, ?, ?)");
		$stmt->bind_param("iii", $IDComanda, $IDArticol, $NumarBucatiComandate);
		$execval = $stmt->execute();
		echo '<script> window.location = "detaliicomanda.php";</script>';
		$stmt->close();
		$conn->close();
	}
 
?>
