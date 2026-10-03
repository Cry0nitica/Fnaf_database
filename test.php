<!DOCTYPE html>
<html lang="">
<body>
    <h1>List of Rockstar Animatronics</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>Animatronic</th>
                <th>Price</th>
                <th>ATMO</th>
                <th>H&S</th>
                <th>ENTE</th>
                <th>REVE</th>
                <th>RISK</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "fazbear_entertainment";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM rockstar_animatronics";
            // Execute the SQL query
            $result = $conn->query($sql);

            if (!$result) {
                die("Invalid query: " . $conn->error);
            }

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["Animatronic"] . "</td>
                    <td>" . $row["Price"] . "</td>
                    <td>" . $row["ATMO"] . "</td>
                    <td>" . $row["H&S"] . "</td>
                    <td>" . $row["ENTE"] . "</td>
                    <td>" . $row["REVE"] . "</td>
                    <td>" . $row["RISK"] . "</td>
                    </tr>";
            }

            $conn->close();
            ?>
             
            <tr>

    </table>
</body>
</html>
