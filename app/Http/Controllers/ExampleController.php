<?php

namespace App\Http\Controllers;

class ExampleController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->middleware('api.auth');

    }
    public function index(){
        return "Good";
    }
    //
}
