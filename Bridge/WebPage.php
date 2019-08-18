<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 11:07
 */

namespace Bridge;


interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}