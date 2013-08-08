<?php

use BotDemon\Data\Repository as EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class ClassRoomRepository extends EloquentRepository implements ClassRoomRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('ClassRoom');
    }

    public function getSections($id, $section_id = null)
    {
        $model = $this->validateModel();
        $sections = null;
        if(!is_null($section_id) && !empty($section_id)) {
            $sections = $model::find($id)->sections()->where('id', $section_id)->get();
        }
        else {
            $sections = $model::find($id)->sections()->get();
        }
        return $sections;
    }

    public function getSchedules($id)
    {
        $model = $this->validateModel();
        $sections = $this->findById($id)->sections()->get();
        $schedules = array();
        $sections->each(function($section) use (&$schedules) {
            $schedule = $section->schedules->toArray();
            $schedules = array_merge($schedules, $schedule);
        });

        array_walk($schedules, function(&$el, $key) {
            if(is_array($el)) $el = array_except($el, array('pivot'));
        });

        return new Collection($schedules);
    }
}

?>