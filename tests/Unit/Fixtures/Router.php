<?php

namespace Tests\Bleicker\Routing\Unit\Fixtures;

use Bleicker\Routing\AbstractRouter;
use Bleicker\Routing\RouteDataInterface;

/**
 * Class Router
 *
 * @package Tests\Bleicker\Routing\Unit\Fixtures
 */
class Router extends AbstractRouter {

	/**
	 * @param string $pattern
	 * @param string $method
	 * @param RouteDataInterface $data
	 * @return $this
	 */
	public function addRoute($pattern, $method, RouteDataInterface $data) {
		return $this;
	}

	/**
	 * @param string $uri
	 * @param string $method
	 * @return array
	 */
	public function dispatch($uri, $method = 'get') {
		return [];
	}
}
