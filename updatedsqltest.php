<!DOCTYPE html>
<html lang="en">
<head>
    <title>AgroPonics Monitor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      <link href="CSS/style.css" type="text/css" rel="stylesheet">
    </style>
    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">'; ?>
</head>
<body>

    <header>
        <h1>AgroPonics Monitor</h1>
    </header>

    <nav>
        <a href="updatedsqltest.php" class="active">Home</a>
        <a href="report.php" class="right">Report Issues</a>
    </nav>

    <main>
        <h2>CURRENT READINGS</h2>
        <h5>
            <?php
            include 'db_connection.php';

            $conn = OpenCon();

            // the function below pulls the last value
            $sql = "SELECT LastUpdated FROM ActiveData WHERE LastUpdated=(SELECT max(LastUpdated) FROM ActiveData)";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "Last updated: " . $row["LastUpdated"]. "<br>";
              }
            }
            else {
              echo "0 results";
            }

            $conn -> close();
            ?>
        </h5>
        <h5>Data will not be automatically updated, please refresh to see latest data readings.
        Please report any errors immediately :) </h5>
        <table>
            <thead>
                <tr>
                    <th scope="col">Sensor</th>
                    <th scope="col">Current Reading</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>pH</td>

                    <td>
                    <?php

                    $conn = OpenCon();

                    // the function below pulls the last value
                    $sql = "SELECT pH FROM ActiveData ORDER BY LastUpdated DESC LIMIT 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo $row["pH"]. "<br>";
                      }
                    }
                    else {
                      echo "0 results";
                    }

                    $conn -> close();
                    ?>
                    </td>

                </tr>
                <tr>
                    <td>Temperature</td>

                    <td>
                    <?php

                    $conn = OpenCon();

                    // the function below pulls the last value
                    $sql = "SELECT Temperature FROM ActiveData ORDER BY LastUpdated DESC LIMIT 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo $row["Temperature"]. "<br>";
                      }
                    }
                    else {
                      echo "0 results";
                    }

                    $conn -> close();
                    ?>
                    </td>

                </tr>
                <tr>
                    <td>Flow velocity</td>

                    <td>
                    <?php

                    $conn = OpenCon();

                    // the function below pulls the last value
                    $sql = "SELECT FlowVel FROM ActiveData ORDER BY LastUpdated DESC LIMIT 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo $row["FlowVel"]. "<br>";
                      }
                    }
                    else {
                      echo "0 results";
                    }

                    $conn -> close();
                    ?>
                    </td>


                </tr>
                <tr>
                    <td>Electrical conductivity</td>
                    <td>
                    <?php

                    $conn = OpenCon();

                    // the function below pulls the last value
                    $sql = "SELECT ElecCon FROM ActiveData ORDER BY LastUpdated DESC LIMIT 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo $row["ElecCon"]. "<br>";
                      }
                    }
                    else {
                      echo "0 results";
                    }

                    $conn -> close();
                    ?>
                    </td>

                </tr>

            </tbody>

        </table>
        <p>Last chemical input: (last chemical/chemical mix) (time)</p>
        <p>Last Arduino input: (last input) (time) </p>

    </main>

    <footer>
        <h2>"Developer" notes</h2>
        <p>Running to do list:</p>
        <ul>
            <li>
              Fix website query code
            </li>
            <li>
              Set up SQL database and tables on Raspberry Pi
            </li>
        </ul>
    </footer>

</body>
</html>
