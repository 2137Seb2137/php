<?php
// Dane logowania do MySQL
$servername = "localhost";
$username = "root";
$password = "";

// Połączenie z serwerem MySQL
$conn = new mysqli($servername, $username, $password);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
echo "Połączono z serwerem MySQL<br>";

// Tworzenie bazy danych
$sql = "CREATE DATABASE IF NOT EXISTS szkola";
if ($conn->query($sql) === TRUE) {
    echo "Baza danych 'szkola' została utworzona lub już istnieje<br>";
} else {
    die("Błąd tworzenia bazy danych: " . $conn->error);
}

// Połączenie z nową bazą danych
$conn->select_db("szkola");

// Tworzenie tabeli 5TiB
$sql = "CREATE TABLE IF NOT EXISTS `5TiB` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50),
    numer INT
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabela '5TiB' została utworzona lub już istnieje<br>";
} else {
    die("Błąd tworzenia tabeli: " . $conn->error);
}

// Wstawianie danych do tabeli
$sql = "INSERT INTO `5TiB` (imie, numer) VALUES ('Sebastian', 21)";
if ($conn->query($sql) === TRUE) {
    echo "Dodano wpis: Sebastian, 21<br>";
} else {
    die("Błąd podczas wstawiania danych: " . $conn->error);
}

// Zamknięcie połączenia
$conn->close();
echo "Połączenie zamknięte.";
?>