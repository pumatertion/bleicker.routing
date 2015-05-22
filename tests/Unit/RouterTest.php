<?php

namespace Tests\Bleicker\Routing\Unit;

use Bleicker\Routing\RouteInterface;
use Bleicker\Routing\RouterInterface;
use Tests\Bleicker\Routing\Unit\Fixtures\Router;
use Tests\Bleicker\Routing\UnitTestCase;

/**
 * Class RouterTest
 *
 * @package Tests\Bleicker\Routing\Unit
 */
class RouterTest extends UnitTestCase {

	/**
	 * @test
	 */
	public function instanceTest() {
		$router = new Router();
		$this->assertInstanceOf(RouterInterface::class, $router);
	}

	/**
	 * @test
	 */
	public function dispatchTest() {
		$router = new Router();
		$this->assertInstanceOf(RouteInterface::class, $router->findMatchingRoute('foo', 'get'));
	}
}
