
<?php

try{
    $sqlconnection = new pdo('mysql:host=v.je;dbname=piyush18400602;charset=utf8','v.je','v.je');
    }   
catch(PDOException $pe){
    echo 'Cannot connect to database';
    die;
}
?>


<html>
<head>
    <title>Ed's Electronics</title>
    <meta charset="utf-8" /> 
    <link rel="stylesheet" href="electronics.css" />
        </head>

<body>
<style>
	body {
    background-image: url(img.php);
}
</style>
<header>
<h1>Ed's Electronics</h1>
                        <ul>
				<li><a href="plan.php">ADMINISTRATOR PAGE</a></li>
                        </ul>
    </header>
    
<div class="content">
<div class="vertical-menu">
<a href="addproducts.php">	<button id="addp" class="button"><span>Add Products </span></button> </a>
<a href="addcategories.php"><button class="button"><span>Add categories </span></button></a>
<a href="delete.php"><button class="button"><span>Delete products </span></button></a>
  <a href="update_products.php"><button class="button"><span>Update products</span></button></a>
  <a href="update_categories.php"><button class="button"><span>Update categories</span></button></a>
  
  <a href="delete_categories.php"><button class="button"><span>Delete categories</span></button></a>
  <a href="all_products.php"><button class="button"><span>View all products</span></button></a>
</div>
</div>
<div class="container">
<form action="update_done_products.php" method="post">
<label for="product_name">ID to update</label>
<input type="text" name="id" required><br><br>
<label for="product_name">Product Name</label>
<input type="text" name="product_name" placeholder="Product Name"><br><br>
<label for="product_categoty">Product category</label>
<select name="product_category">
<?php
                $commandstring = "SELECT categories.category_id,category_name FROM categories order by category_id";
                $cmd = $sqlconnection->prepare($commandstring);
                $cmd->execute();
                $result = $cmd->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as $row) {
                    if($selid==$row['category_id']) {
                        echo '<option value="'.$row['category_name'].'" selected="selected">'.$row['category_name'].'</option>';
                    } else {
                        echo '<option value="'.$row['category_name'].'">'.$row['category_name'].'</option>';
                    }						
                }
?>	
</select>
<br>
<br><br>
<label for="product_desc">Description</label>
<input type="text" name="product_desc" placeholder="Write the description here"><br><br>
<label for="product_featured">Featured Product</label>
<select name="product_featured">
  <option value="NO">NO</option>
  <option value="YES">YES</option>
</select>

<input type="submit" name="update" value="Update Data" onclick="return confirm('Do you want to update the data?');">

</form>
<div>
</div>
    <footer>
        &copy; Ed's Electronics 2018
    </footer>

</body>

</html>
