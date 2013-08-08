<?php

use BotDemon\Data\Repository as EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class TimePeriodRepository extends EloquentRepository implements TimePeriodRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('TimePeriod');
    }

}

?>