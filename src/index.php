<?php
    echo "Hello from the docker yooooo containers";

    $servername = "db"; // This is the service name in docker-compose.yml
    $username = "user";
    $password = "userpassword";
    $dbname = "mydatabase";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO users (name, fav_color) VALUES('Lil Sneazy', 'Yellow')";
    $result = $conn->query($sql);
    $sql = "INSERT INTO users (name, fav_color) VALUES('Nick Jonas', 'Brown')";
    $result = $conn->query($sql);
    $sql = "INSERT INTO users (name, fav_color) VALUES('Maroon 5', 'Maroon')";
    $result = $conn->query($sql);
    $sql = "INSERT INTO users (name, fav_color) VALUES('Tommy Baker', '043A2B')";
    $result = $conn->query($sql);

    $sql = 'SELECT * FROM users';

    if ($result = $conn->query($sql)) {
        while ($data = $result->fetch_object()) {
            $users[] = $data;
        }
    }
    
    foreach ($users as $user) {
        echo "<br>";
        echo $user->name . " " . $user->fav_color;
        echo "<br>";
    }

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
    echo "Connected successfully";

    // Close connection
    $conn->close();
?>
