<?php

/**
 * _     _                             ____  _ 
 *| |__ | |__   ___  _   _ _   _ _   _| ___|/ |
 *| '_ \| '_ \ / _ \| | | | | | | | | |___ \| |
 *| |_) | |_) | (_) | |_| | |_| | |_| |___) | |
 *|_.__/|_.__/ \___/ \__, |\__, |\__,_|____/|_|
 *                   |___/ |___/     
 *           
 * DiscordWebhook Sample Plugin
 * 
 * @see https://github.com/bboyyu51/DiscordWebhook
 * @author bboyyu51 <bbo51@icloud.com>
 * @copyright 2019 bboyyu51
 */

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