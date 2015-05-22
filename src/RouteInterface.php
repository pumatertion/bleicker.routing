<?php

namespace Bleicker\Routing;

/**
 * Class RouteInterface
 *
 * @package Bleicker\Routing
 */
interface RouteInterface {

	/**
	 * @return string
	 */
	public function getMethod();

	/**
	 * @return string
	 */
	public function getPattern();

	/**
	 * @return string
	 */
	public function getClassName();

	/**
	 * @return string
	 */
	public function getMethodName();
}
