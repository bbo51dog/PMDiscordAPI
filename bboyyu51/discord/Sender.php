<?php

namespace bboyyu51\discord;

class Sender{
    
    /** @var string */
    private $sender_name;
    
    /** @var string */
    private $webhook_url;
    
    public function __construct(string $webhook_url){
        $file = file_get_contents();
        $json = json_decode($webhook_url, true);
        $this->sender_name = $json["name"];
        $this->webhook_url = $webhook_url;
    }
    
    /**
     * Send Message to Discord
     *
     * @param string $message
     */
    public function send(string $message): void{
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
}