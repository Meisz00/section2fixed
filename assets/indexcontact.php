<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CONTACT</h1>
    <hr>
    <table border = "1">
        <tr>
            <th>ID Kontak</th>
            <th>ID Tipe Kontak</th>
            <th>ID Pelanggan</th>
            <th>ID Jadwal</th>
            <th>Detail Kontak</th>
            <th>Timestamp</th>
            <th>Action</th>
        </tr>
        <?php
        //include database connection
        include('config.php');

        //fetch data from the database
        $result = mysqli_query($conn, "SELECT * FROM contact");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_contact'] . "</td>";
            echo "<td>" . $row['id_contact_type'] . "</td>";
            echo "<td>" . $row['id_customer'] . "</td>";
            echo "<td>" . $row['id_schedule'] . "</td>";
            echo "<td>" . $row['contact_details'] . "</td>";
            echo "<td>" . $row['insert_ts'] . "</td>";
            echo "<td>
                <a href = 'editcontact.php?id_contact=" . $row['id_contact'] . "'>Edit</a>
                <a href = 'deletecontact.php?id_contact=" . $row['id_contact'] . "'>Delete</a>
            </td>";
            echo "</tr>"; 
        }
        ?>
    </table>
    <br>
    <div class="button">
        <a href="addcontact.php">Add New Contact</a>
        <br>
        <a href="../index.html">Back to Main Menu</a>
    </div>
</body>
</html>