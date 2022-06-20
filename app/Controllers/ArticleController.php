<?php

namespace App\Controllers;

use App\Models\Article;

class ArticleController
{
    public function index()
    {
        $articles = Article::findAll();

        $articlesDom = array_map(function (Article $article) {
            return sprintf('<li>Mon titre : %s</li>', $article->getName());
        }, $articles);

        return "Articles liste<br/><ul>" . implode(PHP_EOL, $articlesDom) . "</ul>";
    }
}
