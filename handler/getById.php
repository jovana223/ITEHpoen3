<?php
// Uključivanje konekcije ka bazi i klase Prijava
include 'db_connection.php';
include 'Prijava.php';

// Proveravamo da li je prosleđen ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Pozivanje metode getById iz klase Prijava
    $prijava = Prijava::getById($id, $conn);

    if ($prijava) {
        // Vraćamo podatke o prijavi kao JSON
        echo json_encode($prijava);
    } else {
        echo json_encode(["error" => "Prijava nije pronađena."]);
    }
} else {
    echo json_encode(["error" => "ID nije prosleđen."]);
}
?>
