<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Lifestyle Store</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        table {
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 50px;
        }

        th,
        td {
            text-align: center;
            padding: 12px;
        }

        th {
            background-color: green;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .alert {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        session_start();
        require 'connection.php';

        if (!isset($_SESSION['email'])) {
            header('location: login.php');
        }

        $user_id = $_SESSION['id'];

        // Fetch user details along with item details
        $user_products_query = "SELECT it.id, it.name AS item_name, it.price, u.name AS user_name, u.address, u.contact 
                                FROM users_itemss ut 
                                INNER JOIN items it ON it.id = ut.item_id 
                                INNER JOIN users u ON u.id = ut.user_id 
                                WHERE ut.user_id = '$user_id'";

        $user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
        $no_of_user_products = mysqli_num_rows($user_products_result);
        $sum = 0;

        if ($no_of_user_products == 0) {
            echo '<div class="alert">No items in the cart!!</div>';
        } else {
            while ($row = mysqli_fetch_array($user_products_result)) {
                $sum = $sum + $row['price'];
            }
        }
        ?>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>User Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
                $no_of_user_products = mysqli_num_rows($user_products_result);
                $counter = 1;
                while ($row = mysqli_fetch_array($user_products_result)) {
                ?>
                    <tr>
                        <td><?php echo $counter ?></td>
                        <td><?php echo $row['item_name'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['user_name'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['contact'] ?></td>
                        <td><a href='items_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></td>
                    </tr>
                <?php $counter = $counter + 1;
                } ?>
            </tbody>
        </table>
    </div>

    <footer class="footer">
        <div class="container">
            <center>
                <p>This website is developed by 4th-semester Cosmos students</p>
            </center>
        </div>
    </footer>
</body>

</html>
