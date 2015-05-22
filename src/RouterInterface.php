<?php

namespace Bleicker\Routing;

/**
 * Class Router
 *
 * @package Bleicker\Routing
 */
interface RouterInterface {

	/**
	 * @param string $className
	 * @param string $methodName
	 * @param string $pattern
	 * @param string $method
	 * @return $this
	 */
	public function addRoute($className, $methodName, $pattern, $method);

	/**
	 * @return RouteInterface[]
	 */
	public function getRoutes();

	/**
	 * @param string $uri
	 * @param string $method
	 * @return RouteInterface
	 */
	public function findMatchingRoute($uri, $method = 'get');
}
