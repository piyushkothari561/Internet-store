<?php

// php delete data in mysql database using PDO

if(isset($_POST['delete']))
{
    try {
        $pdoConnect = new PDO("mysql:host=v.je;dbname=piyush18400602","v.je","v.je");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    
     // get product_category to delete

    $product_category = $_POST['product_category'];
    
     // mysql delete query 

    $pdoQuery = "DELETE FROM `piyush18400602`.`categories` WHERE `category_name` = :product_category";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":product_category"=>$product_category));
    
    if($pdoExec)
    {
        echo 'Data Deleted';
    }else{
        echo 'ERROR Data Not Deleted';
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
<a href="delete_categories.php" class="button">Go Back</a>
</body>
</html>