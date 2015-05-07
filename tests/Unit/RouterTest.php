<?php

namespace Tests\Bleicker\Routing\Unit;

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
	public function closureTest() {
		$router = Router::getInstance('foo.txt', TRUE);
		$router->dispatchClosure(function (RouterInterface $dispatchedRouter) use($router){
			$this->assertInstanceOf(Router::class, $dispatchedRouter);
			$this->assertEquals($dispatchedRouter, $router);
			$this->assertEquals([], $router->getRoutes());
		});
	}
}
