<?php

declare(strict_types = 1);

namespace bbo51dog\pmdiscord\connect;

use bbo51dog\pmdiscord\structure\Structure;

class Webhook{

    /** @var array */
    private $data;

    /** @var string */
    private $webhook_url;

    public function __construct(string $webhook_url){
        $this->webhook_url = $webhook_url;
    }

    /**
     * Add structure
     * @param Structure $structure
     */
    public function add(Structure $structure): void{
        $this->data[$structure->type()] = $structure->get();
    }

    /**
     * @return array
     */
    public function getData(): array{
        return $this->data;
    }
    
    /**
     * @retutn string
     */
    public function getUrl(): string{
        return $this->webhook_url;
    }
    
    /**
     * Change custom senders name
     * 
     * @param string $name
     */
    public function setCustomName(string $name): void{
        $this->data["username"] = $name;
    }
    
    /**
     * Set custom senders avatar url
     *
     * @param string $url
     */
    public function setCustomAvatar(string $url): void{
        $this->data["avatar_url"] = $url;
    }
    
    /**
     * Enable|Disable tts message
     *
     * @param bool $tts
     */
    public function setTts(bool $tts = true): void{
        $this->data["tts"] = $tts;
    }
}