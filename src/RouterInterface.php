<?php

namespace Bleicker\Routing;

use Closure;

/**
 * Class Router
 *
 * @package Bleicker\Routing
 */
interface RouterInterface {

	const NOT_FOUND = 0;

	const FOUND = 1;

	const METHOD_NOT_ALLOWED = 2;

	/**
	 * @param string $pattern
	 * @param string $method
	 * @param RouteDataInterface $data
	 * @return $this
	 */
	public function addRoute($pattern, $method, RouteDataInterface $data);

	/**
	 * @return array
	 */
	public function getRoutes();

	/**
	 * @param string $uri
	 * @param string $method
	 * @return array
	 */
	public function dispatch($uri, $method = 'get');

	/**
	 * @param callable $closure
	 * @return $this
	 */
	public function dispatchClosure(Closure $closure);

	/**
	 * @param string $cacheFile
	 * @param boolean $cacheDisabled
	 * @return RouterInterface
	 */
	public static function getInstance($cacheFile, $cacheDisabled = FALSE);
}
