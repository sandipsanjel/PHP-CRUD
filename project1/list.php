<?php

// list table
//loop throughout the tabel using while loop
//session start and session end


?>

<table border="=1">
    <tr>
        <th colspan=8 align="center">
            Total logins
        </th>
    </tr>
       <th>SN: </th>

        <th>Name: </th>
        <th>Email: </th>
        <th>Subject: </th>
        <th>Message: </th>
    </tr>
    <?php
    $c = 1;
    include("conn.php");
    $sql = "select *from form";
    $qry = mysqli_query($conn, $sql);
    while ($r = mysqli_fetch_array($qry)) { //$r is used to fetch the data of current row as a assosiative array
    ?>
        <tr>
            <td><?php echo $c; ?></td>
            <td><?php echo $r["Name"]; ?></td>
            <td><?php echo $r["Email"]; ?></td>
            <td><?php echo $r["Subject"]; ?></td>
            <td><?php echo $r["Message"]; ?></td>
        </tr>
        <?php
        $c++;
    }
        ?>
        </table>