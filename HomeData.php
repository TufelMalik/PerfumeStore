<?php
class HomeData {

    public function getAllProducts($who) {
        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_name = "Perfume";

        $con = new mysqli($host_name, $user_name, $password, $db_name);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        $selectQry = "SELECT * FROM `product`";
        $result = $con->query($selectQry);
      

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $proImg = $row['pImg'];
                $proName = $row['pName'];
                $proPrice = $row['pPrice'];
                $proMl = $row['pML'];
                $proFor = $row['For'];  // For means for men or women


                if($who === "Admin"){
                echo "<div class='product-card'>";
                echo "<div class='product-image'>";
                echo "<img src='PerfumesImages/$proImg' alt='$proName'>";
                echo "</div>";
                echo "<div class='product-details'>";
                echo "<h2 class='product-name'>$proName</h2>";
                echo "<p class='product-price'>     ₹$proPrice</p>";
                echo "<p class='product-category'>For : $proFor</p>";
                echo "<button class='add-to-cart'>Add to Cart</button>";
                echo "</div>";
                echo "</div>";
                }else{
                    echo "<div class='product-card'>";
                    echo "<div class='product-image'>";
                    echo "<img src='PerfumesImages/$proImg' alt='$proName'>";
                    echo "</div>";
                    echo "<div class='product-details'>";
                    echo "<h2 class='product-name'>$proName</h2>";
                    echo "<button class='add-to-cart'>Add to Cart</button>";
                    echo "</div>";
                    echo "</div>";
                }
            }

            mysqli_free_result($result);
        } else {
            echo "Error: " . $con->error;
        }

        mysqli_close($con);
    }
}
?>
