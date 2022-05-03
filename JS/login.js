function validate() {
    var nume = document.getElementById("nume").value;
    var parola = document.getElementById("parola").value;

    if(nume == "admin" && parola == "admin") {
        window.location = "informatii.php";
        return false;
    }
    else {
        alert("Numele sau parola introduse sunt gresite!");
    }
}