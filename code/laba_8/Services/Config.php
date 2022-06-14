<?php

class Config
{
	private $dataBaseConnec;

	public function __construct()
	{
		$this->dataBaseConnec = new DataBaseConnec(
			'db', 'root', 'rickroll', 'web');
	}

	public function getDbConnectionItems(): DataBaseConnec
	{
		return $this -> dataBaseConnec;
	}
}