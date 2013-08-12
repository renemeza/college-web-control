<?php

use BotDemon\Data\Repository as EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class TeacherRepository extends EloquentRepository implements TeacherRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('Teacher');
    }

}

?>