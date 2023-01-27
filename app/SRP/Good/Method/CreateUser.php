<?php

namespace App\SRP\Good\Method ;

use App\Repositories\SRP\Good\CreateNewUserRepo ;
use App\Request\SRP\Good\DeleteUserRequest ;

include_once __DIR__ . "/../../../../vendor/autoload.php" ;

// Does not respect clean code
class CreateUser
{
    public function create(CreateNewUserRepo $createNewUserRepo , CreateNewUserRequest $request)
    {
        $request->rules() ;

        $createNewUserRepo->create() ;

        //return or redirect route 
    }
}
