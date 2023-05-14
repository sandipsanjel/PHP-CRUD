<?php
include("menu.php");
echo "<h1 >Employee Management System </h1>";
?>
<table border=1 width=100%>
    <tr>
        <th>SN</th>
        <th>FirstName</th>
        <th>SecondName</th>
        <th>Salary</th>
        <th>Age</th>
        <th>Email</th>
        <th>Action </th>
        <th>Entryby </th>
        <!-- <th>Add User</th> -->
    </tr>
    <?php
    $totalSalary = 0;
    $c = 1;

    include("conn.php");
    // include("menu.php");
    $sql = "select *from employee";      //*=all
    $qry = mysqli_query($conn, $sql);
    while ($r = mysqli_fetch_array($qry)) { //$r is used to fetch the data of current row as a assosiative array
    ?>
        <tr>
            <td><?php echo $c; ?></td>
            <td><?php echo $r["FirstName"]; ?></td>
            <td><?php echo $r["SecondName"]; ?></td>
            <td><?php echo $r["Salary"]; ?></td>
            <td><?php echo $r["Age"]; ?></td>
            <td><?php echo $r["Email"]; ?></td>
            <td> <a href="del.php?id=<?php echo $r["id"]; ?>">Delete</a>
                <a href="update.php?id=<?php echo $r["id"]; ?>">Update</a>
            </td>
            <td><?php echo $r["entryBy"]; ?></td>

        </tr>
    <?php
        $totalSalary = $totalSalary + $r["Salary"];
        $c++;
    }
    ?>
    <!-- add a new row for the total salary -->
    <tr>
        <td colspan="3" align="right"><b>TotalSalary :</b> </td>
        <td><b><?php echo  $totalSalary; ?></b></td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td colspan="7" align="center"><?php include("footer.php"); ?> </td>
    </tr>
</table>

<!-- <a href="emp.php" type="button">Add more</a> -->