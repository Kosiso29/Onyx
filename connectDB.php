<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "jsonDB";

    $conn = mysqli_connect($servername, $username, $password);

    if (!mysqli_select_db($conn, $dbName)) {
        $createDatabase = "CREATE DATABASE IF NOT EXISTS $dbName";
        mysqli_query($conn, $createDatabase);
        // create table
        $createTable = "CREATE TABLE json_details(
            id INT AUTO_INCREMENT PRIMARY KEY,
            userId INT NOT NULL,
            title VARCHAR(50) NOT NULL,
            body VARCHAR(50) NOT NULL
        )";
        $conn = mysqli_connect($servername, $username, $password, $dbName);
        mysqli_query($conn, $createTable);
        echo "<h1>Database Created</h1>";
        $id = $_GET["id0"];
        $userId = $_GET["userId0"];
        $title = $_GET["title0"];
        $body = $_GET["body0"];
        $insertTable = "INSERT INTO json_details(id, userId, title, body) VALUES ('".$_GET["id0"]."','".$_GET["userId0"]."','".$_GET["title0"]."','".$_GET["body0"]."')";
        mysqli_query($conn, $insertTable);
        $id = $_GET["id1"];
        $userId = $_GET["userId1"];
        $title = $_GET["title1"];
        $body = $_GET["body1"];
        $insertTable = "INSERT INTO json_details(id, userId, title, body) VALUES ('".$_GET["id1"]."','".$_GET["userId1"]."','".$_GET["title1"]."','".$_GET["body1"]."')";
        mysqli_query($conn, $insertTable);
        $id = $_GET["id2"];
        $userId = $_GET["userId2"];
        $title = $_GET["title2"];
        $body = $_GET["body2"];
        $insertTable = "INSERT INTO json_details(id, userId, title, body) VALUES ('".$_GET["id2"]."','".$_GET["userId2"]."','".$_GET["title2"]."','".$_GET["body2"]."')";
        mysqli_query($conn, $insertTable);
        $id = $_GET["id3"];
        $userId = $_GET["userId3"];
        $title = $_GET["title3"];
        $body = $_GET["body3"];
        $insertTable = "INSERT INTO json_details(id, userId, title, body) VALUES ('".$_GET["id3"]."','".$_GET["userId3"]."','".$_GET["title3"]."','".$_GET["body3"]."')";
        mysqli_query($conn, $insertTable);
        $id = $_GET["id4"];
        $userId = $_GET["userId4"];
        $title = $_GET["title4"];
        $body = $_GET["body4"];
        $insertTable = "INSERT INTO json_details(id, userId, title, body) VALUES ('".$_GET["id4"]."','".$_GET["userId4"]."','".$_GET["title4"]."','".$_GET["body4"]."')";
        mysqli_query($conn, $insertTable);
        $id = $_GET["id5"];
        $userId = $_GET["userId5"];
        $title = $_GET["title5"];
        $body = $_GET["body5"];
        $insertTable = "INSERT INTO json_details(id, userId, title, body) VALUES ('".$_GET["id5"]."','".$_GET["userId5"]."','".$_GET["title5"]."','".$_GET["body5"]."')";
        mysqli_query($conn, $insertTable);
        $id = $_GET["id6"];
        $userId = $_GET["userId6"];
        $title = $_GET["title6"];
        $body = $_GET["body6"];
        $insertTable = "INSERT INTO json_details(id, userId, title, body) VALUES ('".$_GET["id6"]."','".$_GET["userId6"]."','".$_GET["title6"]."','".$_GET["body6"]."')";
        mysqli_query($conn, $insertTable);
        $id = $_GET["id7"];
        $userId = $_GET["userId7"];
        $title = $_GET["title7"];
        $body = $_GET["body7"];
        $insertTable = "INSERT INTO json_details(id, userId, title, body) VALUES ('".$_GET["id7"]."','".$_GET["userId7"]."','".$_GET["title7"]."','".$_GET["body7"]."')";
        mysqli_query($conn, $insertTable);
        $id = $_GET["id8"];
        $userId = $_GET["userId8"];
        $title = $_GET["title8"];
        $body = $_GET["body8"];
        $insertTable = "INSERT INTO json_details(id, userId, title, body) VALUES ('".$_GET["id8"]."','".$_GET["userId8"]."','".$_GET["title8"]."','".$_GET["body8"]."')";
        mysqli_query($conn, $insertTable);
        $id = $_GET["id9"];
        $userId = $_GET["userId9"];
        $title = $_GET["title9"];
        $body = $_GET["body9"];
        $insertTable = "INSERT INTO json_details(id, userId, title, body) VALUES ('".$_GET["id9"]."','".$_GET["userId9"]."','".$_GET["title9"]."','".$_GET["body9"]."')";
        mysqli_query($conn, $insertTable);
        echo "<h1>Rows Added</h1>";

        $displayTable = "SELECT * FROM $dbName";
        $results = mysqli_query($conn, $displayTable);
        if ($results->num_rows > 0) {
            while($row = $results->fetch_assoc()) {
              echo "<br>"."Id: " . $row["id"]. " - UserId: " . $row["userId"]. " - Title: " . $row["title"]. " - Body: " . $row["body"]. "<br>";
            }
          }
    } else {
        echo "<h1>Database Exists</h1>";
        $conn = mysqli_connect($servername, $username, $password, $dbName);

        $displayTable = "SELECT * FROM json_details";
        $results = mysqli_query($conn, $displayTable);
        if ($results->num_rows > 0) {
            while($row = $results->fetch_assoc()) {
              echo "<br>"."Id: " . $row["id"]. " - UserId: " . $row["userId"]. " - Title: " . $row["title"]. " - Body: " . $row["body"]. "<br>";
            }
          }
    }
?>