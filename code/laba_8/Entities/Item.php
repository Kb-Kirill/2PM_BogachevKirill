<?php

class Item
{
	private $email;
	private $category;
	private $title;
    private $description;

	/**
	 * @param string $email
	 * @param string $category
	 * @param string $title
     * @param string $description
	 */
	public function __construct(string $email, string $category, string $title, string $description)
	{
		$this->email = $email;
		$this->category = $category;
		$this->title = $title;
        $this->description= $description;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getCategory(): string
	{
		return $this->category;
	}

	/**
	 * @param string $category
	 */
	public function setCategory(string $category): void
	{
		$this->category = $category;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle(string $title): void
	{
		$this->title = $title;
	}

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

}

