<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>USER LOGIN</h1>
        <p>ENTER LOGIN INFORMATION</P>
        <form action = "log_insert.php" method ="post">
            <table>

                <tr>
                    <td>Username:</td>
                    <td><input type = "text" name = "name">
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type = "text" name = "pass">
                </tr>

                <tr>
                    <td><input type = "submit" name = "submit" value="Login"></td>
                </tr>

            </table>
        </form>
        <form action="user.php" method="post">
             <table>
                 <tr>
                     <td><input type ="submit" name ="submit" value="Back"></td>
                 </tr>
             </table>
         </form>

    </body>
</html>