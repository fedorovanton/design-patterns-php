<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 11:22
 */

namespace Composite;


class Employee implements Assignee
{
    public function canHandleTask($task): bool
    {
        // TODO: Implement canHandleTask() method.
    }

    public function takeTask($task)
    {
        // TODO: Implement takeTask() method.
    }
}