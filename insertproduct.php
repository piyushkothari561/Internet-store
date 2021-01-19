<?php

if(isset($_POST['insert']))
{
    try {

        // connect to mysql

        $pdoConnect = new PDO("mysql:host=v.je;dbname=piyush18400602","v.je","v.je");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

    // get values form input text and number
    $product_name = $_POST['product_name'];
    $product_category = $_POST['product_category'];
    $product_desc = $_POST['product_desc'];
    
    // mysql query to insert data

    $pdoQuery = "INSERT INTO `piyush18400602`.`products`(`product_name`,`product_category`,`product_desc`)VALUES(:product_name,:product_category,:product_desc);";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":product_name"=>$product_name,":product_category"=>$product_category,":product_desc"=>$product_desc));
    
    // check if mysql insert query successful
    if($pdoExec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
}


?>
<html>
<head>
<style>
.button {
  background-color: #1e9397;
  border: black;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

<style>
body {
    background-image: url(img.php);
}
</style>
<body>
<a href="addproducts.php" class="button">Go Back</a>
</body>
</html>