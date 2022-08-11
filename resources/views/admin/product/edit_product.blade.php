@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h6> Edit/Update Product</h6>
        <div class="card-body">
            <form action="{{url ('update_product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="class-md-12">
                        <div class="label"> Name
                            <input type="text" value={{$product->name }} class="form-class" name="name">
                        </div>
                    </div> <br><br>
                    <div class="class-md-12">
                        <div class="label"> Small Description
                            <input type="text"  value={{$product->small_description }} class="form-class" name="small_description">
                        </div>
                    </div> <br><br>
                    <div class="textarea">
                        <div class="label"> Descrition <br>
                            <input type="textarea" value={{$product->description }} name="description">
                </div> <br>
                </div>
                <div class="class-md-12">
                    <div class="label"> Status
                     <input type="checkbox" {{$product->status =="1" ? 'checked':''}} class="form-class" name="status">
                    </div>
                </div>
                <div class="class-md-12">
                    <div class="label"> Trending
                     <input type="checkbox" {{$product->trending =="1" ? 'checked':''}} class="form-class" name="trending">
                    </div>
                </div> <br>
                <div class="class-md-12">
                    <div class="label"> Meta Title
                     <input type="meta_title" value={{$product->meta_title }} class="form-class" name="meta_title">
                    </div>
                </div> <br> <br>
                <div class="class-md-12">
                    <div class="label"> Meta_keyword
                     <input type="meta-keyword" value={{$product->meta_keywords }} class="form-class" name="meta_keywords">
                    </div>
                </div> <br><br>
                <div class="class-md-12">
                    <div class="label"> Meta description
                     <input type="meta_description" value={{$product->meta_description }} class="form-class" name="meta description">
                    </div>
                </div> <br><br>
                @if ($product->image)
                <img src="{{ asset('assets/uploads/product/'. $product->image) }}" class="w-25">
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
