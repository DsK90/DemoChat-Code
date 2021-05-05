<?php require 'Registration.php';?>
<?php require 'clear_logs.php';?>
<?php require 'Logout.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>My Chatroom</title>
<link type="text/css" rel="stylesheet" href="style.css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

</head>

  <?php 
    if(!isset($_SESSION['name'])){
      loginForm();
    }
    else{
  ?>
<body>
      <div id="wrapper">
        <h1 class="headlines">Another Chatroom</h1>
        <div id="menu">
          <p class="welcome">Herzlich Willkommen, <b><?php echo $_SESSION['name']; ?></b></p>
          <p class="logout"><a id="exit" href="#">Chatroom verlassen</a></p>
          <div style="clear:both"></div>
        </div>
        <div id="chatbox">
          <?php
            if(file_exists("log.txt") && filesize("log.txt") > 0){
              $handle = fopen("log.txt", "r");
              $contents = fread($handle, filesize("log.txt"));
              fclose($handle);
              echo $contents;
            }
          ?>
        </div>

        <form name="message" action="">
          <input name="usermsg" type="text" id="usermsg" size="70" />
          <input name="submitmsg" type="submit"  id="submitmsg" value="Abschicken" />
        </form>
      </div>
      <script src="logUpdate.js" charset="utf-8"></script>
      <script src="index.js" charset="utf-8"></script>
    <?php
    }
    ?>
	
</body>
<footer>

</footer>
