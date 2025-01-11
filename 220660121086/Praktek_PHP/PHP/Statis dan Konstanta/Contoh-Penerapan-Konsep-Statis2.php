<?php

class Singa
{
	public static $KAKI = 4;

	public function kaki1()
	{
		echo Singa::$KAKI;
	}

	public function kaki2()
	{
		echo self::$KAKI;
	}

	public function kaki3()
	{
		echo static::$KAKI;
	}
}

$singa = new Singa();

echo $singa->kaki1(); 
echo PHP_EOL;
echo $singa->kaki2(); 
echo PHP_EOL;
echo $singa->kaki3(); 
echo PHP_EOL;