<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype;

abstract class BookPrototype
{
    /**
     * @var string
     */
    protected string $title;
    protected string $category;

    /**
     * @return mixed
     */
//    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
     * @return BookPrototype
     */
    public function setCategory(string $category): BookPrototype
    {
        $this->category = $category;
        return $this;
    }

}