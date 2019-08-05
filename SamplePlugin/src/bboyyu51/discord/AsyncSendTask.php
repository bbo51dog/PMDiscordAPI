<?php

/**
 *
 * Send Message to Discord Library
 * 
 * @see https://github.com/bboyyu51/DiscordWebhook
 * @author bboyyu51 <bbo51@icloud.com>
 * @copyright 2019 bboyyu51
 */

namespace bboyyu51\discord;

use pocketmine\scheduler\AsyncTask;

class AsyncSendTask extends AsyncTask{
    public function __construct(string $message, Sender $sender){
        $this->message = $message;
        $this->sender = $sender;
    }
    
    public function onRun(){
        $this->sender->Send($this->message);
    }
}