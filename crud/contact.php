<form action="contactpro.php" method="POST">

<table border="5" width=50%>
    <tr>
        <td>
            Name:
        </td>
        <td> <input type="text" name="name"><br>
        </td>
    </tr>
    <tr>
        <td>
            phone number:
        </td>
        <td> <input type="number" name="phone"><br>
        </td>
    </tr>
    <tr>
        <td>
            Email:
        </td>
        <td> <input type="text" name="email"><br>
        </td>


    </tr>
    <tr>
        
        <td align="right"> <input type="submit" name="submit"><br>
        </td>


    </tr>
    <?php
header("list.php");
?>
</table>

</form>
