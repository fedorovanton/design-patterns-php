<?php
/**
 * Декоратор — структурный шаблон проектирования, предназначенный для динамического подключения дополнительного
 * поведения к объекту. Шаблон декоратор предоставляет гибкую альтернативу практике создания подклассов с целью
 * расширения функциональности.
 *
 * Простыми словами: Шаблон декоратор позволяет вам динамически изменять поведение объекта во время работы, оборачивая
 * их в объект класса декоратора.
 *
 */

$someCoffee = new \Decorator\SimpleCoffee();
echo $someCoffee->getCost(); // 10
echo $someCoffee->getDescription(); // Простой кофе

$someCoffee = new \Decorator\MilkCoffee($someCoffee);
echo $someCoffee->getCost(); // 12
echo $someCoffee->getDescription(); // Простой кофе, молоко

$someCoffee = new \Decorator\WhipCoffee($someCoffee);
echo $someCoffee->getCost(); // 17
echo $someCoffee->getDescription(); // Простой кофе, молоко, сливки

$someCoffee = new \Decorator\VanillaCoffee($someCoffee);
echo $someCoffee->getCost(); // 20
echo $someCoffee->getDescription(); // Простой кофе, молоко, сливки, ваниль