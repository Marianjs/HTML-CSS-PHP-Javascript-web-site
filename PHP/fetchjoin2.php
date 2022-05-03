<?php

            if(isset($_POST['btn_s'])) {
                $Furnizor=$_POST['Furnizor'];
            
            //conectare la baza de date  
             $conn = new mysqli("localhost", "root", "", "pet_shop");
            //verifica conexiunea
            if (mysqli_connect_errno()) {
            exit('Connect failed: '. mysqli_connect_error());
            }


            $sql="SELECT A.DenumireArticol, A.PretArticol from Articole A join Furnizori F on A.IDFurnizor = F.IDFurnizor
            where F.DenumireFurnizor = '$Furnizor'";
            $result=$conn->query($sql);

            if($result->num_rows){
                while($row=$result->fetch_object()) {   
                echo "{$row->DenumireArticol} {$row->PretArticol} lei<br>";   
           }
       }
       else
           {
               echo "No results found";
           }
    }
            $conn->close();
?>