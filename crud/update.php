<?php
include("conn.php");
$id = $_GET["id"];
// echo $id;
$sql = "select * from employee where id='$id'";
$q = mysqli_query($conn, $sql);
$r = mysqli_fetch_array($q);
// echo $r["FirstName"];
?>

<body>

    <form action="updatepro.php" method="POST">
        <table border="5" width="50%">
            <tr>
                <th>Employee mnt system</th>

            <tr>
                <td>
                    First Name:
                </td>
                <td><input type="hidden" name="id" id="id" value="<?php echo $r["id"]; ?>">
                    <input type="text" name="firstname" id="firstname" value="<?php echo $r["FirstName"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label> last name: </label>
                </td>
                <td>

                    <input type="text" name="lastname" id="lastname" value="<?php echo $r["SecondName"]; ?>">
                </td>
            </tr>
            <tr>
                <td>

                    <label>salary: </label>
                </td>
                <td> <input type="number" name="salary" id="salary" value="<?php echo $r["Salary"]; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label> age: </label>
                </td>
                <td> <input type="number" name="age" id="age" value="<?php echo $r["Age"]; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label> email: </label>
                </td>
                <td> <input type="text" name="email" id="email" value="<?php echo $r["Email"]; ?>"><br>

                </td>
            </tr>
            </tr>
            <td>
                <input type="submit" name="submit" value="Update Employee">
            </td>
            </tr>
    </form>
    </table>
</body>


</html>

<?php
