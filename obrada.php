<?php
    require "dbBroker.php";
    require "model/prijava.php";
    require "handler/delete.php";
    require "handler/add.php";
    require "handler/getById.php";
    require "handler/update.php";
    require "handler/getPrijava.php";

    // echo "obrada..";

    header("Location: home.php");

?>