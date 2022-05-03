<?php

            if(isset($_POST['btn_s'])) {
                $categ=$_POST['categ'];
            
            //conectare la baza de date  
             $conn = new mysqli("localhost", "root", "", "pet_shop");
            //verifica conexiunea
            if (mysqli_connect_errno()) {
            exit('Connect failed: '. mysqli_connect_error());
            }


            $sql="SELECT A.DenumireArticol, A.PretArticol from Articole A where 
            A.PretArticol > ALL (select B.PretArticol from Articole B join Categorii C on B.IDCategorie = C.IDCategorie where C.NumeCategorie='$categ')";
            $result=$conn->query($sql);

            if($result->num_rows){
                while($row=$result->fetch_object()) {   
                echo "{$row->DenumireArticol} {$row->PretArticol} <br>"; 
           }
       }
       else
           {
               echo "No results found";
           }
    }
            $conn->close();
?>