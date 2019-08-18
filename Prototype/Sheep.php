<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 09:56
 */

namespace Prototype;


class Sheep
{
    protected $name;
    protected $category;

    public function __construct(string $name, string $category = 'Горная овечка')
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}