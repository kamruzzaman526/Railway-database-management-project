
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>TTE INFO. </h1>

        <p>............................................................</p>






</body>
</html>


<?php
//print_r($_POST);

if(isset($_POST['submit'])){

$id = $_POST['id'];
$name = $_POST['name'];
$rank = $_POST['rank'];
$age = $_POST['age'];
$mob = $_POST['mob'];
$add = $_POST['add'];
$sal = $_POST['sal'];


$con = mysqli_connect('localhost','root','','railway');

$sql = mysqli_query($con, "INSERT into tte(id,name,rank,age,mobile,address,salary) values('$id','$name','$rank','$age','$mob','$add','$sal')");

if($sql){
    echo "Data Insertion Success....</br>"; 
}
else{
    echo "Error, Data Insertion Failed..!</br>";  
}
}

?>

<html>
   <form action ='t_table.php' method ='POST'>
        <input type = 'submit' value = 'Show the table'>
   </form>
    <form action ='t_index.php' method ='POST'>
        <input type = 'submit' value = 'Back'>
 </form>

</html>