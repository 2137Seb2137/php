<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Pobranie i zabezpieczenie danych
$name = mysqli_real_escape_string($conn, $_POST['name']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$name', '$lastname', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
    echo "Welcome " . htmlspecialchars($name) . " " . htmlspecialchars($lastname) . "<br>";
    echo "Your email address is: " . htmlspecialchars($email);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
