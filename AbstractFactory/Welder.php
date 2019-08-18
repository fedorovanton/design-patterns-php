<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 00:06
 */

namespace AbstractFactory;


class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'Я работаю только с железными дверьми';
    }
}