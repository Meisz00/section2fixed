<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CUSTOMER</h1>
    <hr>
    <table border = "1">
        <tr>
            <th>ID Pelanggan</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Nama Perusahaan</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Rincian</th>
            <th>Timestamp</th>
            <th>Action</th>
        </tr>
        <?php
        //include database connection
        include('config.php');

        //fetch data from the database
        $result = mysqli_query($conn, "SELECT * FROM customer");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_customer'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['company_name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['details'] . "</td>";
            echo "<td>" . $row['insert_ts'] . "</td>";
            echo "<td>
                <a href = 'editcs.php?id_customer=" . $row['id_customer'] . "'>Edit</a>
                <a href = 'deletecs.php?id_customer=" . $row['id_customer'] . "'>Delete</a>
            </td>";
            echo "</tr>"; 
        }
        ?>
    </table>
    <br>
    <div class="button">
        <a href="addcs.php">Add New Customer</a>
        <br>
        <a href="../index.html">Back to Main Menu</a>
    </div>
</body>
</html>