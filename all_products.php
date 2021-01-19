<html>
	<head>
		<title>Ed's Electronics</title>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="edit.css"/>
        <style>
#tablestyle {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tablestyle td, #tablestyle th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tablestyle tr:nth-child(even){background-color: #f2f2f2;}

#tablestyle tr:hover {background-color: #ddd;}

#tablestyle th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

	

</style>
        	</head>

	<body>
    
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
<div class="content">
<div id="tablestyle" >


<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Products Name</th><th>Category</th><th>Description</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "v.je";
$username = "v.je";
$password = "v.je";
$dbname = "piyush18400602";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT `products`.`product_id`,`products`.`product_name`,`products`.`product_category`,`products`.`product_desc` FROM `piyush18400602`.`products`;"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
</div>

</div>
<footer>
&copy; Ed's Electronics 2018
</footer>

	</body>

</html>
