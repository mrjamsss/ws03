<?php

class Router
{
    protected array $routes = [];

    /**
     * Register a route internally.
     */
    public function registerRoute(string $method, string $uri, string $controller): void
    {
        $this->routes[] = [
            'method'     => strtoupper($method),
            'uri'        => $uri,
            'controller' => $controller,
        ];
    }

    /** Register a GET route. */
    public function get(string $uri, string $controller): void
    {
        $this->registerRoute('GET', $uri, $controller);
    }

    /** Register a POST route. */
    public function post(string $uri, string $controller): void
    {
        $this->registerRoute('POST', $uri, $controller);
    }

    /** Register a PUT route. */
    public function put(string $uri, string $controller): void
    {
        $this->registerRoute('PUT', $uri, $controller);
    }

    /** Register a DELETE route. */
    public function delete(string $uri, string $controller): void
    {
        $this->registerRoute('DELETE', $uri, $controller);
    }

    /**
     * Load error page
     * 
     * @param int $httpCode
     * 
     * @return void
     * 
     */

    public function error($httpCode = 404)
    {
        http_response_code($httpCode);
        loadView("error/{$httpCode}");
        exit;
    }


    /**
     * Route the request
     * 
     * @param string $uri
     * @param string $method
     * @return void
     * 
     */
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if (
                $route['uri'] === $uri && $route['method']
                === $method
            ) {
                require basePath($route['controller']);
                return;
            }
        }

        $this->error();
        // http_response_code(404);
        // loadView('error/404');
    }
}
