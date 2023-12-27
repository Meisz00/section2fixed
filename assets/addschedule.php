<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_contact_type= $_POST['id_schedule'];
    $repair_shop_id= $_POST['repair_shop_id'];
    $employee_id= $_POST['employee_id'];
    $position_id= $_POST['position_id'];
    $schedule_date= $_POST['schedule_date'];
    $time_from= $_POST['time_from'];
    $time_to= $_POST['time_to'];
    $plan= $_POST['plan'];
    $actual= $_POST['actual'];
    $insert_ts = $_POST['insert_ts'];
    

    $sql = "INSERT INTO schedule (id_schedule, repair_shop_id, employee_id, position_id, schedule_date, time_from, time_to, plan, actual, insert_ts) VALUES ('$id_schedule', '$repair_shop_id', '$employee_id', '$position_id', '$schedule_date', '$time_from', '$time_to', '$plan', '$actual', '$insert_ts')";

    if (mysqli_query($conn, $sql)) {
        header("Location: indexschedule.php");
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
    <title>Schedule</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add Schedule</h1>
    <hr>
    <form action="" method="post">
        <label for="repair_shop_id">Id Repair Shop:</label>
        <input type="number" name="repair_shop_id" required>
        <br>
        <label for="employee_id">Id Pegawai:</label>
        <input type="number" name="employee_id" required>
        <br>
        <label for="position_id">Id Posisi:</label>
        <input type="number" name="position_id" required>
        <br>
        <label for="schedule_date">Tanggal:</label>
        <input type="date" name="schedule_date" required>
        <br>
        <label for="time_from">Waktu Mulai:</label>
        <input type="time" name="time_from" required>
        <br>
        <label for="time_to">Waktu Selesai:</label>
        <input type="time" name="time_to" required>
        <br>
        <label for="plan">Plan (0/1):</label>
        <input type="text" name="plan" required>
        <br>
        <label for="actual">Actual (0/1):</label>
        <input type="text" name="actual" required>
        <br>
        <label for="insert_ts">Timestamp (yyyy-mm-dd hh:mm:ss):</label>
        <input type="timestamp" name="insert_ts" required>
        <br>
        <div class="button">
            <input type="submit" value="Add Schedule">
        </div>
    </form>
    <br>
    <div class="button">
        <a href="indexschedule.php">Back to Schedule</a>
    </div>
</body>
</html>
