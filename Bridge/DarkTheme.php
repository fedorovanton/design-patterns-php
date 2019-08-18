<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 11:13
 */

namespace Bridge;


class DarkTheme implements Theme
{
    public function getColor()
    {
        return 'темной теме';
    }
}