<?php
/**
 * Created by PhpStorm.
 * User: antonfedorov
 * Date: 28/01/2019
 * Time: 23:59
 */

namespace fabricMethod;


class MarketingManager extends HiringManager
{
    public function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}