<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "termekekdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title= $_POST['title'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $image =$_FILES['image']['name'];
    $sql = "UPDATE termekek SET id='$id', title='$title', price='$price', category='$category', image='$image' where id='$id'";

    $result = $conn->query($sql);
    header("Location: listazas.php");
} else {

    $sql = "SELECT * FROM termekek WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    ID:<input type="Text" name="id" value="<?php echo $row["id"]; ?>"><br>
    Title:<input type="Text" name="title" value="<?php echo $row["title"]; ?>"><br>
    Price:<input type="Text" name="price" value="<?php echo $row["price"]; ?>"><br>
    Category:<input type="Text" name="category" value="<?php echo $row["category"]; ?>"><br>
    Image:<input type="file" name="image" accept="image/png, image/jpeg" value="<?php echo $row["image"];?><br>
    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?> >
    <input type="Submit" name="submit" value="Elkuld">
</form>

