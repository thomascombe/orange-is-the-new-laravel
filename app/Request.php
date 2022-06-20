<?php

namespace App;

class Request
{
    private array $getParameters = [];
    private string $uri = '/';

    public function __construct()
    {
        $this->getParameters = $_GET;
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    /**
     * @return array
     */
    public function getGetParameters(): array
    {
        return $this->getParameters;
    }

    /**
     * @return mixed|string
     */
    public function getUri(): mixed
    {
        return $this->uri;
    }
}
