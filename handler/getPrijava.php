<?php

include '<model/prijava.php';

if (isset($_GET['id'])) {
    $prijava = Prijava::getById($_GET['id'], $conn);
    echo json_encode($prijava);
}
?>
