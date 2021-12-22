
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>TTE INFO.</h1>
         <form action="update_t.php" method="post">
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

$mid = $_POST['id'];
$name = $_POST['name'];
$rank = $_POST['rank'];
$age = $_POST['age'];
$mob = $_POST['mob'];
$add = $_POST['add'];
$sal = $_POST['sal'];

$con = mysqli_connect('localhost','root','','railway');

$sql = mysqli_query($con, "UPDATE `tte` SET `name`='$name',`rank`='$rank',`age`='$age',`mobile`='$mob',`address`='$add',`salary`='$sal' WHERE `id`=$mid");

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
        <p>TTE TABLE</p>
       <table border="2px">
           <tr>
               <td>TTE Id</td>
               <td>TTE Name</td>
               <td>Rank</td>
               <td>Age</td>
               <td>Mobile</td>
               <td>Address</td>
               <td>Salary</td>

       
           </tr>  
           <?php
           $con = mysqli_connect('localhost','root','','railway');
           $sql = mysqli_query($con ,"select * from tte");
           while($result = mysqli_fetch_assoc($sql)){

           ?>
           
           <tr>
               <td><?php echo $result['id'];?></td>
               <td><?php echo $result['name'];?></td>
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