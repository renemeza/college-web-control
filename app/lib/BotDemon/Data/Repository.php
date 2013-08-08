<?php

namespace BotDemon\Data;
use NotFoundException;

class Repository implements RepositoryInterface
{
    protected $model = null;

    public function __construct($model) {
        $this->model = class_exists($model) ? $model : null;
    }

    public function getModel()
    {
        return $this->model;
    }

    protected function validateModel()
    {
        $model = $this->model;
        if(!$model) {
            throw new Exception("El modelo debe ser un valor valido", 1);
        }
        return $model;
    }

    protected function findByMultiId(array $id_data)
    {
        $model = $this->validateModel();
        $records = null;
        if(!array_key_exists('id', $id_data) || !isset($id_data['id'])) {
            throw new Exception("Error: No se especifico un ID valido", 1);
        }
        $records = $model::where('id', $id_data['id'])->first();

        if(!$records) throw new NotFoundException("Registro no encontrada", 1);

        return $records;
    }

    public function findById($id)
    {
        if(is_array($id)) return $this->findByMultiId($id);
        return $this->findById(array('id' => $id));
    }

    public function findAll()
    {
        $model = $this->validateModel();
        $records = $model::all();
        return $records;
    }

    public function paginate($limit = null)
    {
        $model = $this->validateModel();
        return $model::paginate($limit);
    }

    public function store(array $data)
    {
        $model = $this->validateModel();
        $this->validate($data);
        return $model::create($data);
    }

    public function update($id, array $data)
    {
        $record = $this->findById($id);
        $record->fill($data);
        $this->validate($record->toArray());
        $record->save();
        return $record;
    }

    public function destroy($id)
    {
        $record = $this->findById($id_data);
        $record->delete();
        return $record;
    }

    public function validate(array $data)
    {
        $model = $this->validateModel();
        $validator = Validator::make($data, $model::getRules());
        if($validator->fails()) throw new ValidationException($validator);
        return true;
    }

    public function instance(array $data = array())
    {
        $model = $this->validateModel();
        return $model::create($data);
    }
}

?>