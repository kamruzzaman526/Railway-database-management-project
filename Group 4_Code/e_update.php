
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>RAILWAY EMPLOYEES</h1>
         <form action="update_e.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="Back"></td>
                 </tr>
             </table>
         </form>
         <form action="admin.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="Back to Home "></td>
                 </tr>
             </table>
         </form>
        <p>............................................................</p>


<?php

//print_r($_POST);

if(isset($_POST['submit'])){
 //  $id=$_GET['id'];
  // print_r($_POST);

$id = $_POST['id'];
$name = $_POST['name'];
$duty = $_POST['duty'];
$rank = $_POST['rank'];
$age = $_POST['age'];
$mob = $_POST['mob'];
$add = $_POST['add'];
$sal = $_POST['sal'];

$con = mysqli_connect('localhost','root','','railway');

$sql = mysqli_query($con, "UPDATE `employee` SET `name`='$name',`duty`='$duty',`rank`='$rank',`age`='$age',`mobile`='$mob',`address`='$add',`salary`='$sal' WHERE `id`=$id");

if($sql){
  //  header("location: train_table.php");
    echo "Data Updated....</br>"; 
}
else{
    echo "Error, Data Update Failed..!</br>";  
}
}

?>

<html>
    <body>
        <p>EMPLOYEES</p>
       <table border="2px">
           <tr>
               <td>Employee Id</td>
               <td>Employee Name</td>
               <td>Duty</td>
               <td>Rank</td>
               <td>Age</td>
               <td>Mobile</td>
               <td>Address</td>
               <td>Salary</td>

       
           </tr>  
           <?php
           $con = mysqli_connect('localhost','root','','railway');
           $sql = mysqli_query($con ,"select * from employee");
           while($result = mysqli_fetch_assoc($sql)){

           ?>
           
           <tr>
               <td><?php echo $result['id'];?></td>
               <td><?php echo $result['name'];?></td>
               <td><?php echo $result['duty'];?></td>
               <td><?php echo $result['rank'];?></td>
               <td><?php echo $result['age'];?></td>
               <td><?php echo $result['mobile'];?></td>
               <td><?php echo $result['address'];?></td>
               <td><?php echo $result['salary'];?></td>

               


           </tr>
           <?php
           }
           ?>
           
       <table>
       
</html>