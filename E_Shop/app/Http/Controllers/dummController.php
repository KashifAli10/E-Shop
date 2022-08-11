<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class dummController extends Controller
{
     //SAVE DATA
     function storedata(Request $request)
     {
         //return $request;
         $user = new User;
         $user->name=$request->name;
         $user->email=$request->email;
         $user->password=$request->password;
         $result=$user->save();
         if($result)
         {
             return ["data has been saved"];
         }
          else
          {
             return ["data save Failed"];
          }
     }
}
