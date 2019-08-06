<?php

/**
 * _     _                             ____  _ 
 *| |__ | |__   ___  _   _ _   _ _   _| ___|/ |
 *| '_ \| '_ \ / _ \| | | | | | | | | |___ \| |
 *| |_) | |_) | (_) | |_| | |_| | |_| |___) | |
 *|_.__/|_.__/ \___/ \__, |\__, |\__,_|____/|_|
 *                   |___/ |___/
 * Send Message to Discord API
 * 
 * @see https://github.com/bboyyu51/PM-DiscordAPI
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