<?php
//session_destroy();
if (!isset($_SESSION['NumIndex'])) {
    header("Location: sda.php");
} else {
    $_SESSION['NumIndex'] = null;
}
header("Location: mainChoice.html");

?>
