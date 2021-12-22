<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>TRAIN SCHEDULE</h1>
        <p>ENTER TRAIN SCHEDULE INFORMATION</P>
        <form action = "insert.php" method ="post">
            <table>
                <tr>
                    <td>Train id:</td>
                    <td><input type = "text" name = "id">
                </tr>
                <tr>
                    <td>Train Name:</td>
                    <td><input type = "text" name = "name">
                </tr>
                <tr>
                    <td>Depart Station:</td>
                    <td><input type = "text" name = "start_station">
                </tr>
                <tr>
                    <td>Depart Time:</td>
                    <td><input type = "time" name = "start_time">
                </tr>
                <tr>
                    <td>Arrival Station:</td>
                    <td><input type = "text" name = "last_station">
                </tr>
                <tr>
                    <td>Arrival Time:</td>
                    <td><input type = "time" name = "last_time">
                </tr>
                <tr>
                    <td><input type = "submit" name = "submit" value="Insert"></td>
                </tr>

            </table>
        </form>
        <form action="admin.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="Back"></td>
                 </tr>
             </table>
         </form>
         <form action="train_table.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="See the table"></td>
                 </tr>
             </table>
         </form>
    </body>
</html>