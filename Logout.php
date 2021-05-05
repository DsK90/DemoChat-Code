<?php
if(isset($_GET['logout'])){

    //Simple exit message
    $fp = fopen("log.txt", 'a');
    fwrite($fp, "<div class='msgln'><i>Teilnehmer ". $_SESSION['name'] ." hat den Chat verlassen.</i><br></div>");
    fclose($fp);

    session_destroy();
    header("Location: index.php"); //Redirect the user
}

?>
