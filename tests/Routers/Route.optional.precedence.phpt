<?php

/**
 * Test: Nette\Application\Routers\Route with optional sequence precedence.
 */

use Nette\Application\Routers\Route;


require __DIR__ . '/../bootstrap.php';

require __DIR__ . '/Route.php';


$route = new Route('[<one>/][<two>]', [
]);

testRouteIn($route, '/one', 'querypresenter', [
	'one' => 'one',
	'two' => NULL,
	'test' => 'testvalue',
], '/one/?test=testvalue&presenter=querypresenter');

$route = new Route('[<one>/]<two>', [
	'two' => NULL,
]);

testRouteIn($route, '/one', 'querypresenter', [
	'one' => 'one',
	'two' => NULL,
	'test' => 'testvalue',
], '/one/?test=testvalue&presenter=querypresenter');
