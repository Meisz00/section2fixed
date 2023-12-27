<?php
include('config.php');

//fetch ID from the URL
$id_contact = $_GET['id_contact'];

//delete data from the database
$sql = "DELETE FROM contact WHERE id_contact=$id_contact";

if (mysqli_query($conn, $sql)) {
    header("Location: indexcontact.php");
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>