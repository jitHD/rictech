<?php
session_start();

$_SESSION['sender'] =  (isset($_GET['sender']) === true) ? (int)$_GET['sender'] : 4;
$_SESSION['reciever'] = (isset($_GET['reciever']) === true) ? (int)$_GET['reciever'] : 0;

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>
    Ajax Chat
  </title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="chat">
  <div id='messages' class="messages"></div>
  <textarea class="entry" placeholder="Type here and hit return"></textarea>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/chat.js"></script>


</body>
</html>
