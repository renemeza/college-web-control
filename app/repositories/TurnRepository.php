<?php

use BotDemon\Data\Repository as EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class TurnRepository extends EloquentRepository implements TurnRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('Turn');
    }

}

?>