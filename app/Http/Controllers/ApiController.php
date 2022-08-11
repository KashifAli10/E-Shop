<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function getdata()
    {
        return ["name"=>"Kashif","email"=>"Kashifshahd@gmail.com"];
       // return User::all();
    }
    function dbdata()
    {
         $user=User::all();
         return $user;
    }
    function dbdatapara($id=null)
    {
         return $id? User::find($id): User::all();

    }
   //  to get all specific data of database
    function dbpara()
    {
        foreach (User::all() as $flight)
        {
            echo $flight->name;
         }
     }
    function Db_queries()
    {
        $flights = User::where('name', 'kashif')->get();
        return $flights;
    }

    //SAVE DATA
    function storedata(Request $request)
    {
        //return $request;
       // dd($request->all());
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

