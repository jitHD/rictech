 <?php
 class Chat extends Core {
   public function fetchMessages($sender,$reciever) {

     $this->query("

             SELECT   `chat`.`message`,
                      `registered_users`.`name`,
                      `registered_users`.`id`
              FROM    `chat`
              JOIN    `registered_users`
              ON      `chat`.`sender_id` = `registered_users`.`id`

              WHERE  ( `chat`.`reciever_id` = ".$reciever." AND `chat`.`sender_id` = ".$sender." )
              OR    ( `chat`.`reciever_id` = ".$sender." AND `chat`.`sender_id` = ".$reciever.")
              ORDER BY `chat`.`timestamp`
              DESC
        ");
     return $this->rows();

   }

   public function throwMessages($sender_id, $reciever_id, $message) {
     $this->query("
          INSERT INTO `chat` (`sender_id`,`reciever_id`,`message`,`timestamp`)
          VALUES (".(int)$sender_id.",".(int)$reciever_id.",'".$this->db->real_escape_string(htmlentities($message))."',UNIX_TIMESTAMP())");

   }
 } ?>
