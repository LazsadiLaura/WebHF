<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title= $_POST['title'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $image = isset($_FILES['image']['tmp_name']) ? $_FILES['image']['tmp_name'] : "";

    $conn = new mysqli("localhost", "root", "", "termekekdb");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO termekek (id,title,price,category,image) VALUES ('$id,$title,$price,$category,$image')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        echo "Köszönjük! Az adatokat elmentettük.<br>";
        echo "<a href='bevitel.php'>Uj adat</a><br>";
        echo "<a href='listazas.php'>Adatok listazasa</a><br>";
    }else{
        echo "Muveleti hiba.\n";
    }
}
    ?>



    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        ID:<input type="Text" name="id"><br>
        Title:<input type="Text" name="title"><br>
        Price:<input type="Text" name="price"><br>
        Category:<input type="Text" name="category"><br>
        Image:<input type="file" name="image" accept="image/png, image/jpeg"><br>
        <input type="Submit" name="submit" value="Elkuld">
    </form>



</body>
</html>

