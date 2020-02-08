<?php

declare(strict_types = 1);

namespace bbo51dog\pmdiscord\structure;

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