<?php
use PHPUnit\Framework\TestCase;

if (false === getenv('_MAINPID')) {
	putenv('_MAINPID='.posix_getpid());
}

/**
 * @runClassInSeparateProcess
 */
class Issue2724_RunClassInSeparateProcessWithoutDataProviderTest extends TestCase
{
	public function test_without_dataProvider(){
		$this->assertNotEquals((int) getenv('_MAINPID'), posix_getpid());
	}
	public function nullDataProvider(){
		return array(array(null, null, null));
	}
	/**
	 * @dataProvider nullDataProvider
	 */
	public function test_with_dataProvider(){
		$this->assertNotEquals((int) getenv('_MAINPID'), posix_getpid());
	}
}
