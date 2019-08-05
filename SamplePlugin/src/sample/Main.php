<?php

namespace sample;

use pocketmine\plugin\PluginBase;
use bboyyu51\discord\Sender;

class Main extends PluginBase{
    public function onEnable(){
        $this->sender = new Sender("https://discordapp.com/api/webhooks/xxxxx/xxxxx");
        $this->sender->AsyncSend("Server Opened");
    }
    
    public function onDisable(){
        $this->sender->Send("Server Closed");
    }
}