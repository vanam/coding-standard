<?php

class ClassWithSomeUnusedProperties extends \Consistence\Object
{

	public $publicProperty;

	protected $protectedProperty;

	private $usedProperty;

	/**
	 * @set(visibility="private")
	 */
	private $sentrySetProperty;

	/**
	 * @get
	 */
	private $sentryGetProperty;

	private $sentryPropertyValue;

	private $sentryPropertyTimestamp;

	private $unusedProperty;

	private $unusedPropertyWhichNameIsAlsoAFunction;

	private $writeOnlyProperty;

	/** @ORM\Column(name="foo") */
	private $doctrineProperty;

	private $readOnlyProperty;

	public function foo()
	{
		$this->usedProperty = foo();
		$this->usedProperty->foo();
		$this->writeOnlyProperty = 'foo';
		$this->unusedPropertyWhichNameIsAlsoAFunction();
		$this->usedPrivateMethod();

		return $this->readOnlyProperty;
	}

	private function usedPrivateMethod()
	{

	}

	private function unusedPrivateMethod()
	{

	}

	public function publicMethod()
	{

	}

	public static function staticPublicMethod()
	{
		self::usedStaticPrivateMethod();
	}

	private static function usedStaticPrivateMethod()
	{

	}

	private static function unusedStaticPrivateMethod()
	{

	}

	private function __construct()
	{

	}

}
