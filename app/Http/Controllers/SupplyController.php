<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Evgeek\Moysklad\MoySklad;
use Evgeek\Moysklad\Tools\Meta;
use Evgeek\Moysklad\Api\Record\Objects\Documents\Supply;
use Evgeek\Moysklad\Api\Record\Objects\Entities\Product;

class SupplyController extends Controller
{
    public function __construct()
    {
        $this->ms = new MoySklad(['5d002358bd7b0ac7bb0c874cb54beb86db6ec930']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supply = $this->ms->query()->entity()->supply()->limit(10)->expand(['group', 'agent', 'organization', 'owner', 'store.zones', 'positions.assortment'])->get();
        // $metaSipply = $this->ms->meta()->supply('05ffa013-f7dc-11ee-0a80-088b0009c12d');

        $product = Supply::make($this->ms, ['id' => '05ffa013-f7dc-11ee-0a80-088b0009c12d'])->expand(['group', 'agent', 'organization', 'owner', 'store.zones'])->expand('owner')->get();

        // $productFilter = NamedFilter::make($this->ms, $product, [
        //     'id' => 'd9b8badf-2332-11ee-0a80-07e1001e2562'
        // ])->get();
        
        return response()->json([
            'supply' => $supply->rows,
            'metaSupplyCtd' => $product->toArray()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
