<?php

namespace Bleicker\Routing;
use Bleicker\Framework\Registry;

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

	private final function __construct($cacheFile, $cacheDisabled) {
		$this->cacheFile = $cacheFile;
		$this->cacheDisabled = $cacheDisabled;
	}

	private final function __clone() {
	}
}
