




<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>TRAIN SCHEDULE</h1>
         <form action="train_table.php" method="post">
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
        <form action ='train_updated.php' method ='POST'>
        <tr>
                    <td>Enter id for update: </td>
                    <td><input type = "text" name = "id">
                </tr>
                
                <input type = 'submit' name='update' value = 'Update'>
      </form>





</body>
</html>






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