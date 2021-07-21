<?php
namespace managmentChange\Domain;

use JsonSerializable;
use src\Shared\Domain\Aggregate\AggregateRoot;


class TypeChangeDomain extends AggregateRoot implements JsonSerializable {
private TypeChangeId $id;
private TypeChangeSales $sales;
private  TypeChangeBuy $buy;

public function __construct(TypeChangeId $id,TypeChangeSales $sales,TypeChangeBuy $buy){
    $this->id = $id;
    $this->sales = $sales;
    $this->buy = $buy;
}


public function id():TypeChangeId {
    return $this->id;
}

public static function create(TypeChangeId $id,TypeChangeSales $sales,TypeChangeBuy $buy):self {

$typeChange=new self($id,$sales,$buy);
return $typeChange;
}
public function sales():TypeChangeSales {
    return $this->sales;
}
public function  buy():TypeChangeBuy {
    return $this->buy;
}
public function jsonSerialize(){
    return ["id"=>$this->id->value(),"tc_venta"=>$this->sales->value(),"tc_compra"=>$this->buy->value()];
}


}