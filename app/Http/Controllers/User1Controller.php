<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response; 
use Illuminate\Http\Request; 
use App\Traits\ApiResponser; 
use DB;
use App\Services\User1Service; 

class User1Controller extends Controller
{
    use ApiResponser;

    /**
    * The service to consume the User1 Microservice
    * @var User1Service
    */
    public $user1Service;

    /**
    * Create a new controller instance
    */
    public function __construct(User1Service $user1Service)
    {
        $this->user1Service = $user1Service;
    }

    /**
    * Return the list of users from Site1
    */
    public function index()
    {
        return $this->successResponse($this->user1Service->obtainUsers1());
    }

    public function getUsers()
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
  