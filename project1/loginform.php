<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        form {
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 20px;
            width: 400px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        }

        form p {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px;
            width: auto;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div>
        <form action="loginpro.php" method="POST">
            <p>Login page:</p>
            <table>
                <tr>
                    <td>
                        <label>User name:</label>
                    </td>
                    <td>
                        <input type="text" name="name"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password:</label>
                    </td>
                    <td>
                        <input type="password" name="password"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Confirm password:</label>
                    </td>
                    <td>
                        <input type="password" name="Cpassword"><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit"><br>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
