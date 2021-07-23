<?php

namespace managmentChange\application;

use managmentChange\domain\TypeChangeDomain;
use managmentChange\domain\TypeChangeIRepository;

class TypeChangeUpdate
{
    private TypeChangeIRepository $repository;

    public function __construct(TypeChangeIRepository $repository)
    {

        $this->repository = $repository;
    }
    public function __invoke(TypeChangeDomain $typeChangeDomain)
    {
        $this->repository->update($typeChangeDomain);
    }
}
