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
 * @license https://opensource.org/licenses/mit-license.html MIT License
 * @see https://github.com/bboyyu51/PM-DiscordAPI
 * @author bboyyu51 <bbo51@icloud.com>
 * @copyright 2019 bboyyu51
 */

declare(strict_types = 1);

namespace bboyyu51\pmdiscord;

use pocketmine\scheduler\AsyncTask;
use bboyyu51\pmdiscord\connect\Webhook;

class AsyncSendTask extends AsyncTask{
    public function __construct(Webhook $webhook){
        $this->webhook = $webhook;
    }
    
    public function onRun(){
        Sender::send($this->webhook);
    }
}