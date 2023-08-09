<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signUp.css">
    <title>Perfume Admin</title>
</head>
<body>
    <header>
        <h1>Perfume Store</h1>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="signUp.php">Sign In</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- SignUp View -->
        <div class="registration-container">
            <div class="registration-box">
                <h1>Create an Account</h1>
                <form id="registration-form" action="user_data.php" method="post">
                    <input type="tel" id="mobile" name="etMobileReg" placeholder="Mobile Number" required>
                    <input type="password" id="registration-password" name="etPassReg" placeholder="Password" required>                    
                    <select name="userRole" class="select-style">
                        <option id="select_" value="admin">Admin</option>
                        <option value="customer">Customer</option>
                    </select>
                    <button name="btnSignUp" type="submit">Register</button>
                    <br>
                    <p class="message">Already have account? <a href="signIn.php">Login</a></p>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Perfume Store</p>
    </footer>
</body>
</html>
