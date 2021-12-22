
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>TTE INFO.</h1>
         <form action="update_t.php" method="post">
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
        <p>TTE INFORMATION</p>

           <?php
           if(isset($_POST['id'])){
            $id=$_POST['id'];
           $con = mysqli_connect('localhost','root','','railway');
           $sql = mysqli_query($con, "SELECT* FROM tte where id=$id");
           $result = mysqli_fetch_assoc($sql);
           //print_r($id);
       
           $mid = $result['id'];
           $name = $result['name'];
           $rank = $result['rank'];
           $age = $result['age'];
           $mob = $result['mobile'];
           $add = $result['address'];
           $sal = $result['salary'];

           
           
           ?>
        <form action = "t_update.php" method ="post">
         <table>
            <td><input type = "hidden" name = "id" value="<?php echo $id;?>">

                <tr>
                    <td>TTE Id:</td> <?php //Here TTE ID ; not id?>
                    <td><input type = "text" name = "id" disabled value="<?php echo $mid;?>">
                </tr>

                <tr>
                    <td>TTE Name:</td>
                    <td><input type = "text" name = "name" value="<?php echo $name;?>">
                </tr>
                <tr>
                    <td>Rank:</td>
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
