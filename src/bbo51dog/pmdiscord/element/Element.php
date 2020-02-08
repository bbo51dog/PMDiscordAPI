<?php

declare(strict_types = 1);

namespace bbo51dog\pmdiscord\element;

abstract class Element{
    
    /** @var string */
    protected const TYPE = "base";
    
    /** @var mixed */
    protected $data;
    
    /** @return mixed */
    public function get(){
        return $this->data;
    }
    
    abstract public function type(): string;
}