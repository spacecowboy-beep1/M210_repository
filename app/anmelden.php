<?php
$host = '10.10.0.11'; // IP der Datenbank-VM im internen Netz
$user = 'app';
$password = 'pinguin';
$dbname = 'anmeldungen';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

$name = $_POST['name'];
$kurs = $_POST['kurs'];

$sql = "INSERT INTO anmeldung (name, kurs) VALUES ('$name', '$kurs')";

if ($conn->query($sql) === TRUE) {
    echo "Anmeldung erfolgreich gespeichert!";
} else {
    echo "Fehler: " . $conn->error;
}

$conn->close();
?>