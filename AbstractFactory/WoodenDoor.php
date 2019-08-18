<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 00:04
 */

namespace AbstractFactory;


class WoodenDoor implements Door
{
    public function getDescription()
    {
        echo 'Я деревянная дверь';
    }
}