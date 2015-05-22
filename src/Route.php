<?php

namespace Bleicker\Routing;

use ReflectionClass;

/**
 * Class Route
 *
 * @package Bleicker\Routing
 */
class Route implements RouteInterface {

	/**
	 * @var string
	 */
	protected $method;

	/**
	 * @var string
	 */
	protected $pattern;

	/**
	 * @var string
	 */
	protected $className;

	/**
	 * @var string
	 */
	protected $methodName;

	/**
	 * @param string $className
	 * @param string $methodName
	 * @param string $pattern
	 * @param string $method
	 */
	public function __construct($className, $methodName, $pattern, $method) {
		$this->className = $className;
		$this->method = $method;
		$this->methodName = $methodName;
		$this->pattern = $pattern;
	}

	/**
	 * @param string $className
	 * @param string $methodName
	 * @param string $pattern
	 * @param string $method
	 * @return static
	 */
	public static function create($className, $methodName, $pattern, $method) {
		$reflection = new ReflectionClass(static::class);
		return $reflection->newInstanceArgs(func_get_args());
	}

	/**
	 * @return string
	 */
	public function getClassName() {
		return $this->className;
	}

	/**
	 * @return string
	 */
	public function getMethod() {
		return $this->method;
	}

	/**
	 * @return string
	 */
	public function getMethodName() {
		return $this->methodName;
	}

	/**
	 * @return string
	 */
	public function getPattern() {
		return $this->pattern;
	}
}
