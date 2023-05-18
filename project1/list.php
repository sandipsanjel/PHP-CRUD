<?php
session_start();
$sun = $_SESSION["sun"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th colspan="6" class="text-center">Total logins</th>
            </tr>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Confirm Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $c = 1;
            include("conn.php");
            $sql = "SELECT * FROM task";
            $qry = mysqli_query($conn, $sql);
            while ($r = mysqli_fetch_array($qry)) {
                ?>
                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $r["Name"]; ?></td>
                    <td><?php echo $r["Email"]; ?></td>
                    <td><?php echo $r["Password"]; ?></td>
                    <td><?php echo $r["ConfirmPassword"]; ?></td>
                    <td>
                        <?php
                        if ($sun === 'sandip'   ) {
                            // Only allow admin user 'sandip' with role 'admin' to perform update and delete operations
                            echo "<a href='edit.php?id=".$r['id']."'>Edit</a> | ";
                            echo "<a href='del.php?id=".$r['id']."'>Delete</a>";
                        } else {
                            // Display a message for regular users or unauthorized users
                            echo "Restricted";
                        }
                        ?>
                    </td>
                </tr>
            <?php
                $c++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>
