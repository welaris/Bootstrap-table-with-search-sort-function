<?php

$conn = mysqli_connect("localhost", "root", "", "dbkunden");

// $sql = "INSERT INTO tblkunden(anrede, titel, vorname, nachname, telefon, email) VALUES (?,?,?,?,?,?)";

$anrede = $_POST['anrede'];
$titel = $_POST['titel'];
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];

// echo "<h2>Anrede: </h2> $anrede";
// echo "<h2>Titel: </h2> $titel";
// echo "<h2>Vorname: </h2> $vorname";
// echo "<h2>Nachname: </h2> $nachname";
// echo "<h2>Email: </h2> $email";

if (!$conn) {
    die("Verbindung fehlgeschlagen: " . mysqli_connect_error());    
}

$sql = "INSERT INTO tblkunden (anrede, titel, vorname, nachname, telefon, email) 
        VALUES ('$anrede', '$titel', '$vorname', '$nachname', '$telefon', '$email')";
        
    if(mysqli_query($conn, $sql)){
        // echo '<script>alert("Daten wurden erfolgreich gespeichert.");</script>';
        echo "Daten wurden erfolgreich gespeichert.";
    }
    else{
        echo "Fehler beim Einfügen: " . mysqli_error($conn);
    }
header("refresh:3;bootstrapFormular.html")
// header('Location: bootstrapFormular.html');
?>