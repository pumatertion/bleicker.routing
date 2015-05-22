<?php

namespace Tests\Bleicker\Routing\Unit;

use Bleicker\Routing\Result;
use Bleicker\Routing\ResultInterface;
use Bleicker\Routing\Route;
use Bleicker\Routing\RouteInterface;
use Tests\Bleicker\Routing\UnitTestCase;

/**
 * Class ResultTest
 *
 * @package Tests\Bleicker\Routing\Unit
 */
class ResultTest extends UnitTestCase {

	/**
	 * @test
	 */
	public function createNotFoundTest() {
		$result = Result::create(Result::FOUND, Route::create('foo', 'bar', '.*', 'get'), ['foo' => 'bar']);
		$this->assertInstanceOf(ResultInterface::class, $result);
		$this->assertEquals(Result::FOUND, $result->getStatus());
		$this->assertInstanceOf(RouteInterface::class, $result->getRoute());
		$this->assertEquals(['foo' => 'bar'], $result->getArguments());
	}
}
