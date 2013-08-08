<?php

namespace BotDemon\Data;

interface RepositoryInterface
{
    public function findById($id);
    public function findAll();
    public function paginate($limit = null);
    public function store(array $data);
    public function update($id, array $data);
    public function destroy($id);
    public function validate(array $data);
    public function instance();
}

?>