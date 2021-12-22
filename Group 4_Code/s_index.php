<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>RAILWAY STATION</h1>
        <p>ENTER RAILWAY STATION INFORMATION</P>
        <form action = "s_insert.php" method ="post">
            <table>
                <tr>
                    <td>Station Id:</td>
                    <td><input type = "text" name = "id">
                </tr>
                <tr>
                    <td>Station Code:</td>
                    <td><input type = "text" name = "code">
                </tr>
                <tr>
                    <td>Station Name:</td>
                    <td><input type = "text" name = "name">
                </tr>
                <tr>
                    <td>Master Id:</td>
                    <td><input type = "text" name = "m_id">
                </tr>
                <tr>
                    <td>Station Zone:</td>
                    <td><input type = "text" name = "s_zone">
                </tr>
                <tr>
                    <td>Upazila :</td>
                    <td><input type = "text" name = "uzila">
                </tr>
                <tr>
                    <td>District :</td>
                    <td><input type = "text" name = "dist">
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
         <form action="s_table.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="See the table"></td>
                 </tr>
             </table>
         </form>
    </body>
</html>