
<body>
<?php
include("menu.php");
?>

    <form action="emppro.php" method="POST">
        <table border="5" width="50%">
           
                <td>
                    <label> first name: </label>
                </td>
                <td><input type="text" name="firstname"  ><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label> last name: </label>
                </td>
                <td>
                    <input type="text" name="lastname"><br>
                </td>
            </tr>
            <tr>
                <td>

                    <label>salary: </label>
                </td>
                <td> <input type="number" name="salary"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label> age: </label>
                </td>
                <td> <input type="number" name="age"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label> email: </label>
                </td>
                <td> <input type="text" name="email"><br>
                </td>
            </tr>
            <tr>
                
            </tr>
            </tr>
            <td>
                <input type="submit"  name="submit" value="Submit">
            </td>
            </tr>
    </form>
    </table>
</body>


</html>

<?php
