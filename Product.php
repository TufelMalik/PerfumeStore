<?php

function addProductData() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $etPName = $_POST['etPName'];
        $etPPrice = $_POST['etPPrice'];
        $etPML = $_POST['etPML'];
        $etImg = $_POST['selectedImageName'];
        $etFor = $_POST['etFor'];
        
        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_name = "Perfume";

        $con = new mysqli($host_name, $user_name, $password, $db_name);

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }


       $insertProduct = "INSERT INTO `product` (`pImg`, `pName`, `pPrice`, `pML`, `For`)
        VALUES ('$etImg', '$etPName', '$etPPrice', '$etPML', '$etFor')";

        if ($con->query($insertProduct) === true) {
            echo "Inserted";
        } else {
            echo "Insertion Failed: " . $con->error;
        }

        $con->close();
    }
}

if (isset($_POST['btnAddData'])) {
    addProductData();
}

?>
