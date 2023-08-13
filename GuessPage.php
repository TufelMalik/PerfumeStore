<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="GuestPage.css">
  <title>Product Card</title>
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
            <li><a href="signIn.php">SignIn</a></li>
        </ul>
    </nav>
</header>
<main>
    <div class="product-card-container">
        <?php
        include 'HomeData.php';
        $homeData = new HomeData(); 
        $homeData->getAllProducts("Guest");
        $homeData->getAllProducts("Guest");
        $homeData->getAllProducts("Guest");
        $homeData->getAllProducts("Guest");
        $homeData->getAllProducts("Guest");
        $homeData->getAllProducts("Guest");
        $homeData->getAllProducts("Guest");
        ?>
    </div>
</main>
<footer>
    <p>&copy; 2023 Perfume Store</p>
</footer>
</body>
</html>
