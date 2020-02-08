<?php

declare(strict_types = 1);

namespace bbo51dog\pmdiscord;

use bbo51dog\pmdiscord\connection\Webhook;

class Sender{
    
    /**
     * Send Message to Discord
     *
     * @param Webhook $webhook
     * @throws PMDiscordAPIException
     */
    public static function send(Webhook $webhook): void{
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $webhook->getUrl());
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($webhook->getData()));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
        ]);
        $result = curl_exec($ch);
        curl_close($ch);
        if($result === false){
            throw new PMDiscordAPIException('cURL connection failed');
        }elseif(!empty($result)){
            $result_array = json_decode($result, true);
            throw new PMDiscordAPIException("{$result_array['code']} : {$result_array['message']}");
        }
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