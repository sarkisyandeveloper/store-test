<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductOrdersController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function store(Request $request, int $id)
    {
        return response(['data' => "This action adds the product: $id to the order"]);
    }
}
