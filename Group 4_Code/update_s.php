

<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>RAILWAY STATION</h1>
         <form action="s_table.php" method="post">
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
        <form action ='s_updated.php' method ='POST'>
        <tr>
                    <td>Enter Station Id for Update: </td>
                    <td><input type = "text" name = "id">
                </tr>
                
                <input type = 'submit' name='update' value = 'Update'>
      </form>





</body>
</html>


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