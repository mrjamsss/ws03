<?php

/**
 * Get the absolute base path of the project.
 *
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a view file from the views directory.
 *
 * @param string $name  e.g. 'error/404' → views/error/404.view.php
 * @return void
 */

/**
 * Load a partial file from the partials directory.
 *
 * @param string $name e.g. 'navbar' → views/partials/navbar.php
 * @return void
 */
function loadPartial($name)
{
    require basePath("views/partials/{$name}.php");
}

/**
 * Strip the Laragon subdirectory prefix from REQUEST_URI so route
 * matching works whether the app lives at / or /ws03/.
 *
 * @param string $uri  Raw $_SERVER['REQUEST_URI']
 * @return string      Clean URI e.g. "/" or "/listings"
 */
function normaliseUri($uri)
{
    // Remove query string
    $uri = strtok($uri, '?');

    // Remove subdirectory prefix (e.g. /ws03/public → strip /ws03/public)
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
    if ($base !== '' && strpos($uri, $base) === 0) {
        $uri = substr($uri, strlen($base));
    }

    return ($uri === '' || $uri === false) ? '/' : $uri;
}

function loadView($name, $data = [])
{
    $viewPath = basePath("views/{$name}.view.php");

    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View {$name} not found";
    }
}

function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
}
