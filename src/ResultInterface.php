<?php

namespace Bleicker\Routing;

/**
 * Interface ResultInterface
 *
 * @package Bleicker\Routing
 */
interface ResultInterface {

	const STATUS_NOT_FOUND = 0, STATUS_FOUND = 1, STATUS_METHOD_NOT_ALLOWED = 2;

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
