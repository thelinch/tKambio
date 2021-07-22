<?php

namespace managmentChange\application;

use managmentChange\domain\TypeChangeIRepository;
use managmentChange\domain\TypeChangeBuy;
use managmentChange\domain\TypeChangeSales;
use managmentChange\domain\TypeChangeId;
use managmentChange\domain\TypeChangeDomain;
use managmentChange\Domain\TypeChangeNotFound;

class TypeChangeFinder
{
    private TypeChangeIRepository $repository;

    public function __construct(TypeChangeIRepository $repository)
    {
        $this->repository = $repository;
    }
    public function __invoke(TypeChangeId $id)
    {
        $typeChangeDomain = $this->repository->findId($id);
        if (!$typeChangeDomain) {
            throw new TypeChangeNotFound($id);
        }
        return $typeChangeDomain;
    }
}
