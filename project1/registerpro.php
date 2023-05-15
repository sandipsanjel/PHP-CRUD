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
        
        p {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 93%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
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
        <form action="register.php" method="POST">
            <p>Welcome to the Register page:</p>
            <label>Name:</label>
            <input type="text" name="name">

            <label>Email:</label>
            <input type="text" name="email">

            <label>Password:</label>
            <input type="password" name="password">

            <label>Confirm Password:</label>
            <input type="password" name="Cpassword">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
