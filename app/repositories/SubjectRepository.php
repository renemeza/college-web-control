<?php

use BotDemon\Data\Repository as EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class SubjectRepository extends EloquentRepository implements SubjectRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('Subject');
    }

}

?>