<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 00:07
 */

namespace AbstractFactory;


class Carpenter implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'Я работаю только с деревянными дверьми';
    }
}