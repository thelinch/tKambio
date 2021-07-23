<?php

namespace managmentChange\domain;
use src\Shared\Domain\ValueObject\FloatValueObject;

class TypeChangeBuy extends  FloatValueObject{


    public function __construct(float $value) {
        parent::__construct($value);
    }

}