<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service
{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.users2.base_uri');
    }

     /**
    * Obtain the full list of Users from User2 Service
    * @return string
    */
    public function obtainUsers2()
    {
        return $this->performRequest('GET', '/users'); 
        // This will call GET localhost:8001/users (our Site2)
    }
}
