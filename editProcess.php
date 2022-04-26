<?php
    include "myconnection.php";

    $id = $_GET["myid"];
    $name = $_GET["myname"];
    $address = $_GET["myaddress"];
    $target_path="uploads/*";
    $target_path = $target_path . basename(
    $foto['myfoto']['name']);

    if(move_uploaded_file($foto['uploadedfile']['tmp_name'],$target_path)){
        echo "The file " . basename($_FILES['uploadedfile']['name']) . "has been uploaded";
    } else {
        echo "There was an error uploading the file, please try again";
    }  

    $query = "UPDATE student SET name='$name', address='$address', foto='$foto' WHERE id=$id";
    
    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    } else {
        echo "Gagal mengubah data <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>