<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 11:13
 */

namespace Bridge;


class LightTheme implements Theme
{
    public function getColor()
    {
        return 'светлой теме';
    }
}