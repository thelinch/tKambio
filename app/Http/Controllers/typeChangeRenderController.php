<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use managmentChange\application\TypeChangeList;
use Illuminate\Support\Facades\View;
use managmentChange\application\TypeChangeFinder;
use managmentChange\application\TypeChangeUpdate;
use managmentChange\Domain\TypeChangeBuy;
use managmentChange\Domain\TypeChangeDomain;
use managmentChange\Domain\TypeChangeId;
use managmentChange\Domain\TypeChangeSales;

class typeChangeRenderController
{
    private TypeChangeFinder $finder;

    public function __construct()
    {
        $this->finder = App::make("TypeChangeFinder");
    }

    public function __invoke(string $typeChange)
    {
        $typeChangeDomain = $this->finder->__invoke(new TypeChangeId($typeChange));
        return view("typeChange.edit")->with("typeChange", $typeChangeDomain->jsonSerialize());
    }
}
