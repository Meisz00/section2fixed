<?php
include('config.php');

//fetch ID from the URL
$id_customer = $_GET['id_customer'];

//delete data from the database
$sql = "DELETE FROM customer WHERE id_customer=$id_customer";

if (mysqli_query($conn, $sql)) {
    header("Location: indexcs.php");
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>