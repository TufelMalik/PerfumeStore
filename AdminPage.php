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
            <img src="perfume_bg.jpg" name="selectedImg" alt="Product Image">
        </div>
        <form method="post" action="Product.php" enctype="multipart/form-data">
            <div class="imgSelecter">
            <input type="file" id="selectImg" name="etPImg" accept="image/*">
        </div>
            
            <input type="text" name="etPName" placeholder="Perfume Name" />
            <input type="text" name="etPPrice" placeholder="Perfume Price" />
            <input type="text" name="etPML" placeholder="ml ?" />
        
            <button type="submit" name="btnAddData">Add Perfume</button>
        </form>
    </div>   
</body>
</html>
