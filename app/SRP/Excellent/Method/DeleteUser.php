<?php

namespace App\SRP\Good\Method ;

use App\Repositories\SRP\Good\DeleteUserRepo ;
use App\Request\SRP\Good\DeleteUserRequest ;


// Does not respect clean code
class DeleteUser
{
    public function delete(DeleteUserRepo $deleteUserRepo , DeleteUserRequest $request)
    {
        $data = $request->rules() ;

        $deleteUserRepo($data) ;

        //return or redirect route 
    }
}