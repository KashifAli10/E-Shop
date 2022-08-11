<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function category()
    {
        $category=Category::all();
        //echo $category;
        return view('admin.category.categories', compact('category'));
    }

    public function addcategory()
    {

        return view('admin.category.addcategory');
    }

    public function insert(Request $request)
    {
           //eturn ('hello');
          // dd($request);
          $category=new Category();
          if($request->hasFile('image'))
          {
            $file=$request->file('image');
            $ext= $file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/category', $filename);
            $category->image=$filename;
          }

          $category->name=$request->name;
          $category->slug=$request->slug;
          $category->description=$request->description;
          $category->status=$request->status ==true? '1':'0';
          $category->populor=$request->popular ==true? '1':'0';
          $category->meta_title=$request->meta_title;
          $category->meta_keyword=$request->meta_keyword;
          $category->meta_description=$request->meta_description;
          $category->save();
          return redirect('/dashboard')->with('status', "Category added successfully");
    }

    public function edit($id)
    {
        //return "helo";
        $category= Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $category= Category::find($id);
        if($request->hasFile('image'))
        {
            // $path= 'assets/uploads/category/'.$category->image;
            // if(File::exists($path))
            // {
            //      File::delete($path);
            // }
            $file=$request->file('image');
            $ext= $file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/category', $filename);
            $category->image=$filename;

        }

        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->description=$request->description;
        $category->status=$request->status ==true? '1':'0';
        $category->populor=$request->popular ==true? '1':'0';
        $category->meta_title=$request->meta_title;
        $category->meta_keyword=$request->meta_keyword;
        $category->meta_description=$request->meta_description;
        $category->update();
          return redirect('/dashboard')->with('status', "Category updated successfully");
    }

    public function delete($id)
    {
         // return "yes";
         $category=Category::find($id);
         //dd($category);
            $category->delete();
         return redirect('categories')->with('status', "Category updated successfully");
    }

}
