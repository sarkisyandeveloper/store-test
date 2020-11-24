<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductReviewsController extends Controller
{
    /**
     *
     * @param $id
     * @return string
     */
    public function index(int $id)
    {
        return response(["data" => ["message" => "Show all reviews for product $id"]]);
    }

    /**
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function store(Request $request, int $id)
    {
        return response(['data' => 'This action saves the review for product: ' . $id]);
    }

}
