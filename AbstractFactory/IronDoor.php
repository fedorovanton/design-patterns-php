<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 00:05
 */

namespace AbstractFactory;


class IronDoor implements Door
{
    public function getDescription()
    {
        echo 'Я железная дверь';
    }
}