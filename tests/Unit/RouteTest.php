<?php

namespace Tests\Bleicker\Routing\Unit;

use Bleicker\Routing\Route;
use Tests\Bleicker\Routing\UnitTestCase;

/**
 * Class RouteTest
 *
 * @package Tests\Bleicker\Routing\Unit
 */
class RouteTest extends UnitTestCase {

	/**
	 * @test
	 */
	public function createRouteTest() {
		$route = Route::create('foo', 'bar', 'baz', 'post');
		$this->assertEquals('foo', $route->getClassName());
		$this->assertEquals('bar', $route->getMethodName());
		$this->assertEquals('baz', $route->getPattern());
		$this->assertEquals('post', $route->getMethod());
	}
}
