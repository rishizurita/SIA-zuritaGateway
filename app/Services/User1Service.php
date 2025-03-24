<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service
{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.users1.base_uri');
    }
    
    /**
    * Obtain the full list of Users from Site1
    * @return string
    */
    public function obtainUsers1()
    {
        return $this->performRequest('GET', '/users'); 
        // This will call GET localhost:8000/users (our Site1)
    }
}
