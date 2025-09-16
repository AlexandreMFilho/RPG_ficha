<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use App\Services\RPGService;


class RPGController extends Controller
{
    //
        public function getCriatura(Request $request)
    {
        $item = new stdClass();
        $item->id_criatura = $request->route('criatura_id');

        return RPGService::getCriatura($item);
    }

    public function getFicha(Request $request)
    {
        $item = new stdClass();
        $item->id_ficha = $request->route('id');

        return RPGService::getFicha($item);
    }
}
