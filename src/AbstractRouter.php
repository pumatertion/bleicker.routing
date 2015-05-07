<?php

namespace Bleicker\Routing;

use Closure;

/**
 * Class AbstractRouter
 *
 * @package Bleicker\Routing
 */
abstract class AbstractRouter implements RouterInterface {

	/**
	 * @var RouterInterface
	 */
	private static $instance;

	/**
	 * @var string
	 */
	protected $cacheFile;

	/**
	 * @var boolean
	 */
	protected $cacheDisabled;

	/**
	 * @var array
	 */
	protected $routes = [];

	/**
	 * @param string $cacheFile
	 * @param boolean $cacheDisabled
	 * @return RouterInterface
	 */
	public static final function getInstance($cacheFile, $cacheDisabled = FALSE) {
		if (NULL === self::$instance) {
			self::$instance = new static($cacheFile, $cacheDisabled);
		}
		return self::$instance;
	}

	/**
	 * @return array
	 */
	public function getRoutes() {
		return $this->routes;
	}

	/**
	 * @param Closure $closure
	 * @return $this
	 */
	public function dispatchClosure(Closure $closure) {
		call_user_func_array($closure, ['router' => $this]);
		return $this;
	}

	private final function __construct($cacheFile, $cacheDisabled) {
		$this->cacheFile = $cacheFile;
		$this->cacheDisabled = $cacheDisabled;
	}

	private final function __clone() {
	}
}
