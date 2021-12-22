
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>RAILWAY EMPLOYEES</h1>
         <form action="update_e.php" method="post">
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



<html>
    <body>
        <p>STATION MASTER TABLE</p>

           <?php
           if(isset($_POST['id'])){
            $id=$_POST['id'];
           $con = mysqli_connect('localhost','root','','railway');
           $sql = mysqli_query($con, "SELECT* FROM employee where id=$id");
           $result = mysqli_fetch_assoc($sql);
           //print_r($id);
       
           $mid = $result['id'];
           $name = $result['name'];
           $duty = $result['duty'];
           $rank = $result['rank'];
           $age = $result['age'];
           $mob = $result['mobile'];
           $add = $result['address'];
           $sal = $result['salary'];

           
           
           ?>
        <form action = "e_update.php" method ="post">
         <table>
            <td><input type = "hidden" name = "id" value="<?php echo $id;?>">

                <tr>
                    <td>Employee Id:</td>
                    <td><input type = "text" name = "id" disabled value="<?php echo $id;?>">
                </tr>

                <tr>
                    <td>Employee Name:</td>
                    <td><input type = "text" name = "name" value="<?php echo $name;?>">
                </tr>
                <tr>
                    <td>Current Duty:</td>
                    <td><input type = "text" name = "duty" value="<?php echo $duty;?>">
                </tr>
                <tr>
                    <td>Current Rank:</td>
                    <td><input type = "text" name = "rank" value="<?php echo $rank;?>">
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type = "text" name = "age" value="<?php echo $age;?>">
                </tr>
                <tr>
                    <td>Mobile:</td>
                    <td><input type = "text" name = "mob" value="<?php echo $mob;?>">
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type = "text" name = "add" value="<?php echo $add;?>">
                </tr>
                <tr>
                    <td>Salary:</td>
                    <td><input type = "text" name = "sal" value="<?php echo $sal;?>">
                </tr>
                <tr>
                    <td><input type = "submit" name = "submit" value="Update"></td>
                </tr>

            </table>
        </form>

           <?php
           
           }
           ?>
           
    </body>

</html>
