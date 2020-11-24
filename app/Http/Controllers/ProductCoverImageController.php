<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductCoverImageController extends Controller
{

    /**
     * @param int $id
     * @param Request $request
     * @return Response
     */
    public function update(Request $request, int $id)
    {
        return response (['data' => ['message' => 'This action update image for product:' . $id]]);
    }

}
