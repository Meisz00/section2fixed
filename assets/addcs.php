<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_customer= $_POST['id_customer'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company_name = $_POST['company_name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $details = $_POST['details'];
    $insert_ts = $_POST['insert_ts'];

    $sql = "INSERT INTO customer (id_customer, first_name, last_name, company_name, address, mobile, email, details, insert_ts) VALUES ('$id_customer', '$first_name', '$last_name', '$company_name', '$address', '$mobile', '$email', '$details', '$insert_ts')";

    if (mysqli_query($conn, $sql)) {
        header("Location: indexcs.php");
        exit();
    }   else{
        echo "Error:" .$sql. "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add Customer</h1>
    <hr>
    <form action="" method="post">
        <label for="first_name">Nama Depan:</label>
        <input type="text" name="first_name" required>
        <br>
        <label for="last_name">Nama Belakang:</label>
        <input type="text" name="last_name" required>
        <br>
        <label for="company_name">Nama Perusahaan:</label>
        <input type="text" name="company_name" required>
        <br>
        <label for="address">Alamat:</label>
        <input type="text" name="address" required>
        <br>
        <label for="mobile">No Telepon:</label>
        <input type="text" name="mobile" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" required>
        <br>
        <label for="details">Rician:</label>
        <input type="text" name="details" required>
        <br>
        <label for="insert_ts">Timestamp (yyyy-mm-dd hh:mm:ss):</label>
        <input type="timestamp" name="insert_ts" required>
        <br>
        <div class="button">
            <input type="submit" value="Add Customer">
        </div>
    </form>
    <br>
    <div class="button">
        <a href="indexcs.php">Back to Customer</a>
    </div>
</body>
</html