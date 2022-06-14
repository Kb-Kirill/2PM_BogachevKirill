<?php

function autoload(string $className)
{
	if (file_exists('Controllers/' . $className . '.php'))
	{
		require_once 'Controllers/' . $className . '.php';
	}
	elseif (file_exists('Entities/' . $className . '.php'))
	{
		require_once 'Entities/' . $className . '.php';
	}
	elseif (file_exists('services/' . $className . '.php'))
	{
		require_once 'services/' . $className . '.php';
	}
	elseif (file_exists('Page/' . $className . '.php'))
	{
		require_once 'Page/' . $className . '.php';
	}
}

spl_autoload_register('autoload');