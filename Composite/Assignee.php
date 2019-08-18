<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 29/01/2019
 * Time: 11:16
 */

namespace Composite;


interface Assignee
{
    public function canHandleTask($task): bool;
    public function takeTask($task);
}