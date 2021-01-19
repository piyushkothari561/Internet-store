<?php
    try {
        $pdoConnect = new PDO("mysql:host=v.je;dbname=piyush18400602","v.je","v.je");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
// php delete data in mysql database using PDO

if(isset($_POST['update']))
{

    
     // get id to delete

    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $product_category = $_POST['product_category'];
    $product_desc = $_POST['product_desc'];
    
    
     // mysql delete query 

    $pdoQuery = "UPDATE `piyush18400602`.`products` SET `product_name`=:product_name,`product_category`=:product_category,`product_desc`=:product_desc WHERE `product_id` = :id";

    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":product_name"=>$product_name,":product_category"=>$product_category,":product_desc"=>$product_desc,":id"=>$id));
    
    if($pdoExec)
    {
        echo 'Data updated';
    }else{
        echo 'Cannot be updated';
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
<body>
<a href="update_products.php" class="button">Go Back</a>
</body>
</html>