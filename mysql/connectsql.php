<?php
$servername = "localhost";
$username = "root"; // root
$password = ""; // ""

//CREATE CONNECTION

$conn = mysqli_connect($servername,$username,$password);

//Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$database="goetel";
// Create database
$sql= "CREATE DATABASE $database";
if (mysqli_query($conn,$sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
// CONNECT TO DATABASE
if (mysqli_select_db($conn,$database)) {
    echo "Database $database selected";
} else {
    echo "Error select database:" .
mysqli_error($conn);
}

// CREATE TABLE

$sql="CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT
        CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if (mysqli_query($conn,$sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table:" . mysqli_error($conn);
}

//INSERT INTO
/*
$sql = "INSERT INTO MyGuests (firstname,lastname,email)
VALUES ('Jacek', 'Jaworek', 'jaworek@intercontinental.pl'),
('Robert', 'Lewandowki', '9Lewandowski9@interia.pl'),
('Maciej', 'Grzegrzolka', 'Grzegrzołkamaciej07@gmail.com'),
('Krystyna', 'Ciognilach', 'ciagnilach66@gmail.pl')";
if (mysqli_query($conn,$sql)) {
    echo "New record created succesfully";
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}
*/
?>
