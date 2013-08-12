<?php

use BotDemon\Data\Repository as EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class StudentRepository extends EloquentRepository implements StudentRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('Student');
    }

}

?>