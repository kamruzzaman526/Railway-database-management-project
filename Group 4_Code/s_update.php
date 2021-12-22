
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>RAILWAY STATION</h1>
         <form action="update_s.php" method="post">
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
 //   $id=$_GET['id'];
 //   print_r($id);

$s_id = $_POST['id'];
$s_code = $_POST['scode'];
$s_name = $_POST['sname'];
$s_mid = $_POST['mid'];
$zone = $_POST['zone'];
$upz = $_POST['upz'];
$dist = $_POST['dist'];

$con = mysqli_connect('localhost','root','','railway');

$sql = mysqli_query($con, "UPDATE `station` SET `station_code`='$s_code',`station_name`='$s_name',`master_id`='$s_mid',`station_zone`='$zone',`upazila`='$upz',`district`='$dist' WHERE `station_id`=$s_id");

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
        <p>RAILWAY STATION TABLE</p>
       <table border="2px">
           <tr>
               <td>Station Id</td>
               <td>Station Code</td>
               <td>Station Name</td>
               <td>Master Id</td>
               <td>Station Zone</td>
               <td>Upazila</td>
               <td>District</td>

       
           </tr>  
           <?php
           $con = mysqli_connect('localhost','root','','railway');
           $sql = mysqli_query($con ,"select * from station");
           while($result = mysqli_fetch_assoc($sql)){

           ?>
           
           <tr>
               <td><?php echo $result['station_id'];?></td>
               <td><?php echo $result['station_code'];?></td>
               <td><?php echo $result['station_name'];?></td>
               <td><?php echo $result['master_id'];?></td>
               <td><?php echo $result['station_zone'];?></td>
               <td><?php echo $result['upazila'];?></td>
               <td><?php echo $result['district'];?></td>

               


           </tr>
           <?php
           }
           ?>
           
       <table>
       
</html>