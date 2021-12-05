<?php

declare(strict_types=1);
namespace bbo51dog\pmdiscord\element;

class Content extends Element {

    /** @var string */
    protected const TYPE = "content";

    protected $data = "";

    public function type(): string {
        return self::TYPE;
    }

    /**
     * Set content text
     *
     * @param string $text
     */
    public function setText(string $text): void {
        $this->data = $text;
    }
}