<?php
include('config.php');

//fetch ID from the URL
$id_schedule = $_GET['id_schedule'];

//delete data from the database
$sql = "DELETE FROM schedule WHERE id_schedule=$id_schedule";

if (mysqli_query($conn, $sql)) {
    header("Location: indexschedule.php");
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
