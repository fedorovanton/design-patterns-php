<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 28/01/2019
 * Time: 23:42
 */

namespace simplyFactory;


interface Door
{
    public function getWidth(): float;
    public function getHeight(): float;
}