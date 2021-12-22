
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>STATION MASTER</h1>
         <form action="m_train.php" method="post">
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
           $sql = mysqli_query($con, "SELECT* FROM station_master where master_id=$id");
           $result = mysqli_fetch_assoc($sql);
           //print_r($id);
       
           $mid = $result['master_id'];
           $name = $result['master_name'];
           $sid = $result['station_id'];
           $age = $result['age'];
           $mob = $result['mobile'];
           $add = $result['address'];
           $sal = $result['salary'];

           
           
           ?>
        <form action = "m_update.php" method ="post">
         <table>
            <td><input type = "hidden" name = "id" value="<?php echo $id;?>">

                <tr>
                    <td>Master Id:</td>
                    <td><input type = "text" name = "mid" disabled value="<?php echo $mid;?>">
                </tr>

                <tr>
                    <td>Master Name:</td>
                    <td><input type = "text" name = "name" value="<?php echo $name;?>">
                </tr>
                <tr>
                    <td>Station Id:</td>
                    <td><input type = "text" name = "sid" value="<?php echo $sid;?>">
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
