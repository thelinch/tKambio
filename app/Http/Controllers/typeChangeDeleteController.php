<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use managmentChange\application\TypeChangeList;
use Illuminate\Support\Facades\View;
use managmentChange\application\TypeChangeDelete;
use managmentChange\Domain\TypeChangeId;

class typeChangeDeleteController
{
    private TypeChangeDelete $deleter;

    public function __construct()
    {
        $this->deleter = App::make("TypeChangeDelete");
    }

    public function __invoke(string $typeChange)
    {
        $this->deleter->__invoke(new TypeChangeId($typeChange));
        return redirect("/tc/all");
    }
}
