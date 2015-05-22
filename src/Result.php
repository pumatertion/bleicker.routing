<?php

namespace Bleicker\Routing;

use ReflectionClass;

/**
 * Class Result
 *
 * @package Bleicker\Routing
 */
class Result implements ResultInterface {

	/**
	 * @var string
	 */
	protected $status;

	/**
	 * @var RouteInterface
	 */
	protected $route;

	/**
	 * @var array
	 */
	protected $arguments;

	/**
	 * @param string $status
	 * @param RouteInterface $route
	 * @param array $arguments
	 */
	public function __construct($status, RouteInterface $route = NULL, array $arguments = []) {
		$this->status = $status;
		$this->route = $route;
		$this->arguments = $arguments;
	}

	/**
	 * @param string $status
	 * @param RouteInterface $route
	 * @param array $arguments
	 * @return static
	 */
	public static function create($status, RouteInterface $route = NULL, array $arguments = []) {
		$reflection = new ReflectionClass(static::class);
		return $reflection->newInstanceArgs(func_get_args());
	}

	/**
	 * @return array
	 */
	public function getArguments() {
		return $this->arguments;
	}

	/**
	 * @return RouteInterface
	 */
	public function getRoute() {
		return $this->route;
	}

	/**
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}
}
