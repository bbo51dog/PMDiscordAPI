<?php

/**
 * _     _                             ____  _ 
 *| |__ | |__   ___  _   _ _   _ _   _| ___|/ |
 *| '_ \| '_ \ / _ \| | | | | | | | | |___ \| |
 *| |_) | |_) | (_) | |_| | |_| | |_| |___) | |
 *|_.__/|_.__/ \___/ \__, |\__, |\__,_|____/|_|
 *                   |___/ |___/     
 *           
 * Send Message to Discord API
 * 
 * @license https://opensource.org/licenses/mit-license.html MIT License
 * @see https://github.com/bboyyu51/PM-DiscordAPI
 * @author bboyyu51 <bbo51@icloud.com>
 * @copyright 2019 bboyyu51
 */

namespace bboyyu51\pmdiscord;

use pocketmine\Server;
use bboyyu51\pmdiscord\connect\Webhook;

class Sender{
    
    /** @var string */
    private $sender_name;
    
    /** @var string */
    private $webhook_url;
    
    public function __construct(string $webhook_url){
        $file = file_get_contents($webhook_url);
        $json = json_decode($webhook_url, true);
        $this->sender_name = $json["name"];
        $this->webhook_url = $webhook_url;
    }
    
    /**
     * Send Message to Discord
     *
     * @param string $message
     */
    public function Send(string $message): void{
        $options = [
            'http' => [
                'method' => 'POST',
                'header' => 'Content-Type: application/json',
                'content' => json_encode([
                    'username' => $this->sender_name,
                    'content' => $message,
                ]),
            ],
        ];
        $response = file_get_contents($this->webhook_url, false, stream_context_create($options));
    }
    
    /**
     * Send Message by AsyncTask
     *
     * @param string $message
     */
    public function AsyncSend(string $message){
        Server::getInstance()->getAsyncPool()->submitTask(new AsyncSendTask($message, $this));
    }
    
    /**
     * Create Webhook instance
     * 
     * @param string $webhook_url
     * @return Webhook
     */
    public static function create(string $webhook_url): Webhook{
        return new Webhook($webhook_url);
    }
}