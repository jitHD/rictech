<?php
require '../core/init.php';
if(isset($_POST['method']) === true && empty($_POST['method']) === false) {
  $chat = new Chat();
  $method = trim($_POST['method']);

  if($method === 'fetch') {
    $messages=$chat->fetchMessages($_SESSION['sender'],$_SESSION['reciever']);
    if(empty($messages)=== true){
      echo 'there are currently no messages in the chat';
    }else {
      foreach($messages as $message){
        ?>
          <div class="message">
            <a href="#"><?php echo $message['name']; ?></a> says:
            <p><?php echo nl2br($message['message']); ?></p>
          </div>
        <?php
      }

    }
  }else if($method === 'throw' && isset($_POST['message']) === true) {
    $message = trim($_POST['message']);
    if(empty($message) === false) {
      $chat->throwMessages($_SESSION['sender'],$_SESSION['reciever'], $message);
    }

  }
}
?>
