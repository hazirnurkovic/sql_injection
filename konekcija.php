<?php

    $kon = mysqli_connect("localhost","root","","sql_injection");
    if(!$kon){
        echo mysqli_connect_error("Greska pri konekciji sa bazom podataka...");
    }

?>