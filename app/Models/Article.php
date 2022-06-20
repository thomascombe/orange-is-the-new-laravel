<?php

namespace App\Models;

class Article
{
    protected array $attributes = [];

    public function __construct(array $data)
    {
        $this->attributes = $data;
    }

    public static function findAll(): array
    {
        return [
            new Article(['id' => 1, 'name' => 'Législatives : pourquoi les résultats du 1er tour sont contestés par la Nupes ?']),
            new Article(['id' => 2, 'name' => 'Canicule : Les épreuves du bac reportées à cause de la chaleur ? N\'y comptez pas']),
            new Article(['id' => 3, 'name' => 'Le RN "premier parti de France" à l\'issue des législatives? Pas si simple']),
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __get(string $name)
    {
        return $this->attributes[$name] ?? null;
    }
}
