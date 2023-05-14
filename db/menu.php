<?php
session_start();
?>
<table border="5" >


    <td colspan="3" align="center">menu</td>
    <tr>

        <td>
            <a href="emp.php">Add employee</a>
        </td>
        <td>
            <a href="list.php">List Employee</a>
        </td>
        <td>
            <a href="contact.php">Contact us</a>
        </td>
        <td>
            Logged in User : (<?php echo  $_SESSION["sun"]; ?>)
        </td>
      
        <td>
            <a href= "Logout.php">logout</a>
        </td>
      
        
    </tr>
</table>