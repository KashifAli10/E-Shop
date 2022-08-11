@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h6> Add Category</h6>
            <div class="card-body">
                <form action="{{ url('insert') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-6">
                            <div class="label"> Name
                                <input type="text" class="form-class" name="name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="label"> Slug
                                <input type="text" class="form-class" name="slug">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                        <label for="floatingTextarea">Descrition</label>
                        <textarea class="form-control" id="floatingTextarea" style="border: 1px solid #7b809a;" name="description"></textarea>
                    </div>
                </div>

                    <div class="row mt-5">
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
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="label"> Meta Title
                                <input type="meta_title" class="form-class" name="meta_title">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="label"> Meta_keyword
                                <input type="meta-keyword" class="form-class" name="meta_keyword">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="label"> Meta description
                        <textarea class="form-control" id="floatingTextarea" style="border: 1px solid #7b809a;" name="meta description"></textarea>
                    </div>
                </div>
                <div class="row mt-5">
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
