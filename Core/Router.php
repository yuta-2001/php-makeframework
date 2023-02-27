<?php

/**
 * Router
 * 
 * PHP version 5.6
 */

class Router
{
    /**
     * Associative array of routes (the routing table)
     * @var array
     */
    protected $routes = [];

    /**
     * Add a route to the routing table
     *
     * @param string $route  The route URL
     * @param array  $params Parameters (controller, action, etc.)
     *
     * @return void
     */
    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    /**
     * Get all the routes from the routing table
     *
     * @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Match the route to the routes in the routing table, setting the $paeams property if a route is found.
     * 
     * @param string $url The route URL
     * 
     * @return boolean true if a match found, false otherwise
     */
    public function match($url)
    {
        // foreach ($this->routes as $route => $params) {
        //     if ($url == $route) {
        //         $this->params = $params;
        //         return true;
        //     }
        // }
        $reg_exp = "/^(?P<controller>[a-z-]+)\/(?<action>[a-z-]+)$/";
        if (preg_match($reg_exp, $url, $matches)) {
            $params = [];
            foreach ($matches as $key => $match) {
                if (is_string($key)) {
                    $params[$key] = $match;
                }
            }
            $this->params = $params;
            return true;
        }

        return false;
    }

    /**
     * Get the currently matched parameters
     * 
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }
}
