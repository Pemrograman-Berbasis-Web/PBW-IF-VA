<?php

class Lingkaran
{
   public const PI = 3.14;

   public static function luas($jari)
   {
   	echo self::PI * $jari * $jari;
   }
}

echo Lingkaran::PI;
echo PHP_EOL;
Lingkaran::luas(7); 
echo PHP_EOL;