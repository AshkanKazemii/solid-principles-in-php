<?php

namespace App\SRP\Excellent\Method ;

use App\Request\SRP\Excellent\CreateNewUserRequest;
use App\Repositories\SRP\Excellent\CreateNewUserRepo ;


// Does not respect clean code
class CreateUser
{
    public function __invoke(CreateNewUserRepo $createNewUserRepo , CreateNewUserRequest $request)
    {
        $data = $request->rules() ;

        $createNewUserRepo($data) ;

        //return or redirect route 
    }
}
