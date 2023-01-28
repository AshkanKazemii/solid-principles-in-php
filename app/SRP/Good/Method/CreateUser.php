<?php

namespace App\SRP\Good\Method ;


use App\Request\SRP\Good\CreateNewUserRequest;
use App\Repositories\SRP\Good\CreateNewUserRepo ;


// Does not respect clean code
class CreateUser
{
    public function create(CreateNewUserRepo $createNewUserRepo , CreateNewUserRequest $request)
    {
        $data = $request->rules() ;

        $createNewUserRepo->CreateNewUser($data) ;

        //return or redirect route 
    }
}
