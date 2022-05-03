<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> <!--imagini iconite meniu-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--fontul folosit-->
    <link rel="stylesheet" href="informatii_styles.css"> <!--CSS styles-->
    <script src="login.js"></script> <!--cod JavaScript pentru validare nume si parola-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- pentru tabel interogari -->
    <script type="text/javascript">

    </script>
    <title>Informatii</title>
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
    <div id="table">
        <div class="website">
            <h2 id="messagedisplay"></h2>
        </div>
    </div>
    </div>
    <div class="home_content"> <!--continut prima pagina-->
        <div class="container">
            <form action="informatii.php" id="formid1" method="post">
                <div class="text">Gasiti clientii care au dat comenzi in data de: </div>
                <input type="text" name="Data" placeholder="YYYY-MM-DD" id="Data">
                <input type="submit" class="btn" name="displaybtn" value="OK" id="displaybtn">
                <div id="clasa"> </div>
                <div class="btn-box">
                    <button type="button" id="Next1">Next</button>
                </div>
            </form>

            <form action="informatii.php" id="formid2" method="post">
                <div class="text">Aflati numele si pretul articolelor furnizate de: </div>
                <input type="text" name="Furnizor" placeholder="Introduceti numele furnizorului" id="Furnizor">
                <input type="submit" class="btn" name="displaybtn2" value="OK" id="displaybtn2">
                <div id="clasa2"> </div>
                <div class="btn-box">
                    <button type="button" id="Back1">Back</button>
                    <button type="button" id="Next2" >Next</button>
                </div>
            </form>

            <form action="informatii.php" id="formid3" method="post">
                <div class="text1">Gasiti clientii care au comandat cel putin</div>
                <input type="text" name="Numar" placeholder="Introduceti numarul minim de articole" id="Numar">
                <div class="text3">articole: </div>
                <input type="submit" class="btn" name="displaybtn3" value="OK" id="displaybtn3">
                <div id="clasa3"> </div>
                <div class="btn-box">
                    <button type="button" id="Back2">Back</button>
                    <button type="button" id="Next3" >Next</button>
                </div>
            </form>

            <form action="informatii.php" id="formid4" method="post">
                <div class="text">Gasiti clientii care au cumparat articole din categoria: </div>
                <input type="text" name="Categorie" placeholder="Introduceti categoria" id="Categorie">
                <input type="submit" class="btn" name="displaybtn4" value="OK" id="displaybtn4">
                <div id="clasa4"> </div>
                <div class="btn-box">
                    <button type="button" id="Back3">Back</button>
                    <button type="button" id="Next4" >Next</button>
                </div>
            </form>

            <form action="informatii.php" id="formid5" method="post">
                <div class="text5">Gasiti clientii care au efectuat </div>
                <input type="text" name="nr" placeholder="Introduceti numar comenzi" id="nr">
                <div class="text6">comenzi: </div>
                <input type="submit" class="btn" name="displaybtn5" value="OK" id="displaybtn5">
                <div id="clasa5"> </div>
                <div class="btn-box">
                    <button type="button" id="Back4">Back</button>
                    <button type="button" id="Next5" >Next</button>
                </div>
            </form>

            <form action="informatii.php" id="formid6" method="post">
                <div class="text7">Gasiti articolele furnizate din afara Romaniei: </div>
                <input type="submit" class="btn" name="displaybtn6" value="OK" id="displaybtn6">
                <div id="clasa6"> </div>
                <div class="btn-box">
                    <button type="button" id="Back5">Back</button>
                    <button type="button" id="Next6" >Next</button>
                </div>
            </form>

            <form action="informatii.php" id="formid7" method="post">
                <div class="text8">Sa se afiseze clientii si data celei mai recente comenzi, clienti din localitatea: </div>
                <input type="text" name="localitate" placeholder="Introduceti localitatea" id="localitate">
                <input type="submit" class="btn" name="displaybtn7" value="OK" id="displaybtn7">
                <div id="clasa7"> </div>
                <div class="btn-box">
                    <button type="button" id="Back6">Back</button>
                    <button type="button" id="Next7" >Next</button>
                </div>
            </form>

            <form action="informatii.php" id="formid8" method="post">
                <div class="text9">Gasiti articolele si pretul celor care au pretul mai mare decat toate articolele din categoria: </div>
                <input type="text" name="categ" placeholder="Introduceti categoria" id="categ">
                <input type="submit" class="btn" name="displaybtn8" value="OK" id="displaybtn8">
                <div id="clasa8"> </div>
                <div class="btn-box">
                    <button type="button" id="Back7">Back</button>
                    <button type="button" id="Next8" >Next</button>
                </div>
            </form>

            <form action="informatii.php" id="formid9" method="post">
                <div class="text10">Gasiti articolele care apartin unei categorii in care exista cel putin 1 articol cu pretul mai mare de: </div>
                <input type="text" name="pret" placeholder="Introduceti pretul" id="pret">
                <input type="submit" class="btn" name="displaybtn9" value="OK" id="displaybtn9">
                <div id="clasa9"> </div>
                <div class="btn-box">
                    <button type="button" id="Back8">Back</button>
                    <button type="button" id="Next9" >Next</button>
                </div>
            </form>

            <form action="informatii.php" id="formid10" method="post">
                <div class="text11">Gasiti articolele care nu au fost cumparate, fiind furnizate de: </div>
                <input type="text" name="nfurnizor" placeholder="Introduceti nume furnizor" id="nfurnizor">
                <input type="submit" class="btn" name="displaybtn10" value="OK" id="displaybtn10">
                <div id="clasa10"> </div>
                <div class="btn-box">
                    <button type="button" id="Back9">Back</button>
                </div>
            </form>

        </div>
    <script> /*cod JavaScript pentru animatie bara cu meniuri*/
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        
        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>
    <script> /*script JS pentru afisare rezultat interogari*/
        $(document).ready(function () {
            $('#displaybtn').click(function (e) {
                e.preventDefault();
                var Data = $('input[name=Data]').val();
                $.ajax( {
                    type: "POST",
                    url: "fetchjoin1.php",
                    data: {
                        "btn_s": 1,
                        "Data": Data,
                    },
                    dataType: "text",
                    success: function(response) {
                        $('#clasa').html(response);
                    }
                }

                );
            }
            );

            $('#displaybtn2').click(function (e) {
                e.preventDefault();
                var Furnizor = $('input[name=Furnizor]').val();
                $.ajax( {
                    type: "POST",
                    url: "fetchjoin2.php",
                    data: {
                        "btn_s": 1,
                        "Furnizor": Furnizor,
                    },
                    dataType: "text",
                    success: function(response) {
                        $('#clasa2').html(response);
                    }
                }

                );
            }
            );

            $('#displaybtn3').click(function (e) {
                e.preventDefault();
                var Numar = $('input[name=Numar]').val();
                $.ajax( {
                    type: "POST",
                    url: "fetchjoin3.php",
                    data: {
                        "btn_s": 1,
                        "Numar": Numar,
                    },
                    dataType: "text",
                    success: function(response) {
                        $('#clasa3').html(response);
                    }
                }

                );
            }
            );

            $('#displaybtn4').click(function (e) {
                e.preventDefault();
                var Categorie = $('input[name=Categorie]').val();
                $.ajax( {
                    type: "POST",
                    url: "fetchjoin4.php",
                    data: {
                        "btn_s": 1,
                        "Categorie": Categorie,
                    },
                    dataType: "text",
                    success: function(response) {
                        $('#clasa4').html(response);
                    }
                }

                );
            }
            );

            $('#displaybtn5').click(function (e) {
                e.preventDefault();
                var nr = $('input[name=nr]').val();
                $.ajax( {
                    type: "POST",
                    url: "fetchjoin5.php",
                    data: {
                        "btn_s": 1,
                        "nr": nr,
                    },
                    dataType: "text",
                    success: function(response) {
                        $('#clasa5').html(response);
                    }
                }

                );
            }
            );

            $('#displaybtn6').click(function (e) {
                e.preventDefault();
                $.ajax( {
                    type: "POST",
                    url: "fetchjoin6.php",
                    data: {
                        "btn_s": 1,
                    },
                    dataType: "text",
                    success: function(response) {
                        $('#clasa6').html(response);
                    }
                }

                );
            }
            );

            $('#displaybtn7').click(function (e) {
                e.preventDefault();
                var localitate = $('input[name=localitate]').val();
                $.ajax( {
                    type: "POST",
                    url: "fetchsubcerere1.php",
                    data: {
                        "btn_s": 1,
                        "localitate": localitate,
                    },
                    dataType: "text",
                    success: function(response) {
                        $('#clasa7').html(response);
                    }
                }

                );
            }
            );

            $('#displaybtn8').click(function (e) {
                e.preventDefault();
                var categ = $('input[name=categ]').val();
                $.ajax( {
                    type: "POST",
                    url: "fetchsubcerere2.php",
                    data: {
                        "btn_s": 1,
                        "categ": categ,
                    },
                    dataType: "text",
                    success: function(response) {
                        $('#clasa8').html(response);
                    }
                }

                );
            }
            );

            $('#displaybtn9').click(function (e) {
                e.preventDefault();
                var pret = $('input[name=pret]').val();
                $.ajax( {
                    type: "POST",
                    url: "fetchsubcerere3.php",
                    data: {
                        "btn_s": 1,
                        "pret": pret,
                    },
                    dataType: "text",
                    success: function(response) {
                        $('#clasa9').html(response);
                    }
                }

                );
            }
            );

            $('#displaybtn10').click(function (e) {
                e.preventDefault();
                var nfurnizor = $('input[name=nfurnizor]').val();
                $.ajax( {
                    type: "POST",
                    url: "fetchsubcerere4.php",
                    data: {
                        "btn_s": 1,
                        "nfurnizor": nfurnizor,
                    },
                    dataType: "text",
                    success: function(response) {
                        $('#clasa10').html(response);
                    }
                }

                );
            }
            );

        }

        );
    </script>

    <script> /*script JS pentru afisare formulare interogari*/
        var Form1 = document.getElementById("formid1");
        var Form2 = document.getElementById("formid2");
        var Form3 = document.getElementById("formid3");
        var Form4 = document.getElementById("formid4");
        var Form5 = document.getElementById("formid5");
        var Form6 = document.getElementById("formid6");
        var Form7 = document.getElementById("formid7");
        var Form8 = document.getElementById("formid8");
        var Form9 = document.getElementById("formid9");
        var Form10 = document.getElementById("formid10");

        var Next1 = document.getElementById("Next1");
        var Back1 = document.getElementById("Back1");
        var Next2 = document.getElementById("Next2");

        Next1.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "block";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
        }

        Back1.onclick = function() {
            Form1.style.display = "block";
            Form2.style.display = "none";
            Form3.style.dispaly = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
        }

        Next2.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "block";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
        }

        Back2.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "block";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
        }

        Next3.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "block";
            Form5.style.display = "none";
            Form6.style.display = "none";
        }

        Back3.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "block";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
        }

        Next4.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "block";
            Form6.style.display = "none";
        }

        Back4.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "block";
            Form5.style.display = "none";
            Form6.style.display = "none";
        }

        Next5.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "block";
        }

        Back5.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "block";
            Form6.style.display = "none";
        }

        Next6.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
            Form7.style.display = "block";
        }
        
        Back6.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "block";
            Form7.style.display = "none";
        }

        Back7.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
            Form7.style.display = "block";
            Form8.style.display = "none";
        }

        Next7.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
            Form7.style.display = "none";
            Form8.style.display = "block";
        }

        Back8.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
            Form7.style.display = "none";
            Form8.style.display = "block";
            Form9.style.display = "none";
        }

        Next8.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
            Form7.style.display = "none";
            Form8.style.display = "none";
            Form9.style.display = "block";
        }

        Back9.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
            Form7.style.display = "none";
            Form8.style.display = "none";
            Form9.style.display = "block";
            Form10.style.display = "none";
        }

        Next9.onclick = function() {
            Form1.style.display = "none";
            Form2.style.display = "none";
            Form3.style.display = "none";
            Form4.style.display = "none";
            Form5.style.display = "none";
            Form6.style.display = "none";
            Form7.style.display = "none";
            Form8.style.display = "none";
            Form9.style.display = "none";
            Form10.style.display = "block";
        }

    </script> 

</body>
</html>