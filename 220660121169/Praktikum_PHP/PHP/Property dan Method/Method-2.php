<?php

class Koneksi
{
	public function connect($username, $password, $host = 'localhost', $port = 3306)
	{
		//Logic koneksi
	}
}

$koneksi = new Koneksi();
$koneksi->connect('root', '');