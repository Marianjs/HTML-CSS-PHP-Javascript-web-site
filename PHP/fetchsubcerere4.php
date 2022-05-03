<?php

            if(isset($_POST['btn_s'])) {
                $nfurnizor=$_POST['nfurnizor'];
            
            //conectare la baza de date  
             $conn = new mysqli("localhost", "root", "", "pet_shop");
            //verifica conexiunea
            if (mysqli_connect_errno()) {
            exit('Connect failed: '. mysqli_connect_error());
            }


            $sql="SELECT A.DenumireArticol from Articole A join Furnizori F on A.IDFurnizor = F.IDFurnizor where not exists (select IDArticol from DetaliiComanda where A.IDArticol = IDArticol) 
            and F.DenumireFurnizor = '$nfurnizor'";
            $result=$conn->query($sql);

            if($result->num_rows){
                while($row=$result->fetch_object()) {   
                echo "{$row->DenumireArticol} <br>"; 
           }
       }
       else
           {
               echo "No results found";
           }
    }
            $conn->close();
?>