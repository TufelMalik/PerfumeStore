<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="AdminPage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <div class="addData">
        <label><h1>Add Perfume here</h1></label>
        <div class="product-image">
            <img src="PerfumesImages\logo2.jpg" id="logoimg" name="selectedImg" alt="Product Image">
        </div>
        <form method="post" action="Product.php" enctype="multipart/form-data">
            <div class="imgSelecter">
                <input type="file" id="selectImg" name="etPImg" accept="image/*" onchange="updateSelectedImageName()">
            </div>

            <input type="text" id="selectedImageName" name="selectedImageName" placeholder="Selected Image" readonly>
            <input type="text" name="etPName" placeholder="Perfume Name" />
            <input type="text" name="etPPrice" placeholder="Perfume Price" />
            <input type="text" name="etPML" placeholder="ml ?" />
            <input type="text" name="etFor" placeholder="Men or Women ?" />

        
            <button type="submit" name="btnAddData">Add Perfume</button>
        </form>
    </div>   
    <script>
        function updateSelectedImageName() {
            var input = document.getElementById("selectImg");
            var output = document.getElementById("selectedImageName");
            
            if (input.files.length > 0) {
                output.value = input.files[0].name;
            } else {
                output.value = "";
            }
        }
    </script>
</body>
</html>
