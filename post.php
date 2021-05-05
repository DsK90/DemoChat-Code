<?php
session_start();

if(isset($_SESSION['name'])){
    $text = $_POST['text'];

    $fp = fopen("log.txt", 'a');
    fwrite($fp, "<div class='msgln'>(".date("d.F.y G:i").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
}
?>
