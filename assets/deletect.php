<?php
include('config.php');

//fetch ID from the URL
$id_contact_type = $_GET['id_contact_type'];

//delete data from the database
$sql = "DELETE FROM contact_type WHERE id_contact_type=$id_contact_type";

if (mysqli_query($conn, $sql)) {
    header("Location: indexct.php");
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<br>
<br>