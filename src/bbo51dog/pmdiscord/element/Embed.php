<?php

declare(strict_types = 1);

namespace bbo51dog\pmdiscord\element;

class Embed{
    
    private $data = [];
    
    /**
     * Get data
     *
     * @return array
     */
    public function getData(): array{
        return $this->data;
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
    public function setTime(string $time): void{
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

    /**
     * Set embed authors icon url
     * 
     * @param string $url
     */
    public function setAuthorIcon(string $url): void{
        $this->data["author"]["icon_url"] = $url;
    }

    /**
     * Add field
     * 
     * @param string $name
     * @param string $value
     * @param bool $inline
     */
    public function addField(string $name, string $value, bool $inline = false): void{
        $field["name"] = $name;
        $field["value"] = $value;
        if($inline){
            $field["inline"] = true;
        }
        $this->data["fields"][] = $field;
    }
}
