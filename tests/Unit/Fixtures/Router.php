<?php

namespace Tests\Bleicker\Routing\Unit\Fixtures;

use Bleicker\Routing\Route;
use Bleicker\Routing\RouteInterface;
use Bleicker\Routing\RouterInterface;

/**
 * Class Router
 *
 * @package Tests\Bleicker\Routing\Unit\Fixtures
 */
class Router implements RouterInterface {

	/**
	 * @var RouteInterface[]
	 */
	protected $routes = [];

	/**
	 * @param string $pattern
	 * @param string $method
	 * @param string $className
	 * @param string $methodName
	 * @return $this
	 */
	public function addRoute($className, $methodName, $pattern, $method = 'get') {
		$this->routes[] = Route::create($className, $methodName, $pattern, $method);
		return $this;
	}

	/**
	 * @return RouteInterface[]
	 */
	public function getRoutes() {
		return $this->routes;
	}

	/**
	 * @param string $uri
	 * @param string $method
	 * @return RouteInterface
	 */
	public function findMatchingRoute($uri, $method = 'get') {
		return Route::create('foo', 'bar', '.*', 'get');
	}
}
