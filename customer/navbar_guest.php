<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .navbar {
            overflow: hidden;
            background-color: #333;
        }


        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }


        .navbar a.right {
            float: right;
        }


        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .profile {
            color: white;
            padding: 15px 100px;
            text-align: right;

        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="Home.php">Home</a>
    <a href="Cart.php">Cart</a>
    
    <!-- <a href="searchReceipt.php">Status Order</a> -->
    <a href="login.php">Login</a>
    <a href="register.php">register</a>
    <a href="logout.php">ClearSession</a>

    <div class="profile">Guest User</div>
</div>


</body>
</html>
