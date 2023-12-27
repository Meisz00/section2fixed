<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_contact_type= $_POST['id_contact_type'];
    $type_name = $_POST['type_name'];

    $sql = "UPDATE contact_type SET type_name='$type_name' WHERE id_contact_type=$id_contact_type";

    if (mysqli_query($conn, $sql)) {
        header("Location: indexct.php");
        exit();
    } else {
        echo "Error: " .$sql. "<br>" .mysqli_error($conn);
    }
}

//fetch data based on the ID from the URL
$id_contact_type = $_GET['id_contact_type'];
$result = mysqli_query($conn, "SELECT * FROM contact_type WHERE id_contact_type=$id_contact_type");
$row = mysqli_fetch_assoc($result);

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
    <h1>Edit Contact Type</h1>
    <hr>
    <form action="" method="post">
        <input type="hidden" name="id_contact_type" value="<?php echo $row['id_contact_type']; ?>">
        <label for="type_name">Tipe Kontak:</label>
        <input type="text" name="type_name" value="<?php echo $row['type_name']; ?>" required>
        <br>
        <div class="button">
            <input type="submit" value="Save Changes">
        </div>
        <br>
    </form>
    <br>
    <div class="button">
        <a href="indexct.php">Back to Contact Type</a>
    </div>
</body>
</html>
<br>
<br>
