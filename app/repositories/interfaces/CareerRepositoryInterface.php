<?php

// use BotDemon\Data;
use BotDemon\Data\RepositoryInterface as RepoInterface;

interface CareerRepositoryInterface extends RepoInterface
{
    // public function getStudents($id);
    public function getCourses($id);
    // public function findWithStudents($id);
    public function findWithCourses($id);
}
?>