<?php

declare(strict_types=1);
namespace bbo51dog\pmdiscord\connection;

use bbo51dog\pmdiscord\element\Element;

class Webhook {

    /** @var array */
    private $data;

    /** @var string */
    private $webhook_url;

    public function __construct(string $webhook_url) {
        $this->webhook_url = $webhook_url;
    }

    /**
     * Add element
     *
     * @param Element $element
     * @return self
     */
    public function add(Element $element): self {
        $this->data[$element->type()] = $element->get();
        return $this;
    }

    /**
     * @return array
     */
    public function getData(): array {
        return $this->data;
    }

    /**
     * @retutn string
     */
    public function getUrl(): string {
        return $this->webhook_url;
    }

    /**
     * Change custom senders name
     *
     * @param string $name
     * @return self
     */
    public function setCustomName(string $name): self {
        $this->data["username"] = $name;
        return $this;
    }

    /**
     * Set custom senders avatar url
     *
     * @param string $url
     * @return self
     */
    public function setCustomAvatar(string $url): self {
        $this->data["avatar_url"] = $url;
        return $this;
    }

    /**
     * Enable|Disable tts message
     *
     * @param bool $tts
     * @return self
     */
    public function setTts(bool $tts = true): self {
        $this->data["tts"] = $tts;
        return $this;
    }
}