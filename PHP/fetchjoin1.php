<?php

            if(isset($_POST['btn_s'])) {
                $Data=$_POST['Data'];
            
            //conectare la baza de date  
             $conn = new mysqli("localhost", "root", "", "pet_shop");
            //verifica conexiunea
            if (mysqli_connect_errno()) {
            exit('Connect failed: '. mysqli_connect_error());
            }


            $sql="SELECT DISTINCT C.NumeClient, C.PrenumeClient from Clienti C join Comenzi C1 on C.IDClient = C1.IDClient
            where C1.DataComanda = '$Data'";
            $result=$conn->query($sql);

            if($result->num_rows){
                while($row=$result->fetch_object()) {   
                echo "{$row->NumeClient} {$row->PrenumeClient} <br>"; 
           }
       }
       else
           {
               echo "No results found";
           }
    }
            $conn->close();
?>