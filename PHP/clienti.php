<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> <!--imagini iconite meniu-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--fontul folosit-->
    <link rel="stylesheet" href="clienti_styles.css"> <!--CSS styles-->
    <script src="login.js"></script> <!--cod JavaScript pentru validare nume si parola-->
   
    <title>Clienti</title>
</head>
<body>
    <div class="sidebar"> <!--meniul-->
        <div class="logo_content"> <!--logo-->
            <div class="logo">
                <i class='bx bxs-dog'></i>
                <div class="logo_name">PetShop</div>
            </div>
            <i class='bx bx-menu' id = "btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="main.html">
                    <i class='bx bx-home' id="acasa"></i> <!--acasa-->
                    <span class="links_name">Acasa</span>
                </a>
                <span class="tooltip">Acasa</span>
            </li>
            <li>
                <a href="clienti.php">
                    <i class="fa fa-user"></i> <!--clienti icon-->
                    <span class="links_name">Clienti</span>
                </a>
                <span class="tooltip">Clienti</span>
            </li>
            <li>
                <a href="comenzi.php">
                    <i class="fa fa-bar-chart"></i> <!--comenzi icon-->
                    <span class="links_name">Comenzi</span>
                </a>
                <span class="tooltip">Comenzi</span>
            </li>
            <li>
                <a href="detaliicomanda.php">
                    <i class='bx bxs-user-detail'></i> <!--detaliicomanda icon-->
                    <span class="links_name">DetaliiComanda</span>
                </a>
                <span class="tooltip">DetaliiComanda</span>
            </li>
            <li>
                <a href="categorii.php">
                    <i class='bx bx-category'></i> <!--categorii icon-->
                    <span class="links_name">Categorii</span>
                </a>
                <span class="tooltip">Categorii</span>
            </li>
            <li>
                <a href="articole.php">
                    <i class='bx bx-shopping-bag'></i> <!--articole icon-->
                    <span class="links_name">Articole</span>
                </a>
                <span class="tooltip">Articole</span>
            </li>
            <li>
                <a href="facturi.php">
                    <i class='bx bx-detail' ></i> <!--facturi icon-->
                    <span class="links_name">Facturi</span>
                </a>
                <span class="tooltip">Facturi</span>
            </li>
            <li>
                <a href="furnizori.php">
                    <i class="fa fa-industry"></i> <!--furnizori icon-->
                    <span class="links_name">Furnizori</span>
                </a>
                <span class="tooltip">Furnizori</span>
            </li>
            <li>
                <a href="informatii.php">
                    <i class="fa fa-info-circle"></i> <!--join si subcereri icon-->
                    <span class="links_name">Informatii</span>
                </a>
                <span class="tooltip">Informatii</span>
            </li>
        </ul>
    </div>
    <div class="number">
        <div class="text">Total inregistrari: 
            <?php
                 //conectare la baza de date  
             $conn = mysqli_connect("localhost", "root", "", "pet_shop");
             //verifica conexiunea
             if (mysqli_connect_errno()) {
             exit('Connect failed: '. mysqli_connect_error());
             }
             
             $sql = "SELECT count(IDClient) as total from clienti";
             $result = mysqli_query($conn, $sql);
             $values = mysqli_fetch_assoc($result);
             $num_rows = $values['total'];
             echo $num_rows;

            ?>
        </div>
    </div> <!-- numar inregistrari tabela-->
    <div class="content">
   <table>
       <thead>
        <tr>
            <th>Nume</th>
            <th>Prenume</th>
            <th>Localitate</th>
            <th>Strada</th>
            <th>Bloc</th>
            <th>Etaj</th>
            <th>Apartament</th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Cod postal</th>
        </tr>
     </thead> 
        <?php
            //conectare la baza de date  
             $conn = new mysqli("localhost", "root", "", "pet_shop");
            //verifica conexiunea
            if (mysqli_connect_errno()) {
            exit('Connect failed: '. mysqli_connect_error());
            }

            $sql="SELECT * from clienti";
            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)) {
                    echo "<tbody>";
               echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td></tr>";
               echo "</tbody>";
           }
       }
            $conn->close();
        ?>
   </table>
    </div>
    <div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>
    <div class="buttons" id="buttons">
        <button class="btn btn1" onclick="showForm1();">Insert</button>
        <button class="btn btn2" onclick="showForm2();">Update</button>
        <button class="btn btn3" onclick="showForm3();">Delete</button>
    </div>
       
    <div id="insert-form">
            <form class="box" action="insert_clienti.php" method="post">
            <input type="text" id="insert" name="idc" placeholder="IDClient">
            <input type="text" id="insert" name="numec" placeholder="NumeClient">
            <input type="text" id="insert" name="prenumec" placeholder="PrenumeClient">
            <input type="text" id="insert" name="lc" placeholder="LocalitateClient">
            <input type="text" id="insert" name="sc" placeholder="StradaClient">
            <input type="text" id="insert" name="bc" placeholder="BlocClient">
            <input type="text" id="insert" name="ec" placeholder="EtajClient">
            <input type="text" id="insert" name="ac" placeholder="ApartamentClient">
            <input type="text" id="insert" name="tc" placeholder="TelefonClient">
            <input type="text" id="insert" name="emc" placeholder="EmailClient">
            <input type="text" id="insert" name="cpc" placeholder="CodPostalClient">
            <input type="submit" name="" value="Adauga date">
            </form>
    </div>
    
    <div id="update-form">
    <form class="box" action="update_clienti.php" method="post">
            <input type="text" id="cautare" name="tclient" placeholder="Cautare dupa telefon">
            <input type="text" id="modificare" name="nclient" placeholder="Modifica nume">
            <input type="text" id="modificare" name="pclient" placeholder="Modifica prenume">
            <input type="text" id="modificare" name="lclient" placeholder="Modifica localitate">
            <input type="text" id="modificare" name="sclient" placeholder="Modifica strada">
            <input type="text" id="modificare" name="bclient" placeholder="Modifica bloc">
            <input type="text" id="modificare" name="eclient" placeholder="Modifica etaj">
            <input type="text" id="modificare" name="aclient" placeholder="Modifica apartament">
            <input type="text" id="modificare" name="emclient" placeholder="Modifica email">
            <input type="text" id="modificare" name="cpclient" placeholder="Modifica cod postal">
            <input type="submit" name="update" value="Modifica date">
        </form>
    </div>

    <div id="delete-form">
    <form class="box" action="delete_clienti.php" method="post">
            <input type="text" id="stergere" name="tclient" placeholder="Cautare dupa telefon client">
            <input type="submit" name="delete" value="Sterge date" onclick='return checkDelete()'>
        </form>
    </div>

    <script> /*cod JS pentru confirmare stergere*/
        function checkDelete() {
            return confirm("Sunteti sigur ca stergeti datele ?");
        }
    </script>

    <script> /*cod JavaScript pentru animatie bara cu meniuri*/
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        
        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>

    <script langauge="javascript"> /*cod JS pentru afisare formular insert, update, delete */
    function showForm1(){
        document.getElementById('insert-form').style.display="block";
        document.getElementById('update-form').style.display="none";  
        document.getElementById('delete-form').style.display="none"; 
    }

    function showForm2(){
        document.getElementById('update-form').style.display="block";
        document.getElementById('insert-form').style.display="none";  
        document.getElementById('delete-form').style.display="none"; 
    }

    function showForm3(){
        document.getElementById('update-form').style.display="none";
        document.getElementById('insert-form').style.display="none";  
        document.getElementById('delete-form').style.display="block"; 
    }

</script>  

</body>
</html>