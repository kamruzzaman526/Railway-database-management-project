
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>RAILWAY STATION</h1>
         <form action="user.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="Back"></td>
                 </tr>
             </table>
         </form>

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