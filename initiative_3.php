<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surplus Food Donation Form</title>
    <style>
        body {
            background-image: url(./image_back.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        fieldset {
            border: 2px solid #007bff;
            border-radius: 8px;
            padding: 20px;
        }

        legend {
            font-size: 1.2em;
            color: #007bff;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button, input[type="reset"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button {
            background-color: #007bff;
            color: #fff;
        }

        button:hover {
            background-color: #0056b3;
        }

        input[type="reset"] {
            background-color: #ccc;
            color: #333;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Surplus Food Donation Form</h2>
    <form action="#" method="post">
    <fieldset>
        <legend>DONATION INFO:</legend>
        <label for="foodName">Food Name:</label>
        <input type="text" id="foodName" name="food_name" required>

        <label for="quantity">Quantity (in kg):</label>
        <input type="number" id="quantity" name="quantity" required>

        <label for="contact">Contact Number:</label>
        <input type="number" id="contact" name="contact" required>

        <label for="expiryDate">Expiry Date:</label>
        <input type="date" id="expiryDate" name="expiry" required>

        
        <input type="submit" name="submit" value="Donate Food">
    </fieldset>
    </form>
</div>

<?php
if(isset($_POST['submit']))
{
    mysqli_query($db, "INSERT INTO `food` VALUES('{$_POST['food_name']}', '{$_POST['quantity']}', '{$_POST['contact']}','{$_POST['expiry']}')");

}
?>
</body>
</html>
