
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>LOCOMASTER INFO.</h1>
        <p>ENTER LOCOMASTER INFORMATION</P>
        <form action = "p_insert.php" method ="post">
            <table>
                <tr>
                    <td>Locomaster Id:</td>
                    <td><input type = "text" name = "id">
                </tr>

                <tr>
                    <td>Locomaster Name:</td>
                    <td><input type = "text" name = "name">
                </tr>
                <tr>
                    <td>Current Rank:</td>
                    <td><input type = "text" name = "rank">
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type = "text" name = "age">
                </tr>
                <tr>
                    <td>Mobile:</td>
                    <td><input type = "text" name = "mob">
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type = "text" name = "add">
                </tr>
                <tr>
                    <td>Salary:</td>
                    <td><input type = "text" name = "sal">
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
         <form action="p_table.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="See the table"></td>
                 </tr>
             </table>
         </form>
    </body>
</html>