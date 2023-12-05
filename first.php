
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*$conn=mysqli_connect('localhost',"Bik","3190&wise","atm_system");

if(!$conn){
    echo "connection fail" .mysqli_connect_error();

}
else{
    echo "done connect";
}


$sql="SELECT name_own_account, id_own_account, password FROM account";
$result = $conn->query($sql);
if ($result->num_rows > 0) {// test if have any row in the result
    // output data of each row
    while($row = $result->fetch_assoc()) {// fetch_assoc() is often used to retrieve individual rows from that result set.
        echo "<br> id: ". $row["i d_own_account"]. " - Name: ". $row["name_own_account"]. " password " . $row["password"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
*/


$servername = "localhost";
$username = "Bik";
$password = "3190&wise";

try {
  $conn = new PDO("mysql:host=$servername;dbname=atm_system", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>


    
</body>
</html>