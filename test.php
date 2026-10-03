<!-- textbook shit, ik roer -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bare titel -->
    <title>test</title>

    <!-- ting der goer tabel paent -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<!-- Search bar -->
    <div class="topnav">
        <input type="text" placeholder="Search..">
    </div>
    <div class="container">

<!-- Animatronic tabel -->
        <!-- irrellevante ting -->
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Animatronic name</th>
            </tr>
        </thead>
        <tbody>
            <!-- rellevante ting -->
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "fazbear_entertainment";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM animatronics";
            $result = $conn->query($sql);

            if (!$result) {
                die("Invalid query: " . $conn->error);
            }

            while ($row = $result->fetch_assoc()) {
                $animatronic_name = htmlspecialchars($row["animatronic_name"]);

                echo "<tr>
                    <td>$animatronic_name</td>
                </tr>";
            }

            $conn->close();
            ?> 
            </tbody>
        </table>
        
<!-- Incident table -->

        <!-- setup ting -->
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Incident names</th>
            </tr>
        </thead>
        <tbody>
        <!-- rellevante ting -->
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "fazbear_entertainment";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM incidents";
            $result = $conn->query($sql);
            
            /* hvis resultatet er forkert saa giv error */
            if (!$result) {
                die("Invalid query: " . $conn->error);
            }

            /* paster alle ting fra tablet */
            while ($row = $result->fetch_assoc()) {
                $incident_name = htmlspecialchars($row["incident_name"]);

                echo "<tr>
                    <td>$incident_name</td>
                </tr>";
            }

            $conn->close();
            ?> 
            </tbody>
        </table>

<!-- Incident table -->

        <!-- setup ting -->
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Location names</th>
            </tr>
        </thead>
        <tbody>
        <!-- rellevante ting -->
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "fazbear_entertainment";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM locations";
            $result = $conn->query($sql);

            /* hvis resultatet er forkert saa giv error */
            if (!$result) {
                die("Invalid query: " . $conn->error);
            }

            /* paster alle ting fra tablet */
            while ($row = $result->fetch_assoc()) {
                $location_name = htmlspecialchars($row["location_name"]);

                echo "<tr>
                    <td>$location_name</td>
                </tr>";
            }

            $conn->close();
            ?> 
            </tbody>
        </table>

        </tbody>
    </div>
</body>
</html>
