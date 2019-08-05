<?php

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