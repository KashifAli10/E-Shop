@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h6> Edit/Update Category</h6>
        <div class="card-body">
            <form action="{{url ('update/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="class-md-12">
                        <div class="label"> Name
                            <input type="text" value={{$category->name }} class="form-class" name="name">
                        </div>
                    </div> <br><br>
                    <div class="class-md-12">
                        <div class="label"> Slug:
                            <input type="text"  value={{$category->slug }} class="form-class" name="slug">
                        </div>
                    </div> <br><br>
                    <div class="textarea">
                        <div class="label"> Descrition <br>
                            <input type="textarea" value={{$category->description }} name="description">
                </div> <br>
                </div>
                <div class="class-md-12">
                    <div class="label"> Status
                     <input type="checkbox" {{$category->status =="1" ? 'checked':''}} class="form-class" name="status">
                    </div>
                </div>
                <div class="class-md-12">
                    <div class="label"> Popular
                     <input type="checkbox" {{$category->populor =="1" ? 'checked':''}} class="form-class" name="popular">
                    </div>
                </div> <br>
                <div class="class-md-12">
                    <div class="label"> Meta Title
                     <input type="meta_title" value={{$category->meta_title }} class="form-class" name="meta_title">
                    </div>
                </div> <br> <br>
                <div class="class-md-12">
                    <div class="label"> Meta_keyword
                     <input type="meta-keyword" value={{$category->meta_keyword }} class="form-class" name="meta_keyword">
                    </div>
                </div> <br><br>
                <div class="class-md-12">
                    <div class="label"> Meta description
                     <input type="meta_description" value={{$category->meta_description }} class="form-class" name="meta description">
                    </div>
                </div> <br><br>
                @if ($category->image)
                <img src="{{ asset('assets/uploads/category/'. $category->image)}}" class="w-25">
                @endif
                <div class="col-md-12">
                    <button><input type="file"  name="image" class="form-control">
                    </button>
                </div><br><br>
                <div class="col-md-12">
                    <input type="submit"   class="btn-btn-primary">
                </div>
            </div>
        </form>
            </div>


     </div>
</div>


@endsection
