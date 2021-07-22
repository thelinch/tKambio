<?php

namespace managmentChange\Infraestructure;

use managmentChange\Domain\TypeChangeBuy;
use managmentChange\Domain\TypeChangeDomain;
use managmentChange\Domain\TypeChangeId;
use managmentChange\Domain\TypeChangeIRepository;
use managmentChange\Domain\TypeChangeSales;
use managmentChange\models\Infraestructure\typeChange;

class EloquentTypeChangeRepository implements TypeChangeIRepository
{
    private typeChange $model;
    public function __construct(typeChange $model)
    {
        $this->model = $model;
    }
    function create(TypeChangeDomain $typeChange): void
    {
        $this->model->create($typeChange->jsonSerialize());
    }
    function list()
    {
        return $this->model->orderBy("fechaCreacion")->get()->map(function ($typeChangeModel) {
            return $this->transformTypeChangeModelToDomain($typeChangeModel);
        });
    }

    function update(TypeChangeDomain $typeChange): void
    {
        $typeChangeModel = $this->model->find($typeChange->id()->value());
        $typeChangeModel->tc_venta = $typeChange->sales()->value();
        $typeChangeModel->tc_compra = $typeChange->buy()->value();
        $typeChangeModel->save();
    }
    function delete(TypeChangeId $id)
    {
        $typeChangeModel = $this->model->find($id->value());
        $typeChangeModel->delete();
    }
    function findId(TypeChangeId $id): TypeChangeDomain
    {
        $typeChangeModel = $this->model->where("id", $id->value())->first();
        return $typeChangeModel != null ? $this->transformTypeChangeModelToDomain($typeChangeModel) : null;
    }
    private function  transformTypeChangeDomainToModel(TypeChangeDomain $domain): typeChange
    {
        $typeChange = new typeChange();
        $typeChange->id = $domain->id()->value();
        $typeChange->tc_venta = $domain->sales()->value();
        $typeChange->tc_compra = $domain->buy()->value();
        return $typeChange;
    }
    private function transformTypeChangeModelToDomain(typeChange $model): TypeChangeDomain
    {
        return TypeChangeDomain::create(new TypeChangeId($model->id), new TypeChangeSales($model->tc_venta), new TypeChangeBuy($model->tc_compra));
    }
}
