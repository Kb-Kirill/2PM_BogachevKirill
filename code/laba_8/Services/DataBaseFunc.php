<?php

class DataBaseFunc
{
	private static $params;
	private static $db;

	public function __construct(DataBaseConnec $DBConnection)
	{
		$settings = $DBConnection->getSettings();
		self::$db = DataBaseConnec::connectToDB($settings['host'], $settings['username'], $settings['password'], $settings['dbName']);
	}

	public static function getItems(): Item
	{
		$items = [];
		$query = "SELECT CATEGORY, EMAIL, TITLE FROM web.ad;";
		$result = mysqli_query(self::$db, $query);
		foreach ($result as $row)
		{
			array_push($items, [
				$row['category'],
				$row['email'],
				$row['title'],
                $row['description']
			]);
		}

		return new Item($items);
	}

	public static function getCategories(): Categories
	{
		$categories = [];
		$query = "SELECT CATEGORY FROM web.ad";
		$result = mysqli_query(self::$db, $query);

		foreach ($result as $row)
		{
			array_push($categories, $row['category']);
		}

		return new Categories($categories);
	}

	public static function addItem($email, $title, $description, $category): void
	{
		$query = "INSERT INTO web.ad (EMAIL, TITLE, DESCRIPTION, CATEGORY)
					VALUES ($email, $title, $description, $category)";

		$preparedStatement = mysqli_prepare(self::$db, $query);
		mysqli_stmt_bind_param($preparedStatement, "s", self::$params);
		mysqli_stmt_execute($preparedStatement);
	}
}