<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use managmentChange\application\TypeChangeList;
use Illuminate\Support\Facades\View;
use managmentChange\application\TypeChangeUpdate;
use managmentChange\Domain\TypeChangeBuy;
use managmentChange\Domain\TypeChangeDomain;
use managmentChange\Domain\TypeChangeId;
use managmentChange\Domain\TypeChangeSales;

class typeChangeUpdateController
{
    private TypeChangeUpdate $updater;

    public function __construct()
    {
        $this->updater = App::make("TypeChangeUpdate");
    }

    public function __invoke(Request $request)
    {
        $tcData = $request->only(["tc_venta", "tc_compra", "id"]);
        $this->updater->__invoke(TypeChangeDomain::create(new TypeChangeId($tcData["id"]), new TypeChangeSales($tcData["tc_venta"]), new TypeChangeBuy($tcData["tc_compra"])));
        return redirect("/tc/all");
    }
}
