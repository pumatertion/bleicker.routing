<?php

namespace Bleicker\Routing;

/**
 * Interface ResultInterface
 *
 * @package Bleicker\Routing
 */
interface ResultInterface {

	/**
	 * @return array
	 */
	public function getArguments();

	/**
	 * @return RouteInterface
	 */
	public function getRoute();

	/**
	 * @return string
	 */
	public function getStatus();
}
