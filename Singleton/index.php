<?php
/**
 * Одиночка (Singleton)
 *
 * Одиночка — порождающий шаблон проектирования, гарантирующий, что в однопроцессном приложении будет единственный
 * экземпляр некоторого класса, и предоставляющий глобальную точку доступа к этому экземпляру.
 *
 * Простыми словами: Обеспечивает тот факт, что создаваемый объект является единственным объектом своего класса.
 *
 * Первый минус - он вводит глобальное состояние в ваше приложение и его изменение в одном месте может повлиять на другие
 * части приложения, что вызовет трудности при отладке. Другой минус — это то, что он делает ваш код связанным.
 */

$president1 = \Singleton\President::getInstance();
$president2 = \Singleton\President::getInstance();

var_dump($president1 === $president2); // true