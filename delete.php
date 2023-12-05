<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once('connect.php');

    if(isset($_POST['delete_id'])){

    $deleteId = $_POST['delete_id'];
    $sql="delete from employee where Id= :Id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':Id', $deleteId,PDO::PARAM_INT);
    if($stmt->execute()){
        echo" one rwo deleted";

    }
    else{
        echo "some truble " .$stmt->errorInfo()[2];
    }

}
    /*
    The line $deleteStmt->bindParam(':id', $deleteId, PDO::PARAM_INT); is used to bind a parameter in a prepared statement. Let's break down each part of this line:

$deleteStmt: This is a prepared statement object created with the prepare method of the PDO (PHP Data Objects) class. A prepared statement is a feature in PDO that allows you to execute the same SQL statement repeatedly with high efficiency.

bindParam(':id', $deleteId, PDO::PARAM_INT):

:id: This is a named placeholder in the SQL query. It represents a parameter that will be replaced with a value when the statement is executed.

$deleteId: This is the value that will be bound to the parameter :id. It's the value you want to use in the SQL query. The value of $deleteId is taken from $_POST['delete_id'].

PDO::PARAM_INT: This is a constant that specifies the data type of the parameter. In this case, it indicates that the parameter is an integer. Using parameter binding with the correct data type helps prevent SQL injection and ensures that the bound value is treated as an integer.
    */


    
    ?>
</body>
</html>