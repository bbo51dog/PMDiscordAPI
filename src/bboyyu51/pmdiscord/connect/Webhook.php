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
 * @see https://github.com/bbo51dog/PM-DiscordAPI
 * @author bbo51dog <bbo51@icloud.com>
 * @copyright 2019 bbo51dog
 */

declare(strict_types = 1);

namespace bboyyu51\pmdiscord\connect;

use bboyyu51\pmdiscord\structure\Structure;

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