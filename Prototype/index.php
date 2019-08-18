<?php
/**
 * Прототип (Prototype)
 *
 * Задаёт виды создаваемых объектов с помощью экземпляра-прототипа и создаёт новые объекты путём копирования этого
 * прототипа. Он позволяет уйти от реализации и позволяет следовать принципу «программирование через интерфейсы».
 * В качестве возвращающего типа указывается интерфейс / абстрактный класс на вершине иерархии, а классы-наследники
 * могут подставить туда наследника, реализующего этот тип
 *
 * Простыми словами: Прототип создает объект, основанный на существующем объекте при помощи клонирования.
 *
 * Когда использовать: Когда необходим объект, похожий на существующий объект, либо когда создание будет
 * дороже клонирования.
 *
 */

$original = new \Prototype\Sheep('Джолли');
echo $original->getName(); // Джолли
echo $original->getCategory(); // Горная овечка

// Клонируем и модифицируем то что нужно
$cloned = clone $original;
$cloned->setName('Долли');
echo $cloned->getName(); // Долли
echo $cloned->getCategory(); // Горная овечка