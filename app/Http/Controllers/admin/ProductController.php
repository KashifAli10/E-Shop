<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function product()
    {
        $product=Product::all();
        //echo $category;
        return view('admin.product.products', compact('product'));
    }

    public function addproduct()
    {
        $category=Category::all();
        //echo $category;
        return view('admin.product.addproduct', compact('category'));
    }

    public function insert_product(Request $request)
    {
           //return ('hello');
        // dd($request);
          $product=new Product();
          if($request->hasFile('image'))
          {
            $file=$request->file('image');
            $ext= $file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/product', $filename);
            $product->image=$filename;
          }
          $product->cate_id=$request->cate_id;
          $product->name=$request->name;
          $product->slug=$request->slug;
          $product->small_description=$request->small_description;
          $product->description=$request->description;
          $product->original_price=$request->original_price;
          $product->selling_price=$request->selling_price;
          $product->qty=$request->qty;
          $product->tax=$request->tax;
          $product->status=$request->status ==true? '1':'0';
          $product->trending=$request->trending ==true? '1':'0';
          $product->meta_title=$request->meta_title;
          $product->meta_keywords=$request->meta_keywords;
          $product->meta_description=$request->meta_description;
          $product->save();
          return redirect('/products')->with('status', "Product added successfully");
       }

    public function edit($id)
    {
        //return "helo";
        $product= Product::find($id);
        return view('admin.product.edit_product', compact('product'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $product= product::find($id);
        if($request->hasFile('image'))
        {
            // $path= 'assets/uploads/product/'.$product->image;
            // if(File::exists($path))
            // {
            //      File::delete($path);
            // }
            $file=$request->file('image');
            $ext= $file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/product', $filename);
            $product->image=$filename;

        }

        $product->name=$request->name;
        $product->small_description=$request->small_description;
        $product->description=$request->description;
        $product->status=$request->status ==true? '1':'0';
        $product->trending=$request->trending ==true? '1':'0';
        $product->meta_title=$request->meta_title;
        $product->meta_keywords=$request->meta_keywords;
        $product->meta_description=$request->meta_description;
        $product->update();
          return redirect('/products')->with('status', "product updated successfully");
    }

    public function delete($id)
    {
         // return "yes";
         $product=Product::find($id);
         //dd($product)
            $product->delete();
         return redirect('products')->with('status', "product deleted successfully");
    }

}
