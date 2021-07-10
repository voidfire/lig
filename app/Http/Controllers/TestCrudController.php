<?php

namespace App\Http\Controllers;

use App\Repositories\TestCrudRepository;
use View;

class TestCrudController extends Controller
{
    
    public function __construct(TestCrudRepository $repository)
    {
        // parent::__construct();
        $this->repository = $repository;
    }

    public function index()
    {

        $testCruds = $this->repository->all();
        // dd($testCruds);
        return View::make('welcome')->with('testCruds', $testCruds);
    }
}

?>