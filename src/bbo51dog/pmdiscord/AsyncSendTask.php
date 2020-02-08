<?php

declare(strict_types = 1);

namespace bbo51dog\pmdiscord;

use pocketmine\scheduler\AsyncTask;
use bbo51dog\pmdiscord\connect\Webhook;

class AsyncSendTask extends AsyncTask{
    public function __construct(Webhook $webhook){
        $this->webhook = $webhook;
    }
    
    public function onRun(){
        Sender::send($this->webhook);
    }
}