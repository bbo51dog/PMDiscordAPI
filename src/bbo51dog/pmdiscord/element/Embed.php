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
     * @return self
     */
    public function setTitle(string $title): self{
        $this->data["title"] = $title;
        return $this;
    }
    
    /**
     * Set embed description
     *
     * @param string $desc
     * @return self
     */
    public function setDesc(string $desc): self{
        $this->data["description"] = $desc;
        return $this;
    }
    
    /**
     * Set title url
     *
     * @param string $url
     * @return self
     */
    public function setUrl(string $url): self{
        $this->data["url"] = $url;
        return $this;
    }
    
    /**
     * Set time stamp
     *
     * @param string $time
     * @return self
     */
    public function setTime(string $time): self{
        $this->data["timestamp"] = $time;
        return $this;
    }

    /**
     * Set embed color
     * $color is a color code which is decimal
     *
     * @param int $color 
     * @return self
     */
    public function setColor(int $color): self{
        $this->data["color"] = $color;
        return $this;
    }

    /**
     * Set image url
     *
     * @param string $url
     * @return self
     */
    public function setImage(string $url): self{
        $this->data["image"]["url"] = $url;
        return $this;
    }

    /**
     * Set thumbnail url
     *
     * @param string $url
     * @return self
     */
    public function setThumbnail(string $url): self{
        $this->data["thumbnail"]["url"] = $url;
        return $this;
    }

    /**
     * Set text in the footer
     *
     * @param string $text
     * @return self
     */
    public function setFotterText(string $text): self{
        $this->data["footer"]["text"] = $text;
        return $this;
    }

    /**
     * Set footer icon url
     *
     * @param string $url
     * @return self
     */
    public function setFooterIcon(string $url): self{
        $this->data["footer"]["icon_url"] = $url;
        return $this;
    }

    /**
     * Set embed authors name
     *
     * @param string $name
     * @return self
     */
    public function setAuthorName(string $name): self{
        $this->data["author"]["name"] = $name;
        return $this;
    }

    /**
     * Set embed authors url
     * 
     * @param string $url
     * @return self
     */
    public function setAuthorUrl(string $url): self{
        $this->data["author"]["url"] = $url;
        return $this;
    }

    /**
     * Set embed authors icon url
     * 
     * @param string $url
     * @return self
     */
    public function setAuthorIcon(string $url): self{
        $this->data["author"]["icon_url"] = $url;
        return $this;
    }

    /**
     * Add field
     * 
     * @param string $name
     * @param string $value
     * @param bool $inline
     * @return self
     */
    public function addField(string $name, string $value, bool $inline = false): self{
        $field["name"] = $name;
        $field["value"] = $value;
        if($inline){
            $field["inline"] = true;
        }
        $this->data["fields"][] = $field;
        return $this;
    }
}
