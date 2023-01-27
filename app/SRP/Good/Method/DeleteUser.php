<?php

namespace App\SRP\Good\Method ;

use App\Repositories\SRP\Good\DeleteUserRepo ;
use App\Request\SRP\Good\DeleteUserRequest ;

include_once __DIR__ . "/../../../../vendor/autoload.php" ;

// Does not respect clean code
class DeleteUser
{
    public function delete(DeleteUserRepo $deleteUserRepo , DeleteUserRequest $request)
    {
        $request->rules() ;

        $deleteUserRepo->delete() ;

        //return or redirect route 
    }
}