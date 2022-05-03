<?php

            if(isset($_POST['btn_s'])) {
                $pret=$_POST['pret'];
            
            //conectare la baza de date  
             $conn = new mysqli("localhost", "root", "", "pet_shop");
            //verifica conexiunea
            if (mysqli_connect_errno()) {
            exit('Connect failed: '. mysqli_connect_error());
            }


            $sql="SELECT A.DenumireArticol from Articole A join Categorii C on A.IDCategorie = C.IDCategorie where '$pret' < ANY (select B.PretArticol
            from Articole B where B.IDCategorie = C.IDCategorie)";
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