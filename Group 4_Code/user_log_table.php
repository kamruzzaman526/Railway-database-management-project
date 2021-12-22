
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>USER LOGIN INFO.</h1>
         <form action="admin.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="Back"></td>
                 </tr>
             </table>
         </form>

         <p>USER LOGIN TABLE</p>
         <table border="2px">
           <tr>
               <td>Id</td>
               <td>Username</td>
               <td>Password</td>

       
           </tr>  
           <?php
           $con = mysqli_connect('localhost','root','','railway');
           $sql = mysqli_query($con ,"select * from login");
           while($result = mysqli_fetch_assoc($sql)){

           ?>
           
           <tr>
               <td><?php echo $result['id'];?></td>
               <td><?php echo $result['username'];?></td>
               <td><?php echo $result['password'];?></td>

           </tr>
           <?php
           }
           ?>
           
         <table>
    </body>
       
</html>