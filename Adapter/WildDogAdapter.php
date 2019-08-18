<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 10:58
 */

namespace Adapter;

// Адаптер, чтобы сделать WildDog совместимой с нашей игрой
class WildDogAdapter implements Lion
{
    protected $dog;

    public function __construct(WildDog $dog)
    {
        $this->dog = $dog;
    }

    public function roar() {
        $this->dog->bark();
    }
}