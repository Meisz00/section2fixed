<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Type</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CONTACT TYPE</h1>
    <hr>
    <table border = "1">
        <tr>
            <th>ID Tipe Kontak</th>
            <th>Tipe Kontak</th>
            <th>Action</th>
        </tr>
        <?php
        //include database connection
        include('config.php');

        //fetch data from the database
        $result = mysqli_query($conn, "SELECT * FROM contact_type");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_contact_type'] . "</td>";
            echo "<td>" . $row['type_name'] . "</td>";
            echo "<td>
                <a href = 'editct.php?id_contact_type=" . $row['id_contact_type'] . "'>Edit</a>
                <a href = 'deletect.php?id_contact_type=" . $row['id_contact_type'] . "'>Delete</a>
            </td>";
            echo "</tr>"; 
        }
        ?>
    </table>
    <br>
    <div class="button">
        <a href="addct.php">Add New Contact Type</a>
        <br>
        <a href="../index.html">Back to Main Menu</a>
    </div>
</body>
</html>
<br>
<br>