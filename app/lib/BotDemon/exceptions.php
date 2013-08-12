<?php

namespace BotDemon;

class PermissionException extends Exception
{
    public function __construct($message = null, $scope = 403)
    {
        parent::__construct($message ?: 'Accion no permitida', $scope);
    }
}


class ValidationException extends Exception
{
    protected $messages;

    public function __construct($validator)
    {
        $this->messages = $validator->messages;
        parent::__construct($this->messages, 400);
    }

    public function getMessages()
    {
        return $this->messages;
    }
}

class NotFoundException extends Exception
{
    public function __construct($message = null, $scope = 404)
    {
        parent::__construct($message, $scope);
    }
}

?>