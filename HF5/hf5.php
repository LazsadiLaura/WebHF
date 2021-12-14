<?php


if(isset($_POST['submit'])){



  if ((isset($_POST['firstName']) && $_POST['firstName'] !== '') && (isset($_POST['lastName']) && $_POST['lastName'] !== '') && (isset($_POST['email']) && $_POST['email'] !== '')
        && isset($_POST['attend'])) {

            echo "Form: <br>";
            echo "First name: " . $_POST['firstName'] . "<br>";
            echo "Last name: " . $_POST['lastName'] . "<br>";
            echo "Email: " . $_POST['email'] . "<br>";
            echo "Attend: ";
        foreach ($_POST['attend'] as $Atend) {
            echo $Attend . " ";
        }
        echo "<br>";
        if ($_POST['tshirt'] == "P"){
            echo "T-Shirt size: Nincs kijelolve <br>";
        } else{
                echo "T-Shirt size: " . $_POST['tshirt'] . "<br>";
        }
        echo "File name: " . $_FILES['abstract']['name'] . "<br>";

    }else{
        echo "A form nem lett elkuldve!";
        echo "A problema  a kovetkezo: <br>";
        if (!(isset($_POST['firstName']) && $_POST['firstName'] !== '')) {
            echo "Nincs kitolve a firstName mezo!<br>";
        }
        if (!(isset($_POST['lastName']) && $_POST['lastName'] !== '')) {
            echo "Nincs kitolve a lastName mezo!<br>";
        }
        if (!(isset($_POST['email']) && $_POST['email'] !== '')) {
            echo "Nem adta meg az email cimet!<br>";
        }
        if (!isset($_POST['attend'])) {
            echo "Nincs kijelolve a mezo!<br>";
        }
        if (!($_FILES['abstract']['error'] == 0)) {
            echo "Sikertelen feltoltes!<br>";
        }
        
        if (!(in_array($_FILES['abstract']['type'], $valid_formats))) {
            echo "A feltoltott file nem PDF formatumu!<br>";
        }
        if (!(isset($_POST['terms']))) {
            echo "Nem fogadta el a terms & conditions!";
        }

    }
    
}
?>


<h3>Online conference registration</h3>

<form method="post" action="">
    <label for="fname"> First name:
        <input type="text" name="firstName">
    </label>
    <br><br>
    <label for="lname"> Last name:
        <input type="text" name="lastName">
    </label>
    <br><br>
    <label for="email"> E-mail:
        <input type="text" name="email">
    </label>
    <br><br>
    <label for="attend"> I will attend:<br>
        <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
        <input type="checkbox" name="attend[]" value="Event2">Event2<br>
        <input type="checkbox" name="attend[]" value="Event3">Event2<br>
        <input type="checkbox" name="attend[]" value="Event4">Event3<br>
    </label>
    <br><br>
    <label for="tshirt"> What's your T-Shirt size?<br>
        <select name="tshirt">
            <option value="P">Please select</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </label>
    <br><br>
    <label for="abstract"> Upload your abstract<br>
        <input type="file" name="abstract"/>
    </label>
    <br><br>
    <input type="checkbox" name="terms" value="">I agree to terms & conditions.<br>
    <br><br>
    <input type="submit" name="submit" value="Send registration"/>
</form>
