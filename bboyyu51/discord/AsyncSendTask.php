<?php

namespace bboyyu51\discord;

use pocketmine\scheduler\AsyncTask;

class AsyncSendTask extends AsyncTask{
    public function __construct(string $message){
        $this->message = $message;
    }
    
    public function onRun(){
        Sender::Send($this->message);
    }
}