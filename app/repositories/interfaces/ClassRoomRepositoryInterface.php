<?php


use BotDemon\Data\RepositoryInterface as RepoInterface;

interface ClassRoomRepositoryInterface extends RepoInterface
{
    public function getSections($id);
    public function getSchedules($id);
}

?>