<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 28/01/2019
 * Time: 23:56
 */

namespace fabricMethod;


abstract class HiringManager
{
    // Фабричный метод
    abstract public function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestion();
    }
}