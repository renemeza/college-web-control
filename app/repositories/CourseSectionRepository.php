<?php

use BotDemon\Data\Repository as EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class CourseSectionRepository extends EloquentRepository implements CourseSectionRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('CourseSection');
    }

}

?>