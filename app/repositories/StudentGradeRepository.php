<?php

use BotDemon\Data\Repository as EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class StudentGradeRepository extends EloquentRepository implements StudentGradeRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('StudentGrade');
    }

}

?>