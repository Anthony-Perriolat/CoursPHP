<?php
$_SESSION['dateFirstVisit'] = date('Y-m-d H:i:s');
$_SESSION['countViewPage'];
if (isset($_SESSION['countViewPage'])) {
    $_SESSION['countViewPage']++;
}
?>
<footer>
    <p><?= "derniere visite : " . $_SESSION['dateFirstVisit'] . " cette page à était vue " . $_SESSION['countViewPage'] ." fois." ?></p>
    <p>Mention légal Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae blanditiis eaque unde, optio
        nulla provident!</p>
    <p>Tout droit reserver de je ne sais pas où - Copyright</p>
</footer>