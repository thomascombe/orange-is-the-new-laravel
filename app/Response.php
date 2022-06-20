<?php

namespace App;

class Response
{
    private ?string $content = null;

    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }
}
