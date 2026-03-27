function paleta() {
    var h = document.getElementById("kolor").value;
    var table = document.querySelector('table');
    var wiersze = table.querySelectorAll('td');
    for (var i = 0; i<wiersze.length; i++) {
        if (i === 0){
            wiersze[i].style.backgroundColor = "hsl(" + h + ", 100%, 50%)";
        }
        else if (i === 1) {
            wiersze[i].style.backgroundColor = "hsl(" + h + ", 80%, 50%)";
        }
        else if (i === 2) {
            wiersze[i].style.backgroundColor = "hsl(" + h + ", 60%, 50%)";
        }
        else if (i === 3) {
            wiersze[i].style.backgroundColor = "hsl(" + h + ", 40%, 50%)";
        }
        else {
            wiersze[i].style.backgroundColor = "hsl(" + h + ", 20%, 50%)";
        }
    }
}