<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_contact= $_POST['id_contact'];
    $id_contact_type = $_POST['id_contact_type'];
    $id_customer= $_POST['id_customer'];
    $id_schedule= $_POST['id_schedule'];
    $contact_details= $_POST['contact_details'];
    $insert_ts= $_POST['insert_ts'];
    

    $sql = "INSERT INTO contact (id_contact, id_contact_type,id_customer, id_schedule, contact_details, insert_ts) VALUES ('$id_contact', '$id_contact_type', '$id_customer', '$id_schedule', '$contact_details', '$insert_ts')";

    if (mysqli_query($conn, $sql)) {
        header("Location: indexcontact.php");
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
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add Contact</h1>
    <hr>
    <form action="" method="post">
        <label for="id_contact_type">ID Tipe Kontak:</label>
        <input type="number" name="id_contact_type"  required><br>
        <label for="id_customer">ID Pelanggan:</label>
        <input type="number" name="id_customer" required><br>
        <label for="id_schedule">ID Jadwal:</label>
        <input type="number" name="id_schedule" required><br>
        <label for="contact_details">Detail Kontak:</label>
        <input type="text" name="contact_details" required><br>
        <label for="insert_ts">Timestamp (yyyy-mm-dd hh:mm:ss):</label>
        <input type="timestamp" name="insert_ts" required><br>
        <br>
        <div class="button">
            <input type="submit" value="Add Contact">
        </div>
    </form>
    <br>
    <div class="button">
        <a href="indexcontact.php">Back to Contact</a>
    </div>
</body>
</html