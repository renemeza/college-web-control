<?php

use BotDemon\Data\Repository as EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class ScheduleRepository extends EloquentRepository implements ScheduleRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('Schedule');
    }

}

?>