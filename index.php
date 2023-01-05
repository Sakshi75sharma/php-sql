<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>List Of Emoployees</h2>
    <br>
    <table class="table">
        <thread>
            <tr>
                <th>emp_id</th>
                <th>emp_name</th>
                <th>emp_address</th>
                <th>emp_city</th>
                <th>is_active</th>
            </tr>
        </thread>

        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "members";

            $connection = new mysqli($servername, $username, $password, $database);

            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            $sql = "SELECT * FROM employees";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " .$connection->error);
            }

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["emp_id"] . "</td>
                    <td>" . $row["emp_name"] . "</td>
                    <td>" . $row["emp_address"] . "</td>
                    <td>" . $row["emp_city"] . "</td>
                    <td>" . $row["is_active"] . "</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>