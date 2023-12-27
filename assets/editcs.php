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

    $sql = "UPDATE customer SET first_name='$first_name', last_name='$last_name', company_name='$company_name', address='$address', mobile='$mobile', email='$email', details='$details', insert_ts='$insert_ts' WHERE id_customer=$id_customer";

    if (mysqli_query($conn, $sql)) {
        header("Location: indexcs.php");
        exit();
    } else {
        echo "Error: " .$sql. "<br>" .mysqli_error($conn);
    }
}

//fetch data based on the ID from the URL
$id_customer = $_GET['id_customer'];
$result = mysqli_query($conn, "SELECT * FROM customer WHERE id_customer=$id_customer");
$row = mysqli_fetch_assoc($result);

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
    <h1>Edit Customer</h1>
    <hr>
    <form action="" method="post">
        <input type="hidden" name="id_customer" value="<?php echo $row['id_customer']; ?>">
        <label for="first_name">Nama Depan:</label>
        <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required>
        <br>
        <label for="last_name">Nama Belakang:</label>
        <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required>
        <br>
        <label for="company_name">Nama Perusahaan:</label>
        <input type="text" name="company_name" value="<?php echo $row['company_name']; ?>" required>
        <br>
        <label for="address">Alamat:</label>
        <input type="text" name="address" value="<?php echo $row['address']; ?>" required>
        <br>
        <label for="mobile">No Telepon:</label>
        <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $row['email']; ?>" required>
        <br>
        <label for="details">Rincian:</label>
        <input type="text" name="details" value="<?php echo $row['details']; ?>" required>
        <br>
        <label for="insert_ts">Timestamp (yyyy-mm-dd hh:mm:ss):</label>
        <input type="timestamp" name="insert_ts" value="<?php echo $row['insert_ts']; ?>" required>
        <br>
        <div class="button">
            <input type="submit" value="Save Changes">
        </div>
        <br>
    </form>
    <br>
    <div class="button">
        <a href="indexcs.php">Back to Customer</a>
    </div>
</body>
</html>