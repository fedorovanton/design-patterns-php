<?php
/**
 * Адаптер (Adapter)
 *
 * Адаптер — структурный шаблон проектирования, предназначенный для организации использования функций объекта,
 * недоступного для модификации, через специально созданный интерфейс.
 */

$wildDog = new \Adapter\WildDog();
$wildDogAdapter = new \Adapter\WildDogAdapter($wildDog);

$hunter = new \Adapter\Hunter();
$hunter->hunt($wildDogAdapter);