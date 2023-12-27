<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_contact_type= $_POST['id_contact_type'];
    $type_name = $_POST['type_name'];
    

    $sql = "INSERT INTO contact_type (id_contact_type, type_name) VALUES ('$id_contact_type', '$type_name')";

    if (mysqli_query($conn, $sql)) {
        header("Location: indexct.php");
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
    <title>Contact Type</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add Contact Type</h1>
    <hr>
    <form action="" method="post">
        <label for="type_name">Tipe Kontak:</label>
        <input type="text" name="type_name" required>
        <br>
        <div class="button">
            <input type="submit" value="Add Contact Type">
        </div>
    </form>
    <br>
    <div class="button">
        <a href="indexct.php">Back to Contact Type</a>
    </div>
</body>
</html>
<br>
<br>