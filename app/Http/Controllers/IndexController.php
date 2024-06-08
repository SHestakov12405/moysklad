<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Evgeek\Moysklad\MoySklad;
use Evgeek\Moysklad\Formatters\ArrayFormat;
use Evgeek\Moysklad\Api\Record\Objects\Entities\Product;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->ms = new MoySklad(['5d002358bd7b0ac7bb0c874cb54beb86db6ec930']);
    }


    // public function index()
    // {
    //     $stores = $this->ms->query()->entity()->store()->get();
    //     // dd($stores->rows);
    //     return view('store', ['stores' => (array)$stores->rows]);
    // }


    public function supply()
    {
        return Inertia::render('Supply', [
            'supply' => $this->ms->query()->entity()->supply()->limit(10)->expand(['group', 'agent', 'organization', 'owner', 'store.zones', 'positions.assortment'])->get()
        ]);
    }
}
