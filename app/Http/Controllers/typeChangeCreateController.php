<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use managmentChange\application\TypeChangeList;
use Illuminate\Support\Facades\View;
use managmentChange\application\TypeChangeCreate;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use managmentChange\Domain\TypeChangeBuy;
use managmentChange\Domain\TypeChangeId;
use managmentChange\Domain\TypeChangeSales;
use src\Shared\Domain\UuidGenerator;
use Illuminate\Routing\Controller as BaseController;

class typeChangeCreateController extends BaseController
{
    private TypeChangeCreate $creator;
    private UuidGenerator $uuidGenerator;
    public function __construct()
    {
        $this->creator = App::make("TypeChangeCreate");
        $this->list = App::make("TypeChangeList");
    }

    public function __invoke(Request $request)
    {
        $tcData = $request->only(["tc_venta", "tc_compra"]);
        $this->creator->__invoke(new TypeChangeId(0), new TypeChangeSales($tcData["tc_venta"]), new TypeChangeBuy($tcData["tc_compra"]));
        /*  $list = $this->list->__invoke()->map(function ($typeChangeDomain) {
            return $typeChangeDomain->jsonSerialize();
        }); */
        return redirect("/tc/all");
        //return view('typeChange.list')->with("typeChanges", $list);
    }
}
