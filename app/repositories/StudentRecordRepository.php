<?php

use BotDemon\Data\Repository as EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class StudentRecordRepository extends EloquentRepository implements StudentRecordRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('StudentRecord');
    }

}

?>