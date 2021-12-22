

<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>RAILWAY STATION </h1>

        <p>............................................................</p>






</body>
</html>



<?php
//print_r($_POST);

if(isset($_POST['submit'])){

$s_id = $_POST['id'];
$s_code = $_POST['code'];
$s_name = $_POST['name'];
$m_id = $_POST['m_id'];
$s_zone = $_POST['s_zone'];
$s_uz = $_POST['uzila'];
$s_dist = $_POST['dist'];


$con = mysqli_connect('localhost','root','','railway');

$sql = mysqli_query($con, "INSERT into station(station_id,station_code,station_name,master_id,station_zone,upazila,district) values('$s_id','$s_code','$s_name','$m_id','$s_zone','$s_uz','$s_dist')");

if($sql){
    echo "Data Insertion Success....</br>"; 
}
else{
    echo "Error, Data Insertion Failed..!</br>";  
}
}

?>

<html>
   <form action ='s_table.php' method ='POST'>
        <input type = 'submit' value = 'Show the table'>
   </form>
    <form action ='s_index.php' method ='POST'>
        <input type = 'submit' value = 'Back'>
 </form>

</html>