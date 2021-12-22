
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>STATION MASTER </h1>

        <p>............................................................</p>



</body>
</html>


<?php
//print_r($_POST);

if(isset($_POST['submit'])){

$m_id = $_POST['mid'];
$m_name = $_POST['name'];
$s_id = $_POST['sid'];
$age = $_POST['age'];
$mob = $_POST['mob'];
$add = $_POST['add'];
$sal = $_POST['sal'];


$con = mysqli_connect('localhost','root','','railway');

$sql = mysqli_query($con, "INSERT into station_master(master_id,master_name,station_id,age,mobile,address,salary) values('$m_id','$m_name','$s_id','$age','$mob','$add','$sal')");

if($sql){
    echo "Data Insertion Success....</br>"; 
}
else{
    echo "Error, Data Insertion Failed..!</br>";  
}
}

?>

<html>
   <form action ='m_table.php' method ='POST'>
        <input type = 'submit' value = 'Show the table'>
   </form>
    <form action ='m_index.php' method ='POST'>
        <input type = 'submit' value = 'Back'>
 </form>

</html>