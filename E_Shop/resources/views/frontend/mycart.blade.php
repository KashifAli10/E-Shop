@extends('layouts.front')

@section('title')
    My Cart


@section('content')
<div class="container">
    <div class="card-shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                        <img src="" alt="Product Image" />
                    <div class="col-md-4">
                        <h5> Product Name </h5>
                    </div>



                            <div class="col-md-2">
                                <input type="hidden" class="prod_id" />
                                <label for="Quantity"> Quantity </label>
                                <div class="input-group text-center mb-3">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" value="1" class="form-control qty-input text-center" />
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-md-3">
                            <button type="button" class="btn btn-danger m-3 float-start">
                                <i class="fa fa-trash" ></i> </button>
                            </div>

                        </div>
                    </div>
                </div>
<div class="col-md-12">
@endsection

@endsection
