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
    
    /**
     * Set embed description
     *
     * @param string $desc
     */
    public function setDesc(string $desc): void{
        $this->data["description"] = $desc;
    }
    
    /**
     * Set title url
     *
     * @param string $url
     */
    public function setUrl(string $url): void{
        $this->data["url"] = $url;
    }
    
    /**
     * Set time stamp
     *
     * @param string $time
     */
    public function setTime(string $time): vooid{
        $this->data["timestamp"] = $time;
    }

    /**
     * Set embed color
     * $color is a color code which is decimal
     *
     * @param int $color 
     */
    public function setColor(int $color): void{
        $this->data["color"] = $color;
    }

    /**
     * Set image url
     *
     * @param string $url
     */
    public function setImage(string $url): void{
        $this->data["image"]["url"] = $url;
    }

    /**
     * Set thumbnail url
     *
     * @param string $url
     */
    public function setThumbnail(string $url): void{
        $this->data["thumbnail"]["url"] = $url;
    }

    /**
     * Set text in the footer
     *
     * @param string $text
     */
    public function setFotterText(string $text): void{
        $this->data["footer"]["text"] = $text;
    }

    /**
     * Set footer icon url
     *
     * @param string $url
     */
    public function setFooterIcon(string $url): void{
        $this->data["footer"]["icon_url"] = $url;
    }

    /**
     * Set embed authors name
     *
     * @param string $name
     */
    public function setAuthorName(string $name): void{
        $this->data["author"]["name"] = $name;
    }

    /**
     * Set embed authors url
     * 
     * @param string $url
     */
    public function setAuthorUrl(string $url): void{
        $this->data["author"]["url"] = $url;
    }
}
