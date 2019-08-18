<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 11:23
 */

namespace Composite;


class Team implements Assignee
{
    /** @var Assignee[] */
    private $assignees = [];

    // вспомогательные методы для управления композитом:
    public function add($assignee)
    {

    }

    public function remove($assignee)
    {

    }

    // метода интерфейса Employee
    public function canHandleTask($task): bool {
        foreach ($this->assignees as $assignee)
            if ($assignee->canHandleTask($task))
                return true;
        return false;
    }

    public function takeTask($task) {
        // может быть разная имплементация - допустим, некоторые задания требуют нескольких человек из команды одновременно
        // в простейшем случае берем первого незанятого работника среди this->assignees
        $assignee = $this->assignees[1];
        $assignee->takeTask($task);
  }
}