

<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>TRAIN SCHEDULE</h1>
         <form action="update_train.php" method="post">
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
 //   print_r($id);

$t_id = $_POST['id'];
$t_name = $_POST['name'];
$d_station = $_POST['start_station'];
$d_time = $_POST['start_time'];
$a_station = $_POST['last_station'];
$a_time = $_POST['last_time'];

$con = mysqli_connect('localhost','root','','railway');

$sql = mysqli_query($con, "UPDATE `train` SET `train_name`='$t_name',`depart_station`='$d_station',`depart_time`='$d_time',`arrival_station`='$a_station',`arrival_time`='$a_time' WHERE `train_id`=$t_id");

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
        <p>TRAIN SCHEDULE TABLE</p>
       <table border="2px">
           <tr>
               <td>Train id</td>
               <td>Train Name</td>
               <td>Depart Station</td>
               <td>Depart Time</td>
               <td>Arrival Station</td>
               <td>Arrival Time</td>
       
           </tr>  
           <?php
           $con = mysqli_connect('localhost','root','','railway');
           $sql = mysqli_query($con ,"select * from train");
           while($result = mysqli_fetch_assoc($sql)){
           ?>
           <tr>
               <td><?php echo $result['train_id'];?></td>
               <td><?php echo $result['train_name'];?></td>
               <td><?php echo $result['depart_station'];?></td>
               <td><?php echo $result['depart_time'];?></td>
               <td><?php echo $result['arrival_station'];?></td>
               <td><?php echo $result['arrival_time'];?></td>


           </tr>
           <?php
           }
           ?>
           
       <table>
       
</html>