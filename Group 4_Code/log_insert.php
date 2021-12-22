
<?php

if(isset($_POST['submit'])){

//$id = $_POST['id'];
$name = $_POST['name'];
$pass = $_POST['pass'];


$con = mysqli_connect('localhost','root','','railway');

$sql = mysqli_query($con, "insert into login(username,password) values('$name','$pass')");

if($sql){
    //echo "Data Insertion Success....</br>";
    header("location: user.php"); 
}
else{
    echo "Error, Data Insertion Failed..!</br>";  
}
}

?>
