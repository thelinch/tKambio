<?php

namespace managmentChange\application;

use managmentChange\domain\TypeChangeIRepository;
use managmentChange\domain\TypeChangeBuy;
use managmentChange\domain\TypeChangeSales;
use managmentChange\domain\TypeChangeId;
use managmentChange\domain\TypeChangeDomain;

class TypeChangeDelete
{
    private TypeChangeIRepository $repository;

    public function __construct(TypeChangeIRepository $repository)
    {
        $this->repository = $repository;
    }
    public function __invoke(TypeChangeId $id)
    {
        $this->repository->delete($id);
    }
}
