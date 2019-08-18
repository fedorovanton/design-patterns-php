<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 11:14
 */

namespace Bridge;


class AquaTheme implements Theme
{
    public function getColor()
    {
        return 'голубой теме';
    }
}