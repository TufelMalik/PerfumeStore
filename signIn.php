<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="signIn.css">
    <title>User || Login</title>
</head>
<body>
    <header>
        <h1>Perfume Store</h1>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="signUp.php">SignUp</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="login-page">
            <div class="form">
                <div class="login">
                    <div class="login-header">
                        <h3>LOGIN</h3>
                    </div>
                </div>
                <form class="login-form" method="post" action="user_data.php">
                    <input type="text" name="etNumLogin" placeholder="Mobile Number" required/>
                    <input type="password" name="etPassLogin" placeholder="Password" required/>
                    <button name="btnSignIn" type="submit">Login</button>
                    <br>
                    <p class="message">Not registered? <a href="signUp.php">Create an account</a></p>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Perfume Store</p>
    </footer>
</body>
</html>
