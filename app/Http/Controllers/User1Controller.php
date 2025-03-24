<?php

namespace App\Http\Controllers;

//use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use DB;
use App\Services\User1Service;

class User1Controller extends Controller
{
    use ApiResponser;
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getUsers()
    {
        
    }

    public function index()
    {
        
    }

    public function addUser(Request $request)
    {
        
    }

    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function delete($id)
    {
        
    }

}
  