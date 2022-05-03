<?php 
    $conn = new mysqli("localhost","root","","pet_shop");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	} else {
        $IDArticol= $_POST['idar'] ?? "";
        $IDCategorie = $_POST['idcateg'] ?? "";
        $IDFurnizor = $_POST['idfur'] ?? "";
        $DenumireArticol = $_POST['denar'] ?? "";
        $PretArticol = $_POST['par'] ?? "";
        $NumarBucatiInStoc = $_POST['nrb'] ?? "";
        $DescriereArticol = $_POST['descar'] ?? "";
		$stmt = $conn->prepare("insert into articole(IDArticol, IDCategorie, IDFurnizor, DenumireArticol, PretArticol, NumarBucatiInStoc, DescriereArticol) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("iiisdis", $IDArticol, $IDCategorie, $IDFurnizor, $DenumireArticol, $PretArticol, $NumarBucatiInStoc, $DescriereArticol);
		$execval = $stmt->execute();
		echo '<script> window.location = "articole.php";</script>';
		$stmt->close();
		$conn->close();
	}
 
?>
