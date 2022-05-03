<?php 
    $conn = new mysqli("localhost","root","","pet_shop");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	} else {
    $IDFurnizor = $_POST['idfrn'] ?? "";
    $DenumireFurnizor = $_POST['denfrn'] ?? "";
    $TaraFurnizor = $_POST['tarafrn'] ?? "";
    $LocalitateFurnizor= $_POST['locfrn'] ?? "";
    $StradaFurnizor= $_POST['sfrn'] ?? "";
    $TelefonFurnizor= $_POST['tfrn'] ?? "";
		$stmt = $conn->prepare("insert into furnizori(IDFurnizor, DenumireFurnizor, TaraFurnizor, LocalitateFurnizor, StradaFurnizor, TelefonFurnizor) 
        values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isssss", $IDFurnizor, $DenumireFurnizor, $TaraFurnizor, $LocalitateFurnizor, $StradaFurnizor, $TelefonFurnizor);
		$execval = $stmt->execute();
		echo '<script> window.location = "furnizori.php";</script>';
		$stmt->close();
		$conn->close();
	}
?>
