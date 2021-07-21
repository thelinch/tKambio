<?php

use \Illuminate\Support\Collection;

namespace managmentChange\Domain;

interface TypeChangeIRepository
{
    function create(TypeChangeDomain $typeChange): void;
    function list();
    function update(TypeChangeDomain $typeChange): void;
    function delete(TypeChangeId $id);
}
