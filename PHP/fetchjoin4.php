<?php

            if(isset($_POST['btn_s'])) {
                $Categorie=$_POST['Categorie'];

            //conectare la baza de date  
             $conn = new mysqli("localhost", "root", "", "pet_shop");
            //verifica conexiunea
            if (mysqli_connect_errno()) {
            exit('Connect failed: '. mysqli_connect_error());
            }


            $sql="SELECT distinct NumeClient, C.PrenumeClient from Clienti C join Comenzi C1 on C.IDClient = C1.IDClient
            join DetaliiComanda DC on C1.IDComanda = DC.IDComanda
            join Articole A on DC.IDArticol = A.IDArticol
            join Categorii C2 on A.IDCategorie = C2.IDCategorie
            where NumeCategorie = '$Categorie'";
            $result=$conn->query($sql);

            if($result->num_rows){
                while($row=$result->fetch_object()) {   
                echo "{$row->NumeClient} {$row->PrenumeClient}<br>";   
           }
       }
       else
           {
               echo "No results found";
           }
    }
            $conn->close();
?>