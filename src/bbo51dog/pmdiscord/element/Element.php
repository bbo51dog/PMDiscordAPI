<?php

declare(strict_types=1);
namespace bbo51dog\pmdiscord\element;

abstract class Element implements ElementType {

    protected mixed $data;

    protected string $type;

    public function getData(): mixed {
        return $this->data;
    }

    public function getType(): string {
        return $this->type;
    }
}