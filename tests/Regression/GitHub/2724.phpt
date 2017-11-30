--TEST--
GH-2724: Missing initialization of setRunClassInSeparateProcess() for tests without data providers
--FILE--
<?php

$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--bootstrap';
$_SERVER['argv'][3] = __DIR__ . '/2724/bootstrap.php';
$_SERVER['argv'][4] = __DIR__ . '/2724/RunClassInSeparateProcessWithoutDataProviderTest.php';

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: %s, Memory: %s

OK (2 tests, 2 assertions)
