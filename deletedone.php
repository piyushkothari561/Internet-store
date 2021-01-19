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
    
     // get id to delete

    $id = $_POST['id'];
    
     // mysql delete query 

    $pdoQuery = "DELETE FROM `piyush18400602`.`products` WHERE `product_id` = :id";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":id"=>$id));
    
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
<style>
body {
    background-image: url(img.php);
}
</style>
<body>
<a href="delete.php" class="button">Go Back</a>
</body>
</html>