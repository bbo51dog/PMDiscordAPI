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

namespace bboyyu51\pmdiscord\structure;

class Embed extends Structure{

    /** @var string */
    protected const TYPE = "embeds";
    
    private $data = [];
    
    public function type(): string{
        return self::TYPE;
    }
    
    /**
     * Set embed title
     *
     * @param string $title
     */
    public function setTitle(string $title): void{
        $this->data["title"] = $title;
    }
}