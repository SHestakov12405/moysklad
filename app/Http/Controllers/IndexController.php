<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Evgeek\Moysklad\MoySklad;
use Evgeek\Moysklad\Formatters\ArrayFormat;
use Evgeek\Moysklad\Api\Record\Objects\Entities\Product;

class IndexController extends Controller
{
    public function Index()
    {
        $ms = new MoySklad(['5d002358bd7b0ac7bb0c874cb54beb86db6ec930']);

        $stores = $ms->query()->entity()->store()->get();
        // dd($stores->rows);
        return view('store', ['stores' => (array)$stores->rows]);
    }
}
