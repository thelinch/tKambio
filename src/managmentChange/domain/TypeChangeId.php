<?php
namespace managmentChange\domain;

use src\Shared\Domain\ValueObject\StringValueObject;

class TypeChangeId extends StringValueObject{
 public function __construct(string $value){

    parent::__construct($value);
 }

}