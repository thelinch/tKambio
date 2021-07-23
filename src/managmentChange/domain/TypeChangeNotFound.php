<?php

namespace managmentChange\domain;

use src\Shared\Domain\DomainError;

class TypeChangeNotFound extends DomainError
{
    private TypeChangeId $id;
    public function __construct(TypeChangeId $id)
    {
        $this->id = $id;
    }
    public function errorCode(): string
    {
        return "typeChange_not_found";
    }
    protected function errorMessage(): string
    {
        return sprintf("The typeChange does not exist", $this->id->value());
    }
}
