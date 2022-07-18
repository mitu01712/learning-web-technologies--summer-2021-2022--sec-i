
<?php 
$servername = "localhost";
$firstname="Frist name";
$lastname="Last name";
$username = "username";
$password = "password";
$address= "Address";
$currentaddress= "current Address";
$email="Email";
$phonenum="phone num";


    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

    // if($conn){
    //     echo "Success";
    // }else{
    //     echo "DB Error...";
    // }
	$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
username  VARCHAR(20) NOT NULL,
password  VARCHAR(20) NOT NULL,
address  VARCHAR(20) NOT NULL,
currentaddress  VARCHAR(20) NOT NULL,
email  VARCHAR(20) NOT NULL,
phonenum  VARCHAR(20) NOT NULL,

    $sql = "select * from users";
    $result = mysqli_query($conn, $sql);
    
    while($row= mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }
	
	

?>
