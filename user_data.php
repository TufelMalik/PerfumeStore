<?php
function SignInTheUser() {
    session_start();
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
            $userData = $result->fetch_assoc();
            $userType = $userData['Status'];

            if ($userType === "Admin") {
                $_SESSION['userRole'] = 'Admin';
                $con->close();
                header("Location: AdminPage.php");
                exit();
            } else {
                $_SESSION['userRole'] = 'customer';
                $con->close();
                header("Location: HomePage.php");
                exit();
            }
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
        $userType = $_POST['userRole'];    
        session_start();  

        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_name = "Perfume";

        $con = new mysqli($host_name, $user_name, $password, $db_name);

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $insertQry = "INSERT INTO `users` (`MobileNum`, `Password`, `Status`)
         VALUES ('$etMobileNum', '$etPassword', '$userType')";
        
        if ($con->query($insertQry) === TRUE) {
            if(isset($_POST['userRole'])){
                $selectedType = $userType;
                if($selectedType === "admin"){
                    $con->close();
                    header("Location: AdminPage.php");
                    exit();
                }else{
                    $con->close();
                    header("Location: HomePage.php");
                    exit();
                }
            }
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
