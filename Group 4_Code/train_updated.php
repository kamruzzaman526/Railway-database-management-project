
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>TRAIN SCHEDULE</h1>
         <form action="update_train.php" method="post">
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


<?php
/*
if(isset($_POST['id'])){
    $id=$_POST['id'];
    

    $con = mysqli_connect('localhost','root','','railway');



    $sql = mysqli_query($con, "SELECT* FROM train where train_id=$id");
    $result = mysqli_fetch_assoc($sql);
    //print_r($result);

    $tid = $result['train_id'];
    $tname = $result['train_name'];
    $dstation = $result['depart_station'];
    $dtime = $result['depart_time'];
    $astation = $result['arrival_station'];
    $atime = $result['arrival_time'];
    

    if($sql){
        echo 'Data updated';
    }
    else{
        echo 'Data is not updated';
    }


    
}
*/
?>



<html>
    <body>
        <p>TRAIN SCHEDULE TABLE</p>

           <?php
           if(isset($_POST['id'])){
            $id=$_POST['id'];
           $con = mysqli_connect('localhost','root','','railway');
           $sql = mysqli_query($con, "SELECT* FROM train where train_id=$id");
           $result = mysqli_fetch_assoc($sql);
           print_r($id);
       
           $tid = $result['train_id'];
           $tname = $result['train_name'];
           $dstation = $result['depart_station'];
           $dtime = $result['depart_time'];
           $astation = $result['arrival_station'];
           $atime = $result['arrival_time'];

           
           
           ?>
        <form action = "update.php" method ="post">
         <table>
            <td><input type = "hidden" name = "id" value="<?php echo $id;?>">

                <tr>
                    <td>Train id:</td>
                    <td><input type = "text" name = "id" disabled value="<?php echo $tid;?>">
                </tr>

                <tr>
                    <td>Train Name:</td>
                    <td><input type = "text" name = "name" value="<?php echo $tname;?>">
                </tr>
                <tr>
                    <td>Depart Station:</td>
                    <td><input type = "text" name = "start_station" value="<?php echo $dstation;?>">
                </tr>
                <tr>
                    <td>Depart Time:</td>
                    <td><input type = "time" name = "start_time" value="<?php echo $dtime;?>">
                </tr>
                <tr>
                    <td>Arrival Station:</td>
                    <td><input type = "text" name = "last_station" value="<?php echo $astation;?>">
                </tr>
                <tr>
                    <td>Arrival Time:</td>
                    <td><input type = "time" name = "last_time" value="<?php echo $atime;?>">
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

