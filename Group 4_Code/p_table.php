
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>LOCOMASTER INFO.</h1>
         <form action="p_index.php" method="post">
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
         <form action="update_p.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="Update a Master"></td>
                 </tr>
             </table>
         </form>
         <form action="delete_p.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="Delete Master"></td>
                 </tr>
             </table>
         </form>
</body>
</html>



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