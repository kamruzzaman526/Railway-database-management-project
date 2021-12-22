
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>STATION MASTER</h1>
         <form action="m_table.php" method="post">
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
        <form action ='m_updated.php' method ='POST'>
        <tr>
                    <td>Enter Master Id for Update: </td>
                    <td><input type = "text" name = "id">
                </tr>
                
                <input type = 'submit' name='update' value = 'Update'>
      </form>





</body>
</html>


<html>
    <body>
        <p>STATION MASTER</p>
       <table border="2px">
           <tr>
               <td>Master Id</td>
               <td>Master Name</td>
               <td>Station Id</td>
               <td>Age</td>
               <td>Mobile</td>
               <td>Address</td>
               <td>Salary</td>

       
           </tr>  
           <?php
           $con = mysqli_connect('localhost','root','','railway');
           $sql = mysqli_query($con ,"select * from station_master");
           while($result = mysqli_fetch_assoc($sql)){

           ?>
           
           <tr>
               <td><?php echo $result['master_id'];?></td>
               <td><?php echo $result['master_name'];?></td>
               <td><?php echo $result['station_id'];?></td>
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