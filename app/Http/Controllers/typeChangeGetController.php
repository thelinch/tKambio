<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use managmentChange\application\TypeChangeList;
use Illuminate\Support\Facades\View;

class typeChangeGetController
{
    private TypeChangeList $list;

    public function __construct()
    {
        $this->list = App::make("TypeChangeList");
    }

    public function __invoke()
    {
        $list = $this->list->__invoke()->map(function ($typeChangeDomain) {
            return $typeChangeDomain->jsonSerialize();
        });
        return view('typeChange.list')->with("typeChanges", $list);
    }
}
