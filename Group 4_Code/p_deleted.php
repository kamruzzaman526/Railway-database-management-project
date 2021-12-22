
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>LOCOMASTER INFO.</h1>
         <form action="delete_p.php" method="post">
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






</body>
</html>


<?php
if(isset($_POST['id'])){
    $id=$_POST['id'];
    

    $con = mysqli_connect('localhost','root','','railway');



    $sql = mysqli_query($con, "DELETE from loco_master where id=$id");

    if($sql){
        echo 'Data Deleted....';
    }
    else{
        echo 'Data Delete Failed....!';
    }


    
}

?>


<html>
    <body>
        <p>LOCOMASTER TABLE</p>
       <table border="2px">
           <tr>
               <td>Id</td>
               <td>Name</td>
               <td>Rank</td>
               <td>Age</td>
               <td>Mobile</td>
               <td>Address</td>
               <td>Salary</td>

       
           </tr>  
           <?php
           $con = mysqli_connect('localhost','root','','railway');
           $sql = mysqli_query($con ,"select * from loco_master");
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