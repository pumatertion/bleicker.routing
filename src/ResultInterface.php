<?php

namespace Bleicker\Routing;

/**
 * Interface ResultInterface
 *
 * @package Bleicker\Routing
 */
interface ResultInterface {

	const NOT_FOUND = 'notFound';

	const FOUND = 'found';

	const METHOD_NOT_ALLOWED = 'methodNotAllowed';

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
