<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 28/01/2019
 * Time: 23:55
 */

namespace fabricMethod;


class CommunityExecutive implements Interviewer
{
    public function askQuestion()
    {
        echo 'Спрашивает о работе с сообществом';
    }
}