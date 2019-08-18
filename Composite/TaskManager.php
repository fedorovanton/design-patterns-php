<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 11:29
 */

namespace Composite;


class TaskManager
{
    private $assignees;

    public function performTask($task) {
        foreach ($this->assignees as $assignee) {
            if ($assignee->canHandleTask($task)) {
                $assignee->takeTask($task);
                return;
            }
        }

        throw new \Exception('Cannot handle the task - please hire more people');
    }
}