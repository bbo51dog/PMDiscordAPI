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

namespace bboyyu51\pmdiscord\structure;

class Embeds extends Structure{
    /** @var string */
    protected const TYPE = "embeds";
    
    protected $data = [];
    
    public function type(): string{
        return self::TYPE;
    }
    
    /**
     * Add embed
     *
     * @param Embed $embed
     */
    public function add(Embed $embed): void{
        $this->data[] = $embed->getData();
    }
}