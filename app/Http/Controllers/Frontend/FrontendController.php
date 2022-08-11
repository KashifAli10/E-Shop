<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
   {
   // $data=Cart::all();
    //dd ($data);
   // return $data;
    $trending_product=Product::where('trending','1')->take(15)->get();
    //dd($trending_product);
    $popular_category=Category::where('populor','1')->take(15)->get();
    //dd($popular_category);
    return view('frontend.index', compact('trending_product','popular_category'));
   }
   public function category()
   {
    $category=Category::where('status','0')->get();
    //dd($category);
    return view('frontend.category', compact('category'));
   }

   public function view_category($slug)
  {
         if(Category::where('slug',$slug)->exists())
         {
            $category=Category::where('slug',$slug)->first();
           // dd($category);
           $product=Product::where('cate_id', $category->id)->get();
           // dd($product);
            return view ('frontend.products.index', compact('category','product'));
         }
         else
         {
           return redirect('/')->with('status', "Slug does not Exits");
         }
   }
   public function product_view($cate_slug, $product_slug)
   {
    if(Category::where('slug',$cate_slug)->exists())
    {
        if(Product::where('slug',$product_slug)->exists())
        {
            $product=Product::where('slug',$product_slug)->first();
            return view('frontend.products.view', compact('product'));
        }
        else
        {
          return redirect('/')->with('status', "The link was broken");
        }
    }
    else
    {
      return redirect('/')->with('status', "No such Category found");
    }
   }
}
