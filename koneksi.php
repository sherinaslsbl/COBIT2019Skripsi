<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cobit2019";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $conn;

    $result = mysqli_query($conn, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// echo "Connected successfully";
?>