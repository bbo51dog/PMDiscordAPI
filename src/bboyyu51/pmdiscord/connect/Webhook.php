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

use bboyyu51\pmdiscord\content\ContentBase;

class Webhook{

    /** @var array */
    private $data;

    public function __construct(string $webhook_url){
        $file = file_get_contents($webhook_url);
        $json = json_decode($webhook_url, true);
        $this->data["username"] = $json["name"];
        $this->data["webhook_url"] = $webhook_url;
    }

    /**
     * @param ContentBase $content
     */
    public function addContent(ContentBase $content): void{

    }
}