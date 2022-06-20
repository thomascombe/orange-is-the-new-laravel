<?php

namespace App;

class Kernel
{
    public function handle(Request $request): Response
    {
        list($controller, $method) = $this->getController($request);

        $controller = sprintf('App\\Controllers\\%s', $controller);
        $controller = new $controller();
        $content = $controller->{$method}();

        return (new Response())->setContent($content);
    }

    private function getController(Request $request): ?array
    {
        $controllerConfig = self::getRouteConfig()[$request->getUri()];

        if (empty($controllerConfig)) {
            return null;
        }

        return explode('@', $controllerConfig);
    }

    public static function getRouteConfig(): array
    {
        return require(__DIR__ . '/../routes/web.php');
    }
}
