
<?php

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
<form action="insertcategory.php" method="post">
<label for="category_name">Category</label>
<input type="text" name="category_name" placeholder="Category"><br><br>
<input type="submit" name="insert" value="Submit Data">
</form>
<div>
</div>
		<footer>
			&copy; Ed's Electronics 2018
		</footer>

	</body>

</html>
