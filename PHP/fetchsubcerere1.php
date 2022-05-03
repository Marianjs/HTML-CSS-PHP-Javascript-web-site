<?php

            if(isset($_POST['btn_s'])) {
                $localitate=$_POST['localitate'];
            
            //conectare la baza de date  
             $conn = new mysqli("localhost", "root", "", "pet_shop");
            //verifica conexiunea
            if (mysqli_connect_errno()) {
            exit('Connect failed: '. mysqli_connect_error());
            }


            $sql="SELECT C.NumeClient, C.PrenumeClient, (select max(C1.DataComanda) from Comenzi C1 where C.IDClient=C1.IDClient) as DataComanda from Clienti C 
            where C.LocalitateClient = '$localitate'";
            $result=$conn->query($sql);

            if($result->num_rows){
                while($row=$result->fetch_object()) {   
                echo "{$row->NumeClient} {$row->PrenumeClient} {$row->DataComanda} <br>"; 
           }
       }
       else
           {
               echo "No results found";
           }
    }
            $conn->close();
?>