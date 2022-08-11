<?php

namespace App\CustomLibrary;

use Illuminate\Support\Facades\Facade;

class UserFacade extends Facade
{
protected static function getFacadeAccessor()
 {
    return new User();
 }
}

?>
