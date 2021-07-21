<?php

namespace managmentChange\application;

use managmentChange\domain\TypeChangeIRepository;
use managmentChange\domain\TypeChangeBuy;
use managmentChange\domain\TypeChangeSales;
use managmentChange\domain\TypeChangeId;
use managmentChange\domain\TypeChangeDomain;

class TypeChangeCreate
{
    private TypeChangeIRepository $repository;

    public function __construct(TypeChangeIRepository $repository)
    {
        $this->repository = $repository;
    }
    public function __invoke(TypeChangeId $id, TypeChangeSales $sales, TypeChangeBuy $buy)
    {
        $typeChange = TypeChangeDomain::create($id, $sales, $buy);
        $this->repository->create($typeChange);
    }
}
