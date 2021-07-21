<?php

namespace managmentChange\application;

use managmentChange\domain\TypeChangeIRepository;
use managmentChange\domain\TypeChangeId;

class TypeChangeList
{
    private TypeChangeIRepository $repository;

    public function __construct(TypeChangeIRepository $repository)
    {
        $this->repository = $repository;
    }
    public function __invoke()
    {
        return  $this->repository->list();
    }
}
