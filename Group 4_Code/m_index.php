<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>STATION MASTER</h1>
        <p>ENTER STATION MASTER INFORMATION</P>
        <form action = "m_insert.php" method ="post">
            <table>
                <tr>
                    <td>Master Id:</td>
                    <td><input type = "text" name = "mid">
                </tr>

                <tr>
                    <td>Master Name:</td>
                    <td><input type = "text" name = "name">
                </tr>
                <tr>
                    <td>Station Id:</td>
                    <td><input type = "text" name = "sid">
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
         <form action="m_table.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="See the table"></td>
                 </tr>
             </table>
         </form>
    </body>
</html>