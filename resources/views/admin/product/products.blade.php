@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4> Products Page </h4>
    </div>
    <div class="card-body">
       <div class="table ">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Category </th>
                    <th> Name </th>
                    <th> Selling Price</th>
                    <th> Image</th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $item)
                 <tr >
                      <td > {{$item->id}}</td>
                      <td > {{$item->category->name}}</td>
                      <td> {{$item->name}}</td>
                      <td > {{$item->selling_price}}</td>
                      <td>
                       <img src="{{ asset('assets/uploads/product/'.$item->image)}}" alt="image here"
                       height="70px" width="50px" />
                    <td>
                      <a href="{{ url ('edit_product/'.$item->id)}}" class="btn btn-primary"> Edit </a>
                      <a href="{{ url ('delete_product/'.$item->id)}}"  class="btn btn-danger"> Delete </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       </div>
    </div>
</div>
@endsection
