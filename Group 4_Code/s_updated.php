
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>RAILWAY STATION</h1>
         <form action="update_s.php" method="post">
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
        <p>RAILWAY STATION TABLE</p>

           <?php
           if(isset($_POST['id'])){
            $id=$_POST['id'];
           $con = mysqli_connect('localhost','root','','railway');
           $sql = mysqli_query($con, "SELECT* FROM station where station_id=$id");
           $result = mysqli_fetch_assoc($sql);
           //print_r($id);
       
           $sid = $result['station_id'];
           $scode = $result['station_code'];
           $sname = $result['station_name'];
           $mid = $result['master_id'];
           $zone = $result['station_zone'];
           $upz = $result['upazila'];
           $dist = $result['district'];

           
           
           ?>
        <form action = "s_update.php" method ="post">
         <table>
            <td><input type = "hidden" name = "id" value="<?php echo $id;?>">

                <tr>
                    <td>Station Id:</td>
                    <td><input type = "text" name = "sid" disabled value="<?php echo $sid;?>">
                </tr>
                <tr>
                    <td>Station Code:</td>
                    <td><input type = "text" name = "scode"  value="<?php echo $scode;?>">
                </tr>

                <tr>
                    <td>Station Name:</td>
                    <td><input type = "text" name = "sname" value="<?php echo $sname;?>">
                </tr>
                <tr>
                    <td>Master Id:</td>
                    <td><input type = "text" name = "mid" value="<?php echo $mid;?>">
                </tr>
                <tr>
                    <td>Station Zone:</td>
                    <td><input type = "text" name = "zone" value="<?php echo $zone;?>">
                </tr>
                <tr>
                    <td>Upazila:</td>
                    <td><input type = "text" name = "upz" value="<?php echo $upz;?>">
                </tr>
                <tr>
                    <td>District:</td>
                    <td><input type = "text" name = "dist" value="<?php echo $dist;?>">
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
