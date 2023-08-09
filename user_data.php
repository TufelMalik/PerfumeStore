<?php

function SignInTheUser() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $etMobileNum = $_POST['etNumLogin'];
        $etPassword = $_POST['etPassLogin'];

        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_name = "Perfume";

        $con = new mysqli($host_name, $user_name, $password, $db_name);

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $selectQry = "SELECT * FROM `users` WHERE `MobileNum`='$etMobileNum' AND `Password`='$etPassword'";
        $result = $con->query($selectQry);

        if ($result->num_rows > 0) {
            echo "Login successful.";
        } else {
            echo "Login failed. Invalid credentials.";
        }

        $con->close();
    }
}

function SignUpTheUser() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $etMobileNum = $_POST['etMobileReg'];
        $etPassword = $_POST['etPassReg'];

        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_name = "Perfume";

        $con = new mysqli($host_name, $user_name, $password, $db_name);

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Assuming 'Status' is a column in your table 'users'
        $newAdmin = "Admin";

        // Use backticks for table and column names, not single quotes
        $insertQry = "INSERT INTO `users` (`MobileNum`, `Password`, `Status`)
         VALUES ('$etMobileNum', '$etPassword', '$newAdmin')";
        
        if ($con->query($insertQry) === TRUE) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $con->error;
        }

        $con->close();
    }
}
// Call functions based on actions
if (isset($_POST['btnSignIn'])) {
    SignInTheUser();
}

if (isset($_POST['btnSignUp'])) {
    SignUpTheUser();
}

?>
