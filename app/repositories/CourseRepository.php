<?php

use BotDemon\Data\Repository as EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class CourseRepository extends EloquentRepository implements CourseRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('Course');
    }

}

?>