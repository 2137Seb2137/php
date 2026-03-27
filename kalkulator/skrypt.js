function checkInputs() {
    let pierwsza = document.getElementById("pierwsza").value;
    let druga = document.getElementById("druga").value;
    if(pierwsza == "" || druga == "") {
        document.getElementById('wynik').innerHTML = "Proszę uzupełnić obie liczby.";
        return false;
    }
    else {
        return true;
    }
}
function dodawanie() {
    if(checkInputs()) {
        let pierwsza = document.getElementById("pierwsza").value;
        let druga = document.getElementById("druga").value;
        let wynik = parseFloat(pierwsza)+parseFloat(druga);
        document.getElementById('wynik').innerHTML = "Wynik działania wynosi: " + wynik;
    }
}
function odejmowanie() {
    if(checkInputs()) {
        let pierwsza = document.getElementById("pierwsza").value;
        let druga = document.getElementById("druga").value;
        let wynik = parseFloat(pierwsza)-parseFloat(druga);
        document.getElementById('wynik').innerHTML = "Wynik działania wynosi: " + wynik;
    }
}
function mnozenie() {
    if(checkInputs()) {
        let pierwsza = document.getElementById("pierwsza").value;
        let druga = document.getElementById("druga").value;
        let wynik = parseFloat(pierwsza)*parseFloat(druga);
        document.getElementById('wynik').innerHTML = "Wynik działania wynosi: " + wynik;
    }
}
function dzielenie () {
    if(checkInputs()) {
        let pierwsza = document.getElementById("pierwsza").value;
        let druga = document.getElementById("druga").value;
        if(druga != 0) {
            let wynik = parseFloat(pierwsza)/parseFloat(druga);
            document.getElementById('wynik').innerHTML = "Wynik działania wynosi: " + wynik;
        }
        else {
            document.getElementById('wynik').innerHTML = "Nie wolno dzielić przez zero";
        }
    }
}