<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminfrontendController extends Controller
{
    public function index()
    {
          return view('admin.index');

       /* $numbers = array(0,10,80,67,60,89,91,56,45,30,95,83);
$length = count($numbers);
$max = $numbers[0];
for($i=1;$i<$length;$i++)
{
if($numbers[$i]>$max)
{
$max = $numbers[$i];
}
}
Echo "the biggest number in the array is ".$max;

        $collection = collect([1, 2, 3]);
        if ($collection [0] > $collection[1] && $collection [2])
       {
            echo "Greatest",$collection[1];
       }
       elseif($collection [1] > $collection[2])
       {
        echo "greatest", $collection[1];
       }else {
       echo "Greatest",$collection[2];
    }
*/

    }



}
