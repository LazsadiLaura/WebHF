<?php
session_start();

if(isset($_POST['elkuldott'])){
        if (isset($_SESSION['gszam'])) {
            talalgatas($_POST['talalgatas'], $_SESSION['gszam']);
        } else {
            $_SESSION['gszam'] = rand(1, 10);
            talalgatas($_POST['talalgatas'], $_SESSION['gszam']);
        }
}


function talalgatas($kuldottSzam, $generaltSzam)
{
    if ($_POST['talalgatas'] >= 1 && $_POST['talalgatas'] <= 10) {
        if($kuldottSzam>$generaltSzam){
            echo "A szam kisebb:" . $generaltSzam;
        }elseif($kuldottSzam<$generaltSzam){
            echo "A szam nagyobb:". $generaltSzam;
        }else{
            echo "A szam megegyezik.";
        }}
    else{
            echo "1 es 10 kozotti szamot kerek!";
        }

}
?>

<form method="post" action="">
    <input type="hidden" name="elkuldott" value="true">
    Melyik számra gondoltam 1 és 10 között?
    <input name="talalgatas" type="text">
    <br>
    <br>
    <input type="submit" value="Elküld">
</form>