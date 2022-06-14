<?php

class TableController
{
	private $config;
	private static $db;
	private $items;
	private $categories;

	public function __construct()
	{
		$this->config = new Config();
		self::$db = new DataBaseFunc($this->config->getDbConnectionItems());
		$this->items = self::$db->getItems();
		$this->categories = new Categories(self::$db->getCategories());
	}

	/**
	 * @return DataBaseFunc
	 */
	public static function getDbSettings(): DataBaseFunc
	{
		return self::$db->getSettings();
	}

	public  function renderTable()
	{
		$result = [
			'items' => $this->items,
			'categories' => $this->categories
		];

		ob_start();

		require_once "Page/table.php";

		$view = ob_get_clean();

		echo $view;
	}
}