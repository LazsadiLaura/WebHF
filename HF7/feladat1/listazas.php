<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "termekekdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM termekek";
$result = $conn->query($sql);
echo "<a href='bevitel.php'>Új termek</a>";

if ($result->num_rows > 0) {
    echo "<table border=1>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row["id"]."</td>";
        echo "<td>". $row["title"]."</td>";
        echo "<td>". $row["price"]."</td>";
        echo "<td>". $row["category"]."</td>";
        $src = "upload/" . $row['image'];
        echo "<td>";
        echo "<img src='$src ' height='50px'>";
        echo "</td>";
        echo "<td><a href=\"update.php?id=" . $row["id"] . "\">Update</a></td>";
        echo "<td><a href=\"delete.php?id=" . $row["id"] . "\">Delete</a></td>";

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "A tabla ures";
}
$conn->close();
?>
