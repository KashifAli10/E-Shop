@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4> Add Product</h4>
            <div class="card-body">
                <form action="{{ url('insert_product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <select class="form-select" name="cate_id" style="border: 1px solid #7b809a;">
                                <option value="">Select a Category</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 mt-5">
                            <div class="label"> Name
                                <input type="text" class="form-class" name="name">
                            </div>
                        </div>
                        <div class="col-6 mt-5">
                            <div class="label"> Slug
                                <input type="text" class="form-class" name="slug">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <label for="floatingTextarea">Small Descrition</label>
                                <textarea class="form-control" id="floatingTextarea" style="border: 1px solid #7b809a;"
                                name="small_description"></textarea>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <label for="floatingTextarea">Descrition</label>
                                <textarea class="form-control" id="floatingTextarea" style="border: 1px solid #7b809a;" name="description"></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="label"> Status
                                    <input type="checkbox" class="form-class" name="status">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="label"> Popular
                                    <input type="checkbox" class="form-class" name="popular">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <div class="label"> Meta Title
                                    <input type="meta_title" class="form-class" name="meta_title">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="label"> Meta_keyword
                                    <input type="meta-keywords" class="form-class" name="meta_keywords">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="label"> Meta description
                                <textarea class="form-control" id="floatingTextarea" style="border: 1px solid #7b809a;" name="meta description"></textarea>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 mb-3">
                                <label for="">Original Price </label>
                                <input type="number" name="original_price">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Selling Price </label>
                                <input type="number" name="selling_price">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 mb-3">
                                <label for="">Tax </label>
                                <input type="number" name="tax">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Quantity</label>
                                <input type="number" name="qty">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-3">
                                <label for="">Status </label>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Trending</label>
                                <input type="checkbox" name="trending">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <input type="file" name="image" class="form-control">
                        </div><br>
                        <div class="col-md-12">
                            <input type="submit" class="btn-btn-primary">
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
