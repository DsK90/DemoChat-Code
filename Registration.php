<?php

session_start();
error_reporting(E_ERROR | E_PARSE);
function loginForm(){
    echo'
    <div id="loginform">
    <form action="index.php" method="post">
        <p>Geben Sie hier Ihren Namen ein:</p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
    ';
}

if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
		$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
    }
    else{
        echo '<span class="error">Geben Sie bitte Ihren Namen ein</span>';
    }
}
?>
