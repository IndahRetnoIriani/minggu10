<?php
    include "myconnection.php";

    $name = $_GET["myname"];
    $address = $_GET["myaddress"];


    $query = "INSERT INTO student(name, address)
                VALUE('$name', '$address')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    } else {
        echo "Data baru gagal ditambahkan" .  mysqli_error($connect);
    }

    mysqli_close($connect);
?>