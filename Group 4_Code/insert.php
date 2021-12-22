
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>TRAIN SCHEDULE </h1>

        <p>............................................................</p>






</body>
</html>


<?php

if(isset($_POST['submit'])){

$t_id = $_POST['id'];
$t_name = $_POST['name'];
$d_station = $_POST['start_station'];
$d_time = $_POST['start_time'];
$a_station = $_POST['last_station'];
$a_time = $_POST['last_time'];

$con = mysqli_connect('localhost','root','','railway');

$sql = mysqli_query($con, "insert into train(train_id,train_name,depart_station,depart_time,arrival_station,arrival_time) values('$t_id','$t_name','$d_station','$d_time','$a_station','$a_time')");

if($sql){
    echo "Data Insertion Success....</br>"; 
}
else{
    echo "Error, Data Insertion Failed..!</br>";  
}
}

?>

<html>
   <form action ='train_table.php' method ='POST'>
        <input type = 'submit' value = 'Show the table'>
   </form>
    <form action ='index.php' method ='POST'>
        <input type = 'submit' value = 'Back'>
 </form>

</html>