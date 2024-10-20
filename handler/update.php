<?php
// Uključivanje konekcije ka bazi i klase Prijava
include 'db_connection.php';
include 'prijava.php';

// Proveravamo da li su svi podaci prosleđeni
if (isset($_POST['submit']) && $_POST['submit'] == "Izmeni"
&& isset($_POST['id'])
&& isset($_POST['predmet'])
&& isset($_POST['katedra'])
&& isset($_POST['sala'])
&& isset($_POST['datum'])) {

    // Ažuriramo podatke pomoću funkcije iz prijava.php
    $status = Prijava::updatePrijava($_POST['id'], $_POST['predmet'], $_POST['katedra'], $_POST['sala'], $_POST['datum'], $conn);

    // Provera da li je ažuriranje bilo uspešno
    if ($status) {
        echo "Prijava je uspešno ažurirana.";
    } else {
        echo "Greška prilikom ažuriranja prijave.";
    }
} else {
    echo "Nisu prosleđeni svi potrebni podaci.";
}
?>
