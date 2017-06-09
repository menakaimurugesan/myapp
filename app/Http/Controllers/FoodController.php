<?php namespace App\Http\Controllers;

use App\Model\Food;



use App\Http\Controllers\Controller;


class FoodController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $foods = Food::all();

        return view('foods.index', compact('foods'));
    }
}
