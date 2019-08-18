<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 28/01/2019
 * Time: 23:54
 */

namespace fabricMethod;


class Developer implements Interviewer
{
    public function askQuestion()
    {
        echo 'Спрашивает про шаблоны проектирования';
    }
}