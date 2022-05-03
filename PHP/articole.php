<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> <!--imagini iconite meniu-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--fontul folosit-->
    <link rel="stylesheet" href="articole_styles.css"> <!--CSS styles-->
    <script src="login.js"></script> <!--cod JavaScript pentru validare nume si parola-->
   
    <title>Articole</title>
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
             
             $sql = "SELECT count(IDArticol) as total from articole";
             $result = mysqli_query($conn, $sql);
             $values = mysqli_fetch_assoc($result);
             $num_rows = $values['total'];
             echo $num_rows;

            ?>
        </div>
    <div class="content">
   <table>
       <thead>
        <tr>
            <th>Denumirea articolului</th>
            <th>Pretul articolului</th>
            <th>Numarul de bucati disponibile</th>
            <th>Descrierea articolului</th>
        </tr>
     </thead> 
        <?php
            //conectare la baza de date  
             $conn = new mysqli("localhost", "root", "", "pet_shop");
            //verifica conexiunea
            if (mysqli_connect_errno()) {
            exit('Connect failed: '. mysqli_connect_error());
            }

            $sql="SELECT * from articole";
            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)) {
                    echo "<tbody>";
                    echo "<tr><td>".$row['DenumireArticol']."</td><td>".$row['PretArticol']."</td><td>".$row['NumarBucatiInStoc']."</td><td>".$row['DescriereArticol']."</td></tr>";
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
            <form class="box" action="insert_articole.php" method="post">
            <input type="text" id="insert" name="idar" placeholder="IDArticol">
            <input type="text" id="insert" name="idcateg" placeholder="IDCategorie">
            <input type="text" id="insert" name="idfur" placeholder="IDFurnizor">
            <input type="text" id="insert" name="denar" placeholder="DenumireArticol">
            <input type="text" id="insert" name="par" placeholder="PretArticol">
            <input type="text" id="insert" name="nrb" placeholder="NumarBucatiInStoc">
            <input type="text" id="insert" name="descar" placeholder="DescriereArticol">
            <input type="submit" name="" value="Adauga date">
            </form>
    </div>
    
    <div id="update-form">
    <form class="box" action="update_articole.php" method="post">
            <input type="text" id="cautare" name="denar" placeholder="DenumireArticol">
            <input type="text" id="modificare" name="par" placeholder="Modifica pret articol">
            <input type="text" id="modificare" name="nrb" placeholder="Modifica numar bucati in stoc">
            <input type="text" id="modificare" name="descar" placeholder="Modifica descriere articol">
            <input type="submit" name="update" value="Modifica date">
        </form>
    </div>

    <div id="delete-form">
    <form class="box" action="delete_articole.php" method="post">
            <input type="text" id="stergere" name="denar" placeholder="Cautare dupa denumire articol">
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