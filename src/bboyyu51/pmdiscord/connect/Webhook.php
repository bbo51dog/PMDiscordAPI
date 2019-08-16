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

namespace bboyyu51\pmdiscord\connect;

use bboyyu51\pmdiscord\structure\Structure;

class Webhook{

    /** @var array */
    private $data;

    /** @var string */
    private $webhook_url;

    public function __construct(string $webhook_url){
        $file = file_get_contents($webhook_url);
        $json = json_decode($file, true);
        $this->data["username"] = $json["name"];
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
}